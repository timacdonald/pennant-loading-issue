```
git clone git@github.com:timacdonald/pennant-loading-issue.git
cd pennant-loading-issue
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate --force
php artisan serve
```
