## Rest API using Eloquent Laravel

Version 1.0<br>
Case: Menus. <br>
This API can display all menus, seach menu by id, edit menu, dan drop menu.

**First, you need to install your laravel project:**

```
composer create-project --prefer-dist laravel/laravel rest_api_using_eloquent_laravel
cd rest_api_using_eloquent_laravel
```
Then setup your database in .env

**Create model**
```
php artisan make:model Menus -m
```
Then go to edit migration file, initial your table.

**Migrate to create table to DB**
```
php artisan migrate</p>
```
Then go to check your DB

**Make dummy data using Faker and Seeder**
```
php artisan make:factory MenusFactory
```
go to edit factories file.
```
php artisan make:seeder MenusTableSeeder
```
go to seeder file, set how much dummy data you want. and call this seeder to databaseSeeder.
```
php artisan db:seed
```
wussh you got your dummy data.

**Create controller**
```
php artisan make:controller MenusController --resource --model=Menus
```

Update route file, web.php.

## This is the output:
###### 1. Get all menus
![image](https://drive.google.com/uc?export=view&id=1k99P4nebAEUhMU8H421Rn16Wpxi64w4O)

###### 2. Get menu by id
![image](https://drive.google.com/uc?export=view&id=1dPaCYwPD1gv9_XNHyjLyWHqawYLN9v5Y)

###### 3. Create menu
![image](https://drive.google.com/uc?export=view&id=1OQ0hF-nXvnvzyRSKDHSYrtVQHOGA-xhJ)

###### 4. Edit menu
![image](https://drive.google.com/uc?export=view&id=1uFdfQpQJKiO2vwbKtLYOVFyVrXQb-7j5)

###### 5. Drop menu
![image](https://drive.google.com/uc?export=view&id=1Fk3kUHJYDwsWTYN3765XUsgmqIioHoTB)
