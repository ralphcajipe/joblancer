# joblancer app

A web app that can Create, Read, Update, and Delete (CRUD) job listings.

![PHP](https://img.shields.io/badge/-PHP-777BB4?style=flat-square&logo=php&logoColor=white)
![Laravel](https://img.shields.io/badge/-Laravel-FF2D20?style=flat-square&logo=laravel&logoColor=white)
![MySQL](https://img.shields.io/badge/-MySQL-4479A1?style=flat-square&logo=mysql&logoColor=white)
![HTML5](https://img.shields.io/badge/-HTML5-E34F26?style=flat-square&logo=html5&logoColor=white)
![TailwindCSS](https://img.shields.io/badge/-TailwindCSS-38B2AC?style=flat-square&logo=tailwind-css&logoColor=white)
![AlpineJS](https://img.shields.io/badge/-AlpineJS-8DB500?style=flat-square&logo=alpine.js&logoColor=white)

![joblancer](/public/images/joblancer.jpg)

## Usage

### Database Setup

This app uses MySQL. To use something different, open up config/Database.php and change the default driver.

To use MySQL, make sure you install it, setup a database and then add your db credentials(database, username and password) to the .env.example file and rename it to .env

### Migrations

To create all the nessesary tables and columns, run the following

```
php artisan migrate
```

### Seeding the Database

To add the dummy listings with a single user, run the following

```
php artisan db:seed
```

### File Uploading

When uploading listing files, they go to "storage/app/public". Create a symlink with the following command to make them publicly accessible.

```
php artisan storage:link
```

### Running the App

Upload the files to your document root, Valet folder or run

```
php artisan serve
```
