
## We are challenges!

Aplicación de PHP :elephant:  desarrollada con el framework **Laravel** para cumplir con una serie de desafíos propuestos :muscle:

Conozca los desafíos en este doc :point_right: [We are challenges](https://docs.google.com/document/d/1rs1Mwhccrjs7JtRVCarixbMLqhDYYd1W5RpIHl4Z4Jc/edit?usp=sharing)

## Tabla de contenido

 - [:star:Entorno de configuración](#star-entorno-de-configuración)
	 - [:star2:Herramientas utilizadas](#star2-herramientas-utilizadas)
	 - [:hammer_and_wrench:Configuración del entorno](#hammer_and_wrench-configuración-del-entorno)
	 - [:globe_with_meridians:Ejecución de la aplicación](#globe_with_meridians-ejecución-de-la-aplicación)
	 - [:heavy_check_mark: Ejecución de las pruebas](#heavy_check_mark-ejecución-de-las-pruebas)
	
	
 - [:earth_americas: Mapas de la aplicación](#earth_americas-mapas-de-la-aplicación)
	 - [:file_folder:Directorio «**apps**»](#file_folder-directorio-apps)
	 - [:file_folder:Directorio «**src**»](#file_folder-directorio-src)

 
 - [:nerd_face:Explicación del proyecto](#nerd_face-explicación-del-proyecto)
	 -  [Desafio :one: Desarrollo de consultas de lecturas](#desafío-one-desarrollo-de-consultas-de-lecturas)
	 -  [Desafio :two: Descripción paso a paso para instalar un proyecto básico de Laravel](#desafío-two-descripción-paso-a-paso-para-instalar-un-proyecto-básico-de-laravel)
	 -  [Desafio :three: Creación y uso de «**Observers**»](#desafío-three-creación-y-uso-de-observers)
	 -  [Desafio :four: Conociendo la herramienta Laravel Jetstream y la utilidad de Liveware para los desarrolladores ](#desafío-four-conociendo-la-herramienta-laravel-jestream-y-la-utilidad-de-liveware-para-los-desarrolladores)
	 - [Desafío :five: Construcción de un CRUD, utilizando Bootstrap y plantillas de Layout «Blade» para el frontend](#desafío-five-construcción-de-un-crud-utilizando-bootstrap-y-plantillas-de-layout-blade-para-el-frontend)
 
## :star: Entorno de configuración

### :star2: Herramientas utilizadas

 1. [Instalar Docker](https://www.docker.com/get-started) :whale:
 2. :cyclone:Clonar este proyecto: `git clone https://github.com/fjmn2001/challenges-app.git`

### :hammer_and_wrench: Configuración del entorno

 - Crear un archivo de entorno local si es necesario:  `cp .env .env.example`:page_facing_up:
 
### :globe_with_meridians: Ejecución de la aplicación
 - Instale las dependencias de PHP y abra los contenedores de Docker del proyecto con **Docker compose**: `make deps`

### :heavy_check_mark: Ejecución de las pruebas

 - Instale las dependencias PHP si no lo ha hecho: `make test`

## :earth_americas: Mapas de la aplicación
### :file_folder: Directorio apps
```scala
$ tree -L 4 apps
apps  
├── challenge_five // Desafio 5: Construcción de un CRUD con Bootstrap y plantillas Blade  
│ └── backend  
│ └── src  
│ └── Controller  
├── challenge_four // Desafio 4: Explicación de Laravel Jetstream y Livewire  
│ └── README.md  
├── challenge_one // Desafio 1: Generación de consultas a través de Eloquent  
│ └── backend  
│ └── src  
│ └── Controller  
├── challenge_three // Desafio 3: Creación y uso de Observers  
│ └── backend  
│ └── src  
│ └── Controller  
└── challenge_two // Desafio 2: Instrucciones para instalar un proyecto básico de Laravel  
└── README.md
```

### :file_folder: Directorio src

```scala
$ tree -L 4 src
src // Directorio que recibe los datos desde los controladores del directorio apps  
├── ChallengeFive  
│ └── Tasks  
│ └── Application  
│ └── Create //Directorio donde se persisten los datos  
└── Shared  
└── Application  
└── Find  
├── InvoiceDoesNotExists.php  
├── InvoiceFinder.php //Consulta de lectura  
└── InvoiceFinderRequest.php
```
 
 ## :nerd_face: Explicación del proyecto
 

### Desafío :one: Desarrollo de consultas de lecturas

En el primer desafío de este proyecto, se procedió a desarrollar las consultas de lecturas necesarias para obtener la información proveniente de la base de datos; esto se logro mediante el uso del [ORM](https://es.wikipedia.org/wiki/Asignaci%C3%B3n_objeto-relacional) de Laravel, [Eloquent](https://laravel.com/docs/8.x/eloquent).

### Desafío :two: Descripción paso a paso para instalar un proyecto básico de Laravel

Para dar continuidad, se procedió a realizar el 2° desafío; el cual busca explicar de manera detallada los pasos a seguir para crear un proyecto de forma correcta en Laravel.

### Desafío :three: Creación y uso de Observers

Como 3° desafío, se añadió un nuevo campo a la tabla “Invoice”, en este punto también se hace uso de una nueva funcionalidad conocida como observer; esto con el fin de obtener el valor total de la tabla “invoice” (desafio 1) cada vez que se inserte un registro en la tabla "Product".

### Desafío :four: Conociendo la herramienta Laravel Jestream y la utilidad de Liveware para los desarrolladores

«Laravel Jetstream» es una herramienta anexada a Laravel con la finalidad de brindar implementación para registros, verificación de correos electrónicos y más.

Además, se entendió que Livewire es un stack para el frontend que logra que el programador pueda realizar tareas de manera menos compleja.

### Desafío :five: Construcción de un CRUD, utilizando Bootstrap y plantillas de layout Blade para el frontend
  
Para finalizar este ciclo de desafíos, continuamos con el número 5; el cual consistía en realizar un CRUD utilizando Bootstrap y plantillas de layout «Blade» para el frontend.