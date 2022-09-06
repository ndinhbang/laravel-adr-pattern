This is a simple demo about ADR (Action - Domain - Responder) pattern in laravel

***how to run***

cp .env.example .env (then edit database info in .env file)

composer update -vvv

php artisan migrate

php artisan db:seed

access url: /news, /news/{id} to view response


