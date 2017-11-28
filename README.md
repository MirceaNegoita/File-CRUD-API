# File-CRUD-API
Laravel 5.5 CRUD application (with file upload) and API view

To import the project in your local enviroment download or clone the application. Open the project directory with your preffered terminal and update it with composer
```bash
composer install
composer update
```
Note : the project is built with laravel 5.5 so PHP7+ is a requirment

Open the .env.example and copy it to .env and update the database credentials with your own like in the example below

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=dbname
DB_USERNAME=root
DB_PASSWORD=

Now run the migrations and serve the application 

```bash
php artisan migrate
php artisan serve
```
This will start your application at https://localhost:8000. Go ahead and register an account

After which you can add some products, view information about them, edit them and delete them, you can also view JSON API data via the API button.

Note: in order to skip registration and just view the application you can go in App/Http/Controllers/ProductsController.php and remove the following lines of code
```php
public function __construct(){
    $this->middleware('auth');
}
```
Add the url paths in the welcome.blade.php if you do this.
