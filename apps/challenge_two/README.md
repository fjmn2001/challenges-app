# Pasos para la instalación básica de Laravel :eight:

## Comandos :point_down:

 :pushpin: `curl -s "https//laravel.build/challenge-app" | bash`
	 - Valida si existe una instalación local de **Docker** :whale:.
	 - Si existe, genera un contenedor :ship: para realizar la **instalación de Laravel** con sus respectivas dependencias.
	 
:pushpin: `./vendor/bin/sail up`
	 - Descarga las dependencias necesarias y levanta los contenedores de la librería [Sail](https://laravel.com/docs/8.x/sail).
## ¿Qué es Sail? :thinking:
Es una *interfaz de línea de comandos* (**CLI**) para trabajar con entornos de desarrollo basados en Docker para ejecutar aplicaciones Laravel.

## Utilidad de Sail :white_check_mark:

Ofrece imágenes de Docker **ya preparadas** para las aplicaciones Laravel, con el servidor web, compatibilidad con PHP, MySQL o MariaDB, Redis y otros programas dentro del stack típico de Laravel.

Sail es ideal para quienes tienen poca o nada de experiencia con Docker, dado que puede utilizarse sin siquiera saber cómo funciona este último :astonished:.