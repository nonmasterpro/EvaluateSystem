<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>


<h1>Technologies, Tools, Framework, Libralies</h1>
jQuery,
Bootstrap, 
MySQL, 
Sublime text 3, 
Laravel 5.4, 
fontawsome, 
amchart, 

<h1>Installation</h1>

<h3>First </h3> create `.env` file by follow code in `.env.example`

```
APP_NAME=Laravel
APP_ENV=local
APP_KEY=
APP_DEBUG=true
APP_LOG_LEVEL=debug
APP_URL=http://localhost

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=homestead
DB_USERNAME=homestead
DB_PASSWORD=secret

BROADCAST_DRIVER=log
CACHE_DRIVER=file
SESSION_DRIVER=file
QUEUE_DRIVER=sync

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_DRIVER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null

PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=

```

<h3>Second </h3> install composer and run 
```bash
$ composer update
```

<h3>Third </h3> create new database on mysql and connect in `.env` file

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=homestead
DB_USERNAME=root
DB_PASSWORD=""
```

<h3>Fourth </h3> 
```bash
$ php artisan key:generate
```
<h3>Fifth </h3> 
```bash
$ php artisan migrate --seed
```
<h3>Last</h3> 
```bash
$ php artisan serve
```
<h1>Data Necessary</h1>

<h2>User Data</h2>

<h4>Username : teerapong</h4>
<h4>Password : 123456</h4>

<h4>Username : kanyanat</h4>
<h4>Password : 123456</h4>

<h4>Username : bundid</h4>
<h4>Password : 123456</h4>

<h4>Username : jirayu</h4>
<h4>Password : 123456</h4>

<h4>Username : nadech</h4>
<h4>Password : 123456</h4>