# Project overview :

Project built on Xampp php 7.4.27 Laravel 8.

This project consists of two roles user(default) and admin.

User will be able to fill all their information and preferences.

User will get match recommendations according to their preference.

Admin will be able to see users and their preferences along with sorting options.

# Setup:

Git clone the repository using 'git clone {repo-link}'.

Use 'php artisan serve' to live project on local host.

Create database in phpmyadmin and edit .env file database name.

Import mySQL file or use 'php artisan migrate' to create tables.

Seeder seeds admin data and users can be manually filled or seeded.

Use 'php artisan db:seed' to seed user and admin.

# Directions:

Go to http://localhost:8000/ get a welcome screen (Basic).

Choose to Register you will be redirected automatically to login.

Login and enter to see matched preferences.

To explore Admin panel :

Admin should be filled through seeder. So, use email 'admin@gmail.com' and password '12345678' (as pre-filled in seeder).

Welcome to Admin panel! Now you can see other users and their preferences.


![SS1](https://github.com/Abhish-ek1/cupidknot/blob/master/Screenshot%201.png)