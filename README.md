1.Run Xampp:
sudo /opt/lampp/manager-linux-x64.run

2.Create Project:
composer create-project --prefer-dist laravel/laravel pizzahouse

3.Run Project: 
cd pizzahouse
php artisan serve

4.Create migration to create table in db
php artisan make:migration create_pizzas_table