 
## About Laravel

Laravel With Mongodb Demo For Users

 
## Configuration.


## Database Configuration
Change in file => .env from root project

DB_CONNECTION=mongodb
DB_HOST=127.0.0.1
DB_PORT=27017
DB_DATABASE=laravel_mongodb
DB_USERNAME=
DB_PASSWORD=

## Database location
- 1. Firstly create "users" collection in you're mongodb database.
    then import data from this file ./database/users.json

## Requirements
- 1. PHP ^7.1.3 Up

## run project
    composer install 
    php artisan serve 


 