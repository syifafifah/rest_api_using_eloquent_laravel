## Rest API using Eloquent Laravel

Version 1.0
Case: Menus. 
This API can display all menus, seach menu by id, edit menu, dan drop menu.

First, you need to install your laravel project:

<p>-- composer create-project --prefer-dist laravel/laravel rest_api_using_eloquent_laravel<br>
-- cd rest_api_using_eloquent_laravel</p>
Setup your database in .env<br>

Create model
<p>-- php artisan make:model Menus -m</p>
go to edit migration file, initial your table.<br>

Migrate to create table to DB
<p>-- php artisan migrate</p>
go to check your DB<br>

Make dummy data using Faker and Seeder
<p>-- php artisan make:factory MenusFactory</p>
go to edit factories file.
<p>-- php artisan make:seeder MenusTableSeeder</p>
go to seeder file, set how much dummy data you want. and call this seeder to databaseSeeder.
<p>-- php artisan db:seed</p>
wussh you got your dummy data.<br>

Create controller
<p>-- php artisan make:controller MenusController --resource --model=Menus</p>

Update route file, web.php.<br>

This is the output:
## 1. Get all menus
![image](https://drive.google.com/uc?export=view&id=1k99P4nebAEUhMU8H421Rn16Wpxi64w4O)

## 2. Get menu by id
![image](https://drive.google.com/uc?export=view&id=1dPaCYwPD1gv9_XNHyjLyWHqawYLN9v5Y)

## 3. create menu
![image](https://drive.google.com/uc?export=view&id=1OQ0hF-nXvnvzyRSKDHSYrtVQHOGA-xhJ)

## 4. edit menu
![image](https://drive.google.com/uc?export=view&id=1uFdfQpQJKiO2vwbKtLYOVFyVrXQb-7j5)

## 5. drop menu
![image](https://drive.google.com/uc?export=view&id=1Fk3kUHJYDwsWTYN3765XUsgmqIioHoTB)
