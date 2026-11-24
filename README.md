# Sanitry

Hygiene and sanitation supplies — inventory, POS, purchases, and sales (Laravel).

## Local setup (Laragon)

- **URL:** http://sanitry.test/
- **Database:** `sanitry` (MySQL, user `root`, empty password)
- **Default login:** `admin` / `admin` (see seeded admin user in installer docs)

```bash
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate --seed
```

The public site is disabled for this demo; opening `/` redirects to the staff **login** page.

## License

MIT (Laravel framework). Application modules per vendor license.