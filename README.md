<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

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
