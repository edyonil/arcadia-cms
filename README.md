[![Latest Stable Version](https://poser.pugx.org/ludo237/laravel-boilerplate/v/stable.png)](https://packagist.org/packages/ludo237/laravel-boilerplate)
[![Total Downloads](https://poser.pugx.org/ludo237/laravel-boilerplate/downloads.png)](https://packagist.org/packages/ludo237/laravel-boilerplate)
[![Build Status](https://travis-ci.org/ludo237/laravel-boilerplate.png)](https://travis-ci.org/ludo237/laravel-boilerplate)
# Arcadia CMS

Arcadia CMS lets you create a Laravel based CMS with just few steps of configuration.

* Web site: https://github.com/ludo237/Arcadia-CMS
* Support: http://www.twitter.com/ludo237
 
The purpose is create a simple User Managment System with Laravel 4 because I think it is one of the best PHP Framework at the moment, you should give it a try.
 
This system will be composed by:
- Front end made with "Foundation 4" by Zurb (http://foundation.zurb.com/).
- User sign up and sign in with profile management.
- Admin backend with user management.
- News feed with Auth comments.
- Multilanguage supports (at least two: Italian and English)

If you want to contribute feel free to fork this project, pull requests and open issue tickets
 please read the <a href="https://github.com/ludo237/Arcadia-CMS/blob/master/CONTRIBUTING.md" target="_blank">Contributing Rules</a> first.

Hope you will enjoy with this.

## How to install

Arcadia CMS it's very easy to install. Just clone this repo (or download it) and follow this few steps:

* Open /app/config/app.php and fill the detail about url, debug. They are very well commented so just go there and read the comments. This is an example:

```
(
	'debug'	=> true,
	'url'	=> 'yoursite.com',
)
```

* Generate the key via Terminal using

```
php artisan key:generate
```

* Open /app/config/database.php and choose the Database you prefer most. The default Database is mysql-travis due testing purpose.

```
(
	'default' => 'mysql-travis',
)
```

* Create the Database with the name that you choose.

* Open Terminal and run

```
php artisan migrate
```
and if everything is correct you should see your database with all the tables.

* If you want to populate your database with some examples just run

```
php artisan db:seed
```

* Run it on a browser and Enjoy.
