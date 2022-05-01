<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Installation PHP, Composer and Postgre

### 01 - Init PHP
#### 1.1 - Updating System
```sh
sudo apt update
sudo apt -y upgrade
sudo reboot
```
#### 1.2 - Install Repository 
```sh
sudo apt install -y software-properties-common
echo "deb https://packages.sury.org/php/ buster main" | sudo tee /etc/apt/sources.list.d/sury-php.list
wget -qO - https://packages.sury.org/php/apt.gpg | sudo apt-key add -
```
#### 1.3 - Reboot System 
```sh
sudo reboot 
sudo apt update
sudo apt upgrade
```
#### 1.4 - Install PHP and extension
```sh
sudo apt install php8.1
sudo apt install php8.1-{mysql,intl,ldap,gd,cli,bz2,curl,mbstring,pgsql,opcache,soap,cgi,xml,fpm}
```
#
### 02 - Init Composer
#### 2.1 - Install packge composer
```sh
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('sha384', 'composer-setup.php') === '906a84df04cea2aa72f40b5f787e49f22d4c2f19492ac310e8cba5b96ac8b64115ac402c8cd292b8a03482574915d1a8') { echo 'Installer verified'; }else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"
sudo mv composer.phar /usr/local/bin/composer
```
#
### 03 - Init PostgreSQL
#### 3.1 - Instalando PostgreSQL
```sh
sudo apt update
sudo apt install postgresql postgresql-contrib
```
#### 3.2 - Create User
```sh
sudo -i -u postgres
psql
CREATE USER nomedousuario SUPERUSER INHERIT CREATEDB CREATEROLE; 
ALTER USER nomedousuario PASSWORD 'senha';
```




## About API Contacts

## Register
### URL (http://localhost/api/v1/user/register)

#### Body
```
{
    "name":"Nome Completo",
    "email":"exeample@example.com",
    "password":"12345679",
    "c_password":"123456789"
}
```

## Login
### URL (http://localhost/api/v1/user/login)

#### Body
```
{
    "email":"exeample@example.com",
    "password":"123456789"
}
```

## Get All Contacts
### URL (http://localhost/api/v1/contacts)

#### Body
```
{
    "current_page": 1,
    "data": [
        {
            "id": 7,
            "nome": "Elias Tillman",
            "telefone": "85999622467",
            "email": "alice05@example.com",
            "image": null,
            "created_at": "2022-04-24T01:58:49.000000Z",
            "updated_at": "2022-04-24T01:58:49.000000Z"
        }
    ],
    
    "next_page_url": "http://apicontacts/api/v1/contacts?page=2",
    "path": "http://apicontacts/api/v1/contacts",
    "per_page": 4,
    "prev_page_url": null,
    "to": 4,
    "total": 9
}
```

## Register Contact
### URL (http://localhost/api/v1/contacts)
##### Methodo -> POST

#### Body
```
{
    "name":"Nome Completo",
    "telefone":"11913564852"
    "email":"exeample@example.com",
    "image":"image base64"
}
```

## Alter Contact
### URL (http://localhost/api/v1/contacts/{$id_contatct})
##### Methodo -> PUT

#### Body
```
{
    "name":"Nome Completo",
    "telefone":"11913564852"
    "email":"exeample@example.com",
    "image":"image base64"
}
```

## Delete Contact
### URL (http://localhost/api/v1/contacts/{$id_contatct})
##### Methodo -> DELETE

#### Body
```
{

}
```

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
