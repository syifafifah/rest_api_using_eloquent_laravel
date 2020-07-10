## Rest API using Eloquent Laravel

Version 1.0
Case: Menus. 
This API can display all menus, seach menu by id, edit menu, dan drop menu.

First, you need to install your laravel project:
-- composer create-project --prefer-dist laravel/laravel rest_api_using_eloquent_laravel
-- cd rest_api_using_eloquent_laravel
Setup your database in .env

Create model
-- php artisan make:model Menus -m
go to edit migration file, initial your table.

Migrate to create table to DB
-- php artisan migrate
go to check your DB

Make dummy data using Faker and Seeder
-- php artisan make:factory MenusFactory
go to edit factories file.
-- php artisan make:seeder MenusTableSeeder
go to seeder file, set how much dummy data you want. and call this seeder to databaseSeeder.
-- php artisan db:seed
wussh you got your dummy data.

Create controller
-- php artisan make:controller MenusController --resource --model=Menus

Update route file, web.php.

This is the output:
1. Get all menus
<img src="https://drive.google.com/file/d/1k99P4nebAEUhMU8H421Rn16Wpxi64w4O/view?usp=sharing">
2. Get menu by id
<img src="https://drive.google.com/file/d/1dPaCYwPD1gv9_XNHyjLyWHqawYLN9v5Y/view?usp=sharing">
3. create menu
<img src="https://drive.google.com/file/d/1OQ0hF-nXvnvzyRSKDHSYrtVQHOGA-xhJ/view?usp=sharing">
4. edit menu
<img src="https://drive.google.com/file/d/1uFdfQpQJKiO2vwbKtLYOVFyVrXQb-7j5/view?usp=sharing">
5. drop menu
<img src="https://drive.google.com/file/d/1Fk3kUHJYDwsWTYN3765XUsgmqIioHoTB/view?usp=sharing">
