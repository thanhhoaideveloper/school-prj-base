How to Run
cp .env.envexample .env
composer install
composer dump-autoload
php artisan migrate:fresh --seed
php artisan serve
