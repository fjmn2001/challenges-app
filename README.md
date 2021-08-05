
## We are challenges!

Aplicación de PHP :elephant:  desarrollada con el framework **Laravel** para cumplir con una serie de desafíos propuestos :muscle:

Conozca los desafíos en este doc :point_right: [We are challenges](https://docs.google.com/document/d/1rs1Mwhccrjs7JtRVCarixbMLqhDYYd1W5RpIHl4Z4Jc/edit?usp=sharing)

## Tabla de contenido

 - :star:[Configuracion del entorno](#-opciones-del-entorno)
	 - :star2:[Herramientas utilizadas](#-herramientas-utilizadas)
	 - :hammer_and_wrench:[Configuración del entorno](#-configuracion-del-entorno)
	 - :globe_with_meridians:[Ejecución de la aplicación](#-ejecucion-de-la-aplicacion)
	 - :heavy_check_mark: [Ejecución de las pruebas](#-ejecucion-de-las-pr)
	
	
 - :earth_americas: Mapas de la aplicación
	 - :file_folder:Carpeta «**apps**»
	 - :file_folder:Carpeta «**src**»

 
 - :nerd_face:Explicación del proyecto
	 -  Desafio :one:. Desarrollo de consultas de lecturas
	 -  Desafio :two:. Explicación detallada para crear un proyecto en Laravel.
	 -  Desafio :three:. Uso de observer
	 -  Desafio :four:. Conociendo la herramienta "Laravel Jetstream" y la utilidad de Liveware para los programadores.
	 - Desafío :five:. Construcción de un CRUD, utilizando Bootstrap para el front y para las vistas el uso de Layouts en Blade.
 
## :star: Configuración del entorno

:star2: **Herramientas utilizadas**

 1. [Instalar Docker](https://www.docker.com/get-started) :whale:
 2. :cyclone:Clonar este proyecto: `git clone https://github.com/fjmn2001/challenges-app.git`

:hammer_and_wrench:**Configuración del entorno**

 - Crear un archivo de entorno local si es necesario:  `cp .env .env.example`:page_facing_up:
 
:globe_with_meridians: **Ejecución de la aplicación**
 - Instale las dependencias de PHP y abra los contenedores de Docker del proyecto con **Docker compose**: `make deps`

:heavy_check_mark: **Ejecución de las pruebas**

 - Instale las dependencias PHP si no lo ha hecho: `make test`

## :earth_americas: Mapas de la aplicación
:file_folder:Carpeta «**apps**» :point_down:

:file_folder:Carpeta «**src**» :point_down:
 
 ## :nerd_face: Explicación del proyecto
 

**Desafío :one:. Desarrollo de consultas de lecturas**

En el primer desafío de este proyecto, se procedió a desarrollar las consultas de lecturas necesarias para obtener la información proveniente de la base de datos; esto se logro mediante el uso del [ORM](https://es.wikipedia.org/wiki/Asignaci%C3%B3n_objeto-relacional) de Laravel, [Eloquent](https://laravel.com/docs/8.x/eloquent).

**Desafío :two:. Descripción paso a paso para instalar un proyecto básico de Laravel.**  

Para dar continuidad, se procedió a realizar el 2° desafío; el cual busca explicar de manera detallada los pasos a seguir para crear un proyecto de forma correcta en Laravel.

**Desafío :three:. Creación y uso de observers.**    

Como 3° desafío, se añadió un nuevo campo a la tabla “Invoice”, en este punto también se hace uso de una nueva funcionalidad conocida como observer; esto con el fin de obtener el valor total de la tabla “invoice” (desafio 1) cada vez que se inserte un registro en la tabla "Product".

**Desafío :four:. Conociendo la herramienta "Laravel Jetstream" y la utilidad de Liveware para los programadores.**      

«Laravel Jetstream» es una herramienta anexada a Laravel con la finalidad de brindar implementación para registros, verificación de correos electrónicos y más.

Además, se entendió que Livewire es un stack para el frontend que logra que el programador pueda realizar tareas de manera menos compleja.

**Desafío :five:. Construcción de un CRUD, utilizando Bootstrap para el front y para las vistas el uso de Layouts en Blade.**
  

Para finalizar este ciclo de desafíos, continuamos con el número 5; el cual consistía en realizar un CRUD utilizando Bootstrap para el front y para las vistas el uso de Layouts en Blade.