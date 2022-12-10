# By ChristRCGS
## _Instrucciones para consumir la API de Almacen de Productos_
![Logo](https://reckreastudios.com/proyectos/SDAW2/logo.png)


## End-Points

Las peticiones que tenemos a disposicion son:

| EndPoin | Link | Info |
| ------ | ------ | ------ |
| POST |https://reckreastudios.com/proyectos/SDAW2/API/usuario| Consulta las credenciales |
| GET |http://localhost/Punto-de-Venta-SDAW2/API/producto | Consulta todos los productos|
| GET |http://localhost/Punto-de-Venta-SDAW2/API/catalogo | Consulta todos los productos|
| POST |http://localhost/Punto-de-Venta-SDAW2/API/producto | Consulta un producto segun codigo de barra|
| POST |http://localhost/Punto-de-Venta-SDAW2/API/venta | Para dar de baja los productos de acuerdo a una venta|

[![Build Status](https://travis-ci.org/joemccann/dillinger.svg?branch=master)](https://travis-ci.org/joemccann/dillinger)

## Features

- Todas las peticiones, excepto consulta de credenciales, requeren _Basic Authentication_ donde Username esla entregada por la respuesta de Credenciales. y Password es la llave secreta

## Credenciales

- Cree una cuenta en Dashboard, ya que este controla los accesos y usuarios
- Inicie sesion en el sistema de Administracion de Almacen
- Consuma la API de Consulta llenando el Form-encode

### Url:
> https://reckreastudios.com/proyectos/SDAW2/API/usuario
### Form-encode
```bash
'nombre': 'Juan'
'role': 'admin'
'email': 'example@web.com'
'pw': 'secret_word'
```
### Headers:
```bash
'Accept': '*/*',
```
### Respuesta:

```json
{
  "status": 200,
  "detalle": "Estas son sus credenciales",
  "username": "XXXXXXXXXXXXXXXXXXXXXXXXXXX",
  "llave_secreta": "XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX"
}
```
### Ejemplo en PHP Laravel

```php
use Illuminate\Support\Facades\Http;
$response = Http::asForm() 
    ->withHeaders([ 
        'Accept'=> '*/*', 
        'Content-Type'=> 'application/x-www-form-urlencoded', 
    ]) 
    ->post('http://localhost/Punto-de-Venta-SDAW2/API/usuario',[ 
        'nombre'=>'Juan', 
        'role'=>'ADMIN', 
        'email'=>'email@example.com', 
        'pw'=>'secreyWord', 
    ]); 
echo $response->body();
```
---

## Consulta de Catalogo

### Url:
> https://reckreastudios.com/proyectos/SDAW2/API/producto
### Form-encode para POST
```bash
'barCode': 'XXXXXXXXXXXX'
```
### Headers:
```bash
'Accept': '*/*',
```
### Respuesta:

```json
{
  "data": [
    {
      "Id_producto": "69",
      "nombre_producto": "Prueba 2",
      "stock": "1",
      "precio_venta": "1",
      "stock_minimo": "1",
      "sku": "1",
      "bar_code": "1",
      "porcentaje_ganancia": "30.00",
      "ruta_img": "786732846hdsuhudsf",
      "estatus": "0",
      "id_categoria_fk": "52"
    }
  ]
}
```
### Ejemplo en PHP Laravel

```php
<?php
 
use Illuminate\Support\Facades\Http;
 
$response = Http::asForm() 
    ->withHeaders([ 
        'Accept'=> '*/*', 
        'Authorization'=> 'Basic base64(KKKKKKKKKKKKKKKKKKKKKKK)', 
        'Content-Type'=> 'application/x-www-form-urlencoded', 
    ]) 
    ->post('http://localhost/Punto-de-Venta-SDAW2/API/producto',[ 
        'barCode'=>'XXXXXXXXXXXXX', 
    ]); 

echo $response->body();
```

---


## Descuento de Almacen _(Exclusiva de Punto de Venta)_

### Url:
> https://reckreastudios.com/proyectos/SDAW2/API/venta

### Headers:
```bash
'Accept': '*/*',
```

### Body
-Ejemplo de un producto*-
```json
[
  { "id": "61","cantidad": 5}
]
```
-Ejemplo de varios producto*-
```json
[
  { "id": "51","cantidad": 5},
  { "id": "52","cantidad": 1},
  { "id": "61","cantidad": 2}
]
```

### Respuesta:

```json
{
  "status": 200,
  "detalle": "Se ha descontado del almacen los productos"
}
```
### Ejemplo en PHP Laravel

```php
<?php
 
use Illuminate\Support\Facades\Http;
 
$response = Http::withBody( 
        '[
  { "id": "51","cantidad": 5},
  { "id": "52","cantidad": 1},
  { "id": "61","cantidad": 2}
]', 'json' 
    ) 
    ->withHeaders([ 
        'Accept'=> '*/*', 
        'Authorization'=> 'Basic XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX', 
        'Content-Type'=> 'application/json', 
    ]) 
    ->post('http://localhost/Punto-de-Venta-SDAW2/API/venta'); 

echo $response->body();
```

---


## Authors

- [@chrisPumita](https://github.com/chrisPumita)

## Licencias


[![MIT License](https://img.shields.io/badge/License-MIT-green.svg)](https://choosealicense.com/licenses/mit/)
[![GPLv3 License](https://img.shields.io/badge/License-GPL%20v3-yellow.svg)](https://opensource.org/licenses/)
[![AGPL License](https://img.shields.io/badge/license-AGPL-blue.svg)](http://www.gnu.org/licenses/agpl-3.0)
