[![Latest Stable Version](https://poser.pugx.org/ludo237/arcadia-cms/v/stable.png)](https://packagist.org/packages/ludo237/arcadia-cms)
[![Total Downloads](https://poser.pugx.org/ludo237/arcadia-cms/downloads.png)](https://packagist.org/packages/ludo237/arcadia-cms)
[![Build Status](https://travis-ci.org/ludo237/arcadia-cms.png)](https://travis-ci.org/ludo237/arcadia-cms)
# Arcadia CMS

Arcadia CMS lets you create a Laravel based CMS with just few steps of configuration.

* Repo: https://github.com/ludo237/Arcadia-CMS
* Support: http://www.twitter.com/ludo237
* Web Site: http://ludo237.github.io/arcadia-cms/
* Demo Site: ASAP
 
The purpose is create a simple User Managment System with Laravel 4 because I think it is one of the best PHP Framework at the moment, you should give it a try.
 
This system will be composed by:
- Front end made with "Foundation 4" by Zurb (http://foundation.zurb.com/).
- User sign up and sign in with profile management.
- Admin backend with user management.
- News feed with Auth comments.
- Multilanguage supports (at least two: Italian and English)

If you want to contribute feel free to fork this project, pull requests and open issue tickets
 please read the <a href="https://github.com/ludo237/arcadia-cms/blob/master/CONTRIBUTING.md" target="_blank">Contributing Rules</a> first.

Hope you will enjoy with this.

## How to install

Arcadia CMS it's very easy to install. Just clone this repo (or download it) and follow this few steps:

* Generate the key via Terminal using

```
php artisan key:generate
```

* Open /app/config/app.php and fill the detail about url, debug. They are very well commented so just go there and read the comments. This is an example:

```
(
	'debug'	=> true,
	'url'	=> 'yoursite.com',
)
```

* Open /bootstrap/start.php file and change the local machine name with your machine name. This is useful because you can set as many configurations as possible.

```
(
	'local' 	=> array('local.*','Your-machine-name.*');
)
```

* Open /app/config/database.php and choose the Database you prefer most. The default Database is mysql and it has travis data due testing purpose. You should use the /app/config/local/database.php in order to have a local database setting.

```
(
	'default' => 'mysql',
	'mysql' => array(
		'driver'    	=> 'mysql',
		'host'      	=> '127.0.0.1',
		'database'  	=> 'arcadia',
		'username'  	=> 'travis',
		'password'  	=> '',
		'charset'   	=> 'utf8',
		'collation' 	=> 'utf8_unicode_ci',
		'prefix'    	=> '',
	),
)
```

* Create the Database with the name that you want. The default is arcadia.

* Open Terminal and run

```
php artisan migrate
```

and if everything is correct you should see your database with all the tables.

* If you want to populate your database with some examples just run

```
php artisan db:seed
```

* Last optional step: Go to /app/database/migrations/relations.sql copy & paste the SQL and use it. I've to understand how merge this with migrations sorry.

* Run it in any browser and Enjoy.
