Instrucciones de instalación para la prueba técnica de DAPDA.

* Instalar XAMPP para Windows con la versión más reciente de PHP
	-> crear una carpeta "workspace/dapda" en "xampp/htdocs"
	
* Para facilitar la instalación, se ha eliminado el fichero .gitignore en el último commit, por lo que se incluyen todos los archivos necesarios para ejecutar el servidor
	
* Clonar el repositorio de git

* Iniciar XAMPP y arrancar los servicios de Apache y MySQL
	
* Desde PHPmyAdmin:
	-> crear BDD "dapda_promo" y 
	-> crear el usuario con todos los privilegios para la BBDD
		- user: dapda
		- host: localhost
		- pass: dapda
	
* Realizar migración de tabla desde consola (desde la raíz del proyecto)
	-> php bin/console doctrine:migrations:migrate

* Para iniciar el servidor de Symfony, ejecutar en consola (desde la raíz del proyecto)
	-> php -S 127.0.0.1:80000 -t public

	
ACLARACIONES
------------------------------------------------------
* La cuenta de Gmail indicada arriba es una cuenta operativa creada únicamente para esta prueba

* Se ha editado el fichero .env para la BBDD y envío de emails
	-> DATABASE_URL=mysql://dapda:dapda@127.0.0.1:3306/dapda_promo
	-> MAILER_URL=gmail://emailpersonaltesting@gmail.com:gEFHMvqIofaFUmmABoFWDMBAlnGnizvnCSPtaOJbOALuorwRSmDJvuomdl@localhost
	
