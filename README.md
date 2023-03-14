<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Funcionamiento del zip
- El boton resaltado en rojo permite la descarga del pdf siempre que alla uno.
- Esta es la vista inicial del sistema cuyo unico cambio es el agregar el boton para descargar el pdf.

![img-1](https://user-images.githubusercontent.com/33810066/225085005-58f3d551-34d6-4a89-9d1e-e1c5a5e85d07.png)

## Guardar un pdf para descargarlo en un zip
-Ingresa a la url para guardar agregando lo siguiente 
~~~
/index
~~~
-La vista generada sera la siguiente.
-Se debe agregar un nombre y el pdf para poder guardar luego volver a la vista inicial y descargar desde el boton
![img-2](https://user-images.githubusercontent.com/33810066/225086656-18d4ccb0-82f2-43b1-8c4f-76cc0c013e5e.png)

-El pdf se genera el la carpeta publica del proyecto con un nombre tomado desde el controlador.

-Se debe tener en cuenta que segun la cantidad de pdfs el zip puede demorar en generarse.
![img-3](https://user-images.githubusercontent.com/33810066/225087427-371d85e1-0c1b-4157-93f5-44cc02d00bd9.png)
## La base de datos es la siguiente
![img-4](https://user-images.githubusercontent.com/33810066/225089156-2557c6b8-4ab8-4b01-a1a7-b5235e4f07d9.png)


