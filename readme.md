## Find My Bus 

An application to find nearest bus stop and the timing for the next bus arrival.

### Requirements
* PHP 5.6 (tested with PHP 7.0)
* MySQL 5.6 (tested with MySQL 5.7)

### Dependencies
* [Laravel 5.2](http://laravel.com)

### Development Notes

* The system is developed in OS X
* Homestead config provided for quick setup of environment.
* To run without a virtual machine setup, you will need to make sure PHP, MySQL and NodeJS are installed.

#### Setup
* `composer install --no-dev` for live environment.
* `composer install` for dev environment.
* copy `.env.example` to `.env` (if not present) and edit accordingly.
* `php artisan migrate --seed` to setup DB tables and base account info.
* `php artisan db:seed --class=DemoSeeder` to add demo data.

#### Building outputs

##### Setup
* `npm install` to download required components