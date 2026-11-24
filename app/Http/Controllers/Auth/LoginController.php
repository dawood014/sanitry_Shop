<?php



namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use Throwable;
use Cache;
use DB;


class LoginController extends Controller

{



    use AuthenticatesUsers;



    protected $redirectTo = null;

    /**

     * Create a new controller instance.

     *

     * @return void

     */

    public function __construct()

    {

        $this->middleware('guest')->except('logout');

    }

    public function showLoginForm()
    {
        $theme = $_COOKIE['theme'] ?? 'light';

        $defaults = [
            'site_title' => config('app.name'),
            'site_logo' => null,
            'font_css' => null,
            'auth_css' => '',
            'disable_forgot_password' => 0,
            'disable_signup' => 1,
            'developed_by' => '',
            'package_id' => null,
        ];

        $general_setting = (object) $defaults;
        try {
            if (Schema::hasTable('general_settings')) {
                $fromDb = Cache::remember('general_setting', 60 * 60 * 24 * 365, function () {
                    return DB::table('general_settings')->latest()->first();
                });
                if ($fromDb !== null) {
                    $general_setting = (object) array_merge($defaults, (array) $fromDb);
                }
            }
        } catch (Throwable $e) {
            //
        }

        $numberOfUserAccount = 0;
        try {
            if (Schema::hasTable('users')) {
                $numberOfUserAccount = \App\Models\User::where('is_active', true)->count();
            }
        } catch (Throwable $e) {
            //
        }

        return view('backend.auth.login', [
            'theme' => $theme,
            'general_setting' => $general_setting,
            'numberOfUserAccount' => $numberOfUserAccount,
            'activeNav' => 'login',
        ]);
    }

    public function login(Request $request)
    {
        ///////////////////////
        if (!env('USER_VERIFIED') && $request->has('demo_db_name')) {
            session(['database' => $request->query('demo_db_name')]);
        }
        ///////////////////////

        $input = $request->all();

        $this->validate($request, [
            'name' => 'required',
            'password' => 'required',
        ]);

        $fieldType = filter_var($request->name, FILTER_VALIDATE_EMAIL) ? 'email' : 'name';

        if(auth()->attempt(array($fieldType => $input['name'], 'password' => $input['password'])))
        {
            setcookie('login_now', 1, time() + (86400 * 1), "/");
            //return redirect('/dashboard');
            return redirect()->intended('/dashboard');
        }
        else {
            return redirect()->route('login')->with('error', __('db.Username And Password Are Wrong.'));
        }
    }

    public function logout(Request $request)
    {
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}
