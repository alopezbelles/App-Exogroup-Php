# PRUEBA TÉNCICA EXOGROUP - BACKEND
Backend con PHP

### Datos generales

**- Autor del proyecto:** Alejandro López Bellés

**- Título del proyecto:** PRUEBA TÉCNICA EXOGROUP - BACKEND

**- Fecha:** 31/03/2023

 ### Tecnologías  y dependencias
LARAVEL + PHP + ARTISAN + COMPOSER

![tecnologías](https://user-images.githubusercontent.com/113507322/229147662-bbdd32e8-10ad-4d1f-b429-dd018309b8f9.png)

 ### GESTOR DE PIZZAS PARA USUARIOS
 
 La siguiente aplicación está creada en PHP con LARAVER y COMPOSER. 
 
 Es accesible a través de un entorno local. 
 
 http://localhost:8000/pizzas
 
 Las variables de entorno serán incluidas en el correo junto con la prueba técnica para poder replicar el proyecto en un entorno local (archivo .env). 
 
 La base de datos es relacional SQL, consta de 3 tablas. La tabla "pizzas", la tabla "ingredients" y la tabla que hace la función de tabla intermedia "pizza-ingredients". Las dos tablas principales tienen una relación 1 to many con la tabla intermedia. 
 
 
 ![relationships](https://user-images.githubusercontent.com/113507322/229148914-5a50c8e9-71cd-4f85-bf2b-664a35f56193.png)
 
 La tabla "pizzas" tiene como atributos "name" y "selling_price". La tabla "ingredients" tiene como atributos "name" y "cost_price". La tabla intermedia recoge como FK las  PK de las dos tablas anteriores. 
 
 ### ESTRUCTURA DEL PROYECTO
 
 CONTROLLERS:
 
- GET /ingredients --> Mostrará el listado con todos los ingredientes.
- GET /pizzas --> Mostrará el listado con todas las pizzas.
- GET /pizzas/{id}/ingredients --> Mostrará una pizza introduciendo la id en la ruta de la petición, junto con sus ingredientes.
- POST /pizza-ingredient --> Añadirá un ingrediente a una de las pizzas, introduciendo la id del ingrediente y de la pizza por el body: { "pizza_id": "1", "ingredient_id": "4"}.

MODELS.
 
MIGRATIONS.
  
SEEDERS.
   
ROUTES. (archivo web.php).




 
 

 
