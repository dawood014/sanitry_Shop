# Deploying AY Electronics (Laravel) on shared hosting / VPS

This app is wired to behave like **local dev** once the server has the correct **filesystem layout**, **`.env`**, and **composer install**. The codebase now:

- **Creates missing `storage/*` folders** automatically on boot / console (fixes Monolog / cache errors).
- **Creates `public/storage` → `storage/app/public`** when PHP `symlink()` works, or falls back to `ln -snf` on Linux SSH when PHP disables symlink.
- **Trusts reverse-proxy headers** via `config/trustedproxy.php` (default `TRUSTED_PROXIES=*`) so **`APP_URL` with HTTPS** matches real URLs behind Hostinger / Cloudflare.
- Runs **`auth` before `common`** middleware so POS routes never call `Auth::user()` before the session guard.

## 1. Document root

Use one of:

- **A (recommended Hostinger-style):** project root lives in `public_html` (same folder as `artisan`). The included **root `.htaccess`** forwards requests to **`server.php`** → **`public/index.php`**.
- **B:** Document root points only at **`public/`**. Then only use **`public/.htaccess`**, no root rewrite.

Ensure **`public/index.php`** still resolves `../vendor` and `../bootstrap` relative to **`public/`**.

## 2. Environment (`public_html/.env`)

```dotenv
APP_ENV=production
APP_DEBUG=false
APP_KEY=base64:...        # php artisan key:generate
APP_URL=https://your-domain.com

TRUSTED_PROXIES=*        # Or false / none to disable trusting X-Forwarded-*

DB_*=...

SESSION_DRIVER=file
CACHE_DRIVER=file
```

After changes:

```bash
php artisan config:clear
php artisan cache:clear
```

Optional when stable:

```bash
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

## 3. Install & migrate

```bash
composer install --no-dev --optimize-autoloader
php artisan migrate --force
php artisan db:seed --force
```

If `storage:link` fails (`symlink` disabled), create the link over SSH:

```bash
cd public && ln -snf ../storage/app/public storage
```

## 4. Permissions

```bash
chmod -R ug+rwx storage bootstrap/cache
```

## 5. Git pull conflicts on `storage/`

Tracked files live under **`storage/`** only as `.gitignore` placeholders. If the server already has **untracked** files there, back up (`tar`) or `mv storage storage.bak`, then `git pull`, then restore **only** **`storage/app/public`** uploads from backup if needed.

## 6. Still broken?

1. Confirm MySQL **`1045` is resolved** (panel credentials ↔ `.env`).
2. **`php artisan optimize:clear`**
3. Check **`storage/logs/laravel.log`** after the writable-path bootstrap above.
