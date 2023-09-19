<<<<<<< HEAD
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
=======
# xnet
xnet

PRUEBA DESARROLLO PHP, JS Y MYSQL

1-	Crea un repositorio en gitlab. 
a.	Crea tres ramas main, dev, release. 
b.	Crea un fichero readme que lo contengan las 3 ramas. El fichero readme contendrá la descripción del ejercicio. 
c.	Crea la rama del ejercicio “crud_notas”

2-	Realiza el siguiente ejercicio (php y mysql)

En la empresa “Reciclados 3R” tenemos diferentes usuarios que pueden acceder a la aplicación. Los departamentos a los que pueden pertenecer son: 
•	Atención al cliente
•	Recursos Humanos
•	Comercial
•	Limpieza
•	Planta de reciclaje

Y cada usuario puede tener un único rol: 
•	Jefe 
•	Responsable de equipo
•	Empleado

Necesitamos tener un login y un CRUD para guardar las diferentes notas que se recogerán desde las llamadas telefónicas que nos realizarán los clientes a través de la centralita de la empresa. Contemplará las diferentes vistas que necesitamos en un CRUD. 
En la vista CREATE el formulario guardará la nota con los siguientes campos: 
- el empleado que abre la nota. Será el usuario logueado.
- el departamento al que va dirigida la nota.
- una descripción de lo hablado con el cliente
- el cliente que realiza la llamada (nombre, empresa a la que pertenece y teléfono de contacto)
- la fecha y hora en la que se crea la nota.
- fecha y hora en la que se guarda la nota (en este caso null)
- fecha y hora en la que se elimina la nota ( en este caso null)
- fecha y hora en la que se reactiva la nota ( en este caso null)

- Estado( Pendiente, En Proceso, Terminado). Siempre se realizará la creación en el estado pendiente. 
Ese formulario será accesible sólo para los usuarios de la aplicación que pertenezcan al departamento “Atención al cliente”. Al resto se les mostrará una notificación que muestre “No tiene permisos”.

En la vista UPDATE, sólo podrá realizarse el cambio en: 
- la descripción(sólo si es la persona que creó la nota, su responsable o el jefe) 
- el estado(que podrá cambiarlo cualquier empleado). 
- En este caso, también aparecerá el campo observaciones por si tienen que añadir alguna observación. En este caso, necesitamos saber la última vez que se actualizó la nota.  
Restricciones. 
Ese formulario será accesible sólo para los usuarios de la aplicación que pertenezcan al departamento al que va dirigida la nota y sólo si su rol es jefe o responsable de equipo. Al resto se les mostrará una notificación que muestre “No tiene permisos”.

Cuando realicemos DELETE se pedirá confirmación al usuario y sólo podrá realizar el borrado si pertenece al departamento de Atención al cliente y es responsable o jefe. 
Tener en cuenta que no se realizará un delete si no que en este caso necesitamos conservar las notas y sólo guardar la fecha en la que se realizó el borrado.

Por último, la vista READ mostrará una tabla con todas las notas creadas donde aparecerá una tabla que mostrará un filtro para poder filtrar por cliente o descripción. Restricciones. 
La tabla se verá por todos los usuarios pero cada departamento verá sus notas asociadas. Es decir, sólo el departamento Comercial verá las notas asociadas al departamento comercial. Sólo el rol jefe y el departamento Atención al cliente verá todas las notas.
Mostrará los siguientes campos de la nota: código de la nota, nombre del empleado, nombre del cliente, empresa del cliente, teléfono del cliente, estado, descripción (Sólo los primeros 10 caracteres). En cada fila se verá un botón para poder actualizar la nota o borrar (en este caso,  sólo podrá borrar el departamento de Atención al cliente y sólo si es responsable o jefe por lo que sólo para ellos se verá activo) 
Si la nota tiene observaciones se mostrará un icono pequeño al lado del código. Elige el icono que quieras y que defina lo que quiere identificar por ejemplo un bloc de notas.
En la tabla se mostrarán todas las notas. Se diferenciarán los registros eliminados mostrando su fila en rojo, sin botones de actualizar ni de eliminar.


PLUS DE EJERCICIO 
-	Añadir en la vista READ un botón Activar para que las notas eliminadas puedan estar activas de nuevo. La tabla de notas tendrá activo el campo Reactivada. Si vuelve a eliminarse el campo reactivada no estará activo en la tabla y la fecha y hora de reactivación se eliminará. Sólo podrán hacerlo los responsables del departamento al que pertenezca la nota. Aparecerá una notificación para confirmar si quiere activar la nota. 
-	Diferenciar las filas de las tablas por diferentes colores según el estado. 
Color azul: pendiente
Color naranja: En proceso
Color verde: terminada
Color rojo: Eliminada. 
Si la nota es una nota reactivada poner un icono delante del código
-	Implementación de test.


3-	Realiza una Merge Request de la rama del ejercicio a la rama release. 
Ten en cuenta que la creación de las tablas también tendrán que poder valorarse por lo que añade una carpeta para añadir sql. Es importante que todo lo que consideres quede versionado en el ejercicio. Igual que los datos que hayas utilizado para realizar las pruebas. 

4-	Da acceso a azucena.martin@x-netdigital.com para poder revisar el ejercicio. 
PLAZO PARA REALIZAR LA PRUEBA
19 de septiembre de 2023 20:00 hora España

>>>>>>> 45bee06788f54dfd25f0e3397c9b11921276be75
