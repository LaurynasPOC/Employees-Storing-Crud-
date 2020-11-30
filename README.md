# Employees Storing App Created using Laravel(8) FrameWork.
## Features
1. Create;
2. Read;
3. Update;
4. Delete;
5. Filter;
6. Search;
# Setup
## Note:
1. composer.phar have to be installed globally or reached from Crud folder.
2. Nodo js have to be installed to your PC.
## Open CMD where you want an app would be and type:
* composer create-project laravel/laravel empCrud
## Open created folder with VS code or other editor and using terminal install Laravel UI and NPM by typing:
1. composer require laravel/ui
2. php artisan ui vue --auth
3. npm install && npm run dev
## Create a database where will be your CRUD data and update following information inside .env file:
* DB_CONNECTION=mysql
* DB_HOST=127.0.0.1     
* DB_PORT=3306          
* DB_DATABASE=(Your created DB name) 
* DB_USERNAME=root   
* DB_PASSWORD=mysql
## Create .htaccess file to your Crud folder and inport this code:
<IfModule mod_rewrite.c>
RewriteEngine On
RewriteRule ^(.*)$ public/$1 [L]
</IfModule>

### Now you can change ALL files from this repository to the root directory of your Crud app

Open CMD once again and type:

php artisan migrate
