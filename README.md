# African Roots API using Laravel Passport

## Installation

 - Clone the repository
 - Set up database credentials in the .env file
 - Run ```composer update```
 - Run ```php artisan migrate``` to migrate the database
 - Run ```php artisan db:seed``` to seed data into the database

## API Routes

```https://dev-african-roots.herokuapp.com/api/register [POST]```

```https://dev-african-roots.herokuapp.com/api/login [POST]```
```https://dev-african-roots.herokuapp.com/api/meals [GET]```
```https://dev-african-roots.herokuapp.com/api/inventory [GET]```
```https://dev-african-roots.herokuapp.com/api/orders [GET]```
(you can also substitute the base url with 127.0.0.1:8000/ remember to run php artisan serve)

## Useful Links

- https://jenssegers.com/projects/laravel-mongodb
- https://stackoverflow.com/questions/49905826/trying-to-get-property-id-of-non-object-on-passport-after-createtoken
- https://github.com/sadnub/laravel-mongodb-passport-fix
- https://stackoverflow.com/questions/51745860/laravel-put-patch-request
