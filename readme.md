

## Technologies, Tools, Framework, Libralies
jQuery,
Bootstrap, 
MySQL, 
Sublime text 3, 
Laravel 5.4, 
fontawsome, 
amchart

## Installation

### First

create `.env` file by follow code in `.env.example`

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

or use this command: 

```bash
cp .env.example .env
```

### Second

install composer and run 
```bash
$ composer update
```
### Third

create new database on mysql and connect in `.env` file

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=homestead
DB_USERNAME=root
DB_PASSWORD=""
```

### Fourth
```bash
$ php artisan key:generate
```
### Fifth
```bash
$ php artisan migrate --seed
```
### Last
```bash
$ php artisan serve
```

## Data Necessary

### User Data

Username : teerapong  
Password : 123456

Username : kanyanat  
Password : 123456

Username : bundid  
Password : 123456

Username : jirayu  
Password : 123456

Username : nadech  
Password : 123456