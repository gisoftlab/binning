
dir
composer install
npm install

php artisan serve

npm run dev
npm run production
npm run watch

http://127.0.0.1:8000/compute


php artisan app:compute 1 Addition 2
php artisan app:compute 2 Subtraction 1
php artisan app:compute 2 Multiplication 2
php artisan app:compute 4 Division 2

./vendor/bin/phpunit tests/Unit/ComputeTest.php


php artisan make:test ComputeTest --unit
php artisan make:test ComputeTest