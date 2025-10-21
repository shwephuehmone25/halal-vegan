# Halal Vegan Finder

Live Demo : <a href=""></a>

## Introduction

Web application that allows users to search for Halal and vegan-friendly foods and restaurants in Yangon and Mandalay. Built with Node.js backend, integrated with location-based services for nearby restaurant listings, and a responsive front-end for smooth user experience.

## Requirements
============
- PHP 8.0
- MySQL 5.7 or 8

## Installation

Clone the repo locally:
```
git clone https://github.com/shwephuehmone25/halal-vegan
```

`cd` into cloned directory and install dependencies. run below command one by one.

Install dependencies:
```
composer install
```
If you have downloaded the zip file, you will get the .env.example file. Just make a copy of that file as .env
```
cp .env.example .env
```
and also set all the .env variable as mentioned above. Once the variables have been set, generate the application key
```
php artisan key:generate
```
To create the symbolic link, 
```
php artisan storage:link
```

### Configuration in `.env` file

Database **eg.**
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=
```

AWS ACCESS KEY ID and Secret Key
```
AWS_ACCESS_KEY_ID=
AWS_SECRET_ACCESS_KEY=
AWS_DEFAULT_REGION=
AWS_BUCKET=
AWS_URL=
```
### Database Migration

Run database migrations:
```
php artisan migrate
```

**(Optional)** If you want to get dummy data, run this:
```
php artisan db:seed --class=DatabaseSeeder
```
## Server Run

Run the dev server:
```
php artisan serve
```

Visit below url:
```
http://localhost:8000
```
