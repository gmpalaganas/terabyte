#Terabyte

##Setting Up


Login to mysql using root

```
$mysql -u root -p
```


Create database 'terabyte'

```
mysql> CREATE DATABASE terabyte;
```


Create a new user named 'terabyte_admin' with password 'terabyte'

```
mysql> CREATE USER 'terabyte_admin'@'localhost' IDENTIFIED BY 'terabyte';
```


Grant access on terabyte to terabyte_admin
```
mysql> GRANT ALL PRIVILEGES ON terabyte.* to 'terabyte_admin'@'localhost' WITH GRANT OPTIONS;
```

Quit mysql
```
mysql>\q
```

On the root of the project folder, run these commands
```
$ php artisan migrate && php artisan db:seed
```
