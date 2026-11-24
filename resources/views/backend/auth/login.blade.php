@extends('layouts.website')

@section('title', __('db.LogIn') . ' | ' . ($general_setting->site_title ?? config('app.name')))
@section('meta_description', 'Staff sign-in for the admin panel.')

@if(!empty($general_setting->font_css))
    @push('head')
        {!! $general_setting->font_css !!}
    @endpush
@endif

@if(!empty($general_setting->auth_css))
    @push('styles')
        {!! $general_setting->auth_css !!}
    @endpush
@endif

@push('head')
    <meta name="robots" content="noindex,follow">
    <link rel="manifest" href="{{ url('manifest.json') }}">
    @if(!empty($general_setting->site_logo))
        @if(!config('database.connections.saleprosaas_landlord'))
            <link rel="icon" type="image/png" href="{{ url('logo', $general_setting->site_logo) }}" />
        @else
            <link rel="icon" type="image/png" href="{{ url('../../logo', $general_setting->site_logo) }}" />
        @endif
    @endif
@endpush

@push('styles')
    <style>
        .ly-alert {
            font-size: .9rem;
            padding: 12px 14px;
            border-radius: var(--r, 10px);
            margin-bottom: 16px;
            text-align: left;
            border: 1px solid var(--bd, #e2e8f0)
        }

        .ly-alert--danger {
            background: rgba(239, 68, 68, .08);
            color: #991b1b;
            border-color: rgba(239, 68, 68, .35)
        }

        .ly-alert--ok {
            background: rgba(34, 197, 94, .08);
            color: #166534;
            border-color: rgba(34, 197, 94, .35)
        }

        .login-fld-wrap {
            margin-bottom: 16px;
            text-align: left
        }

        .login-fld-wrap label {
            font-size: .82rem;
            font-weight: 600;
            color: var(--muted, #64748b);
            display: block;
            margin-bottom: 6px;
            font-family: var(--fb, inherit)
        }

        .login-fld {
            width: 100%;
            padding: 12px 14px;
            border: 1px solid var(--bd, #e2e8f0);
            border-radius: var(--r, 10px);
            font-family: var(--fb, inherit);
            font-size: 1rem
        }

        .login-pass-wrap {
            position: relative
        }

        .toggle-pass {
            position: absolute;
            right: 12px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            color: var(--muted, #64748b);
            background: none;
            border: 0;
            padding: 4px
        }

        .login-links {
            margin-top: 18px;
            font-size: .9rem
        }

        .login-links a {
            color: var(--p, #1b3fc4);
            font-weight: 600
        }

        .login-demo {
            background: rgba(255, 255, 255, .95);
            border: 1px solid var(--bd, #e2e8f0);
            padding: 16px;
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            z-index: 99;
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            justify-content: center;
            align-items: center;
            font-size: 11px;
            color: var(--muted, #64748b)
        }

        .login-demo .btn-sm {
            padding: 6px 12px;
            font-size: .75rem
        }
    </style>
@endpush

@section('content')
    <section class="sec" style="padding-top:100px;padding-bottom:88px">
        <div class="con" style="max-width:440px;margin:0 auto">
            <div class="wc" style="text-align:center">
                <div class="wico" style="margin:0 auto 16px"><i class="fas fa-user-shield"></i></div>
                <h2 class="ttl" style="font-size:1.35rem;margin-bottom:8px">{{ __('db.LogIn') }}</h2>
                <p style="margin:0 0 24px;color:var(--muted)">Staff portal — same look as our public website.</p>

                <div style="margin-bottom:20px">
                    @if(!empty($general_setting->site_logo))
                        <img src="{{ url('logo', $general_setting->site_logo) }}" alt=""
                            style="max-height:64px;width:auto;">
                    @else
                        <div class="ttl" style="font-size:1.4rem;line-height:1.2">{{ $general_setting->site_title }}</div>
                    @endif
                </div>

                @if (session()->has('delete_message'))
                    <div class="ly-alert ly-alert--danger" role="alert">{{ session()->get('delete_message') }}</div>
                @endif
                @if (session()->has('message'))
                    <div class="ly-alert ly-alert--ok" role="alert">{!! session()->get('message') !!}</div>
                @endif
                @if (session()->has('not_permitted'))
                    <div class="ly-alert ly-alert--danger" role="alert">{{ session()->get('not_permitted') }}</div>
                @endif

                <form method="POST" action="{{ route('login') }}" id="login-form">
                    @csrf
                    <div class="login-fld-wrap">
                        <label for="login-username">{{ __('db.UserName') }}</label>
                        <input id="login-username" type="text" name="name" required class="login-fld" value=""
                            autocomplete="username">
                    </div>
                    <div class="login-fld-wrap login-pass-wrap">
                        <label for="login-password">{{ __('db.Password') }}</label>
                        <input id="login-password" type="password" name="password" required class="login-fld" value=""
                            autocomplete="current-password" style="padding-right:42px;">
                        <button type="button" class="toggle-pass" id="togglePassword" aria-label="Show password"><i class="fas fa-eye-slash"></i></button>
                    </div>

                    @if (session()->has('error'))
                        <p style="margin:0 0 16px;color:#b91c1c;font-weight:600;text-align:center;">
                            {{ session()->get('error') }}</p>
                    @endif

                    <button type="submit" class="btn bp" style="width:100%;justify-content:center;"><i class="fas fa-sign-in-alt"></i>
                        {{ __('db.LogIn') }}</button>
                </form>

                <div class="login-links">
                    @if(($general_setting->disable_forgot_password ?? 0) == 0)
                        <div style="margin-bottom:10px">
                            <a href="{{ route('password.request') }}">{{ __('db.Forgot Password?') }}</a>
                        </div>
                    @endif

                    @if(($general_setting->disable_signup ?? 1) == 0)
                        <div class="register-section">
                            {{ __('db.Do not have an account?') }}
                            <a href="{{ url('register') }}">{{ __('db.Register') }}</a>
                        </div>
                    @endif
                </div>

                @if(!empty($general_setting->developed_by))
                    <div style="margin-top:28px;font-size:.85rem;color:var(--muted);">
                        {{ __('db.Developed By') }}
                        <span>{{ $general_setting->developed_by }}</span>
                    </div>
                @endif
            </div>
            <div style="text-align:center;margin-top:20px;font-size:.9rem">
                <a href="{{ route('website.home') }}" class="bo btn" style="text-decoration:none"><i class="fas fa-arrow-left"></i>
                    Back to website</a>
            </div>
        </div>
    </section>

    @if (!env('USER_VERIFIED') && !config('database.connections.saleprosaas_landlord'))
        <div class="login-demo" id="login-demo-strip">
            <div style="text-align:center">
                <div style="margin-bottom:8px">Demo login as</div>
                <button type="button" class="btn bp btn-sm admin-btn">Admin</button>
                <button type="button" class="btn bo btn-sm staff-btn">Staff</button>
                <button type="button" class="btn bo btn-sm customer-btn">Customer</button>
            </div>
            <div style="border-left:1px solid var(--bd);padding-left:16px;text-align:center">
                <div style="margin-bottom:8px">Premium add-ons</div>
                <a href="https://salepropos.com/ecommerce/" class="btn bp btn-sm" target="_blank" rel="noopener">eCommerce</a>
                <a href="?demo_db_name=sale_woocom" class="btn bo btn-sm demo-btn">WooCommerce</a>
                <a href="https://lion-coders.com/software/salepro-saas-pos-inventory-saas-php-script"
                    target="_blank" rel="noopener" class="btn bo btn-sm">SAAS</a>
            </div>
        </div>
    @endif
@endsection

@push('scripts')
    @if(!config('database.connections.saleprosaas_landlord'))
        <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    @else
        <script src="{{ asset('../../vendor/jquery/jquery.min.js') }}"></script>
    @endif
    <script>
        @if (config('database.connections.saleprosaas_landlord'))
            if (localStorage.getItem("message")) {
                alert(localStorage.getItem("message"));
                localStorage.removeItem("message");
            }
            @if(!empty($general_setting->package_id))
                var numberOfUserAccount = <?php echo json_encode($numberOfUserAccount); ?>;
                $.ajax({
                    type: 'GET',
                    async: false,
                    url: '{{ route("package.fetchData", $general_setting->package_id) }}',
                    success: function(data) {
                        if (data['number_of_user_account'] > 0 && data['number_of_user_account'] <= numberOfUserAccount) {
                            $(".register-section").hide();
                        }
                    }
                });
            @endif
        @endif

        $("div.ly-alert").delay(4000).slideUp(800);

        document.getElementById('togglePassword').addEventListener('click', function() {
            var pwd = document.getElementById('login-password');
            var icon = this.querySelector('i');
            if (pwd.getAttribute('type') === 'password') {
                pwd.setAttribute('type', 'text');
                icon.classList.remove('fa-eye-slash');
                icon.classList.add('fa-eye');
            } else {
                pwd.setAttribute('type', 'password');
                icon.classList.remove('fa-eye');
                icon.classList.add('fa-eye-slash');
            }
        });

        $('.demo-btn').on('click', function(e) {
            e.preventDefault();
            $("input[name='name']").focus().val('admin');
            $("input[name='password']").focus().val('admin');
            $('#login-form').attr('action', $(this).attr('href')).submit();
        });

        $('.admin-btn').on('click', function() {
            $("input[name='name']").val('admin');
            $("input[name='password']").val('admin');
            $('#login-form').submit();
        });
        $('.staff-btn').on('click', function() {
            $("input[name='name']").val('staff');
            $("input[name='password']").val('staff');
            $('#login-form').submit();
        });
        $('.customer-btn').on('click', function() {
            $("input[name='name']").val('james');
            $("input[name='password']").val('james');
            $('#login-form').submit();
        });
    </script>
@endpush
