# E-Commerce website with MVC & PHP
This is an e-commerce website built with the MVC design architectural pattern and PHP. Customers register an account and log in to select where they
would like to travel to. They also have the option to purchase pre-parking for their upcoming trip. essentially this is a virtual travel agent. Currently
this only works on a localserver with a local MySql database. 

## Getting Started
In order for the development environment to work correctly, you will need to adjust a few things regarding the database information.

### Prerequisites
In the database helper file you will need to adjust the information to suit your local database login information.
```
$serverName = "127.0.0.1";
$dBUsername = "root";
$dBPassword = "yourDatabasePassword";
$dBName = "YourDatabaseName";
```

### B_CRYPT secured password hashing
This website has the passwords hashed using the latest version of B_CRYPT. 
```
$hashedPwd = password_hash($password, PASSWORD_DEFAULT);
```
Do not use md5 or SHA-256 as they are now vulnerable.

## Built With
* PHP 7
* HTML5
* CSS
* MySQLi

## Authors
* **Harsh Bhatt** - *Initial work* - [hbhatt687](https://github.com/hbhatt687)
* **Byron Mouen** - *tbd* - [Birohn](https://github.com/Birohn)
* **Yasire Tariq** - *tbd* - [yasirtariq95](https://github.com/yasirtariq95)

## Acknowledgements
* Thanks to [mmuts](https://www.youtube.com/channel/UCzyuZJ8zZ-Lhfnz41DG5qLw) for tutorials on how to make a secure log in and registration page.
