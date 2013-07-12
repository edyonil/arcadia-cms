[![Latest Stable Version](https://poser.pugx.org/ludo237/laravel-boilerplate/v/stable.png)](https://packagist.org/packages/ludo237/laravel-boilerplate)
[![Total Downloads](https://poser.pugx.org/ludo237/laravel-boilerplate/downloads.png)](https://packagist.org/packages/ludo237/laravel-boilerplate)
[![Build Status](https://travis-ci.org/laravel/framework.png)](https://travis-ci.org/laravel/framework)
# Laravel-Boilerplate

Laravel Boilerplate lets you create a Laravel based CMS with just few step of configuration.

* Web site: https://github.com/ludo237/laravel-boilerplate
* Support: http://www.twitter.com/ludo237
 
The purpose is to create a simple User Managment System with Laravel 4, because I think it is one of the best Framework
around at the moment, you should give it a try.
 
This system will be composed by:
- Front end made with "Foundation 4" by Zurb (http://foundation.zurb.com/).
- User sign up and sign in with profile management.
- Admin backend with user management.
- News feed, admin only, with Auth comments.
- Multilanguage supports (at least two: Italian and English)


If you want to contribute feel free to fork this project, pull requests and open issue tickets.

Hope you will enjoy with this.

## How to install

Laravel-Boilerplate it's very easy to install. Just clone this repo (or download it) and follow this few steps:
- Open /app/config/app.php and fill the detail about url, debug and the key. They are very well commented so just go there and read.
- Open /app/config/database.php and choose the Database you prefer most. The default Database is mysql-osx.
- Create the table with the name that you choose.
- Open Terminal and run "php artisan migrate" and if everything is correct you should see your database with all the tables.
- If you want to populate your database with some examples just run "php artisan db:seed"
- Run it on a browser and Enjoy.
