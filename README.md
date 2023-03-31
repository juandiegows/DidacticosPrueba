<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Primero pasos

# 1) clone el proyecto

en el archivo .env cambio la informacion a la de su computadora
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=didacticosprueba
DB_USERNAME=root
DB_PASSWORD=12345
```
sino existe el archivo creelo


# 2) ejecuta las migraciones

```
 php artisan migrate 
```

si desea datos falso use este comando

```
 php artisan migrate --seed
```

# 3) listo, la clave del usuario por defecto es 

```
Correo = admin@gmail.com
Clave = 12345


```
