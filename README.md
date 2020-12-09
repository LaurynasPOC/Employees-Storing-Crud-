# Employees Storing App Created using Laravel(8) FrameWork.
## Features
1. Create;
2. Read;
3. Update;
4. Delete;
5. Filter;
6. Search;
# Setup
### Note:
1. composer.phar have to be installed globally or reached from Crud folder.
2. Nodo js have to be installed to your PC.
### Open CMD where you want an app would be and type:
* composer create-project laravel/laravel empCrud

### Clone this repository to the empCrud on your host:
1. https://github.com/LaurynasPOC/Employees-Storing-Crud-
2. And run this CLI command inside of the {app-directory}: 
composer install
* if composer is not installed globally, run command: "php composer.phar install"

### Create a database where will be your CRUD data and update following information inside .env file:
* DB_CONNECTION=mysql
* DB_HOST=127.0.0.1     
* DB_PORT=3306          
* DB_DATABASE=(Your created DB name) 
* DB_USERNAME=root   
* DB_PASSWORD=mysql

#### Enter to terminal: php artisan migrate

#### open: localhost/empCrud

Enjoy an app
