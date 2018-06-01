# SAAC Movil - Plataforma Web

### Preparando el ambiente

Para este proyecto se hara uso de XAMMP como medio para desarrollar el proyecto
Se usara la siguente version: https://www.apachefriends.org/xampp-files/7.1.17/xampp-win32-7.1.17-0-VC14-installer.exe

En caso de que requiera la version de XAMPP para un sistema operativo diferente de Windows [Descargar](https://www.apachefriends.org/download.html) 

> Nota: Busque la que contenga PHP 7.1.X*

### Herramientas de desarrollo

No hay restriccion para el tipo de herramienta, se puede utilizar la que le sea mas comoda, ya sea:
   
   * __Sublime Text__: [Descargar](https://www.sublimetext.com) (Recordar los plugins)
   * __Visual Studio Code__: [Descargar](https://code.visualstudio.com/) (Recordar las extensiones)
   * __NetBeans__: [Descargar](https://netbeans.org/) (Cuidado con el codigo extra que genera el IDE (carpeta: nbproject))
   * __Notepad++__: [Descargar](https://notepad-plus-plus.org/) (El mas simple de todos)
   * __Bloc de notas__: *Un pro*.


### Normas de desarrollo

__Variables__

El nombre de la variable tendrá que ver con el contenido que esta llevara (Rut, Nombre, etc.), y para escribirla se usara del UpperCamelCase, el cual consiste en comenzar con mayúscula la primera letra de cada palabra, si es una palabra compuesta (Contiene dos o más términos) a cada inicio de la palabra se le colocara mayúscula.

Ejemplo:

```javascript
var EjemploDeUpperCamelCase = '' ;
```

__Funciones__

Se ocupara la misma forma como se declaran las variables, siempre con un nombre que fácil de identificar la función y si son palabras compuestas cada primera letra de cada palabra se escribirá con mayúscula y sin espacio.

Ejemplo:

```PHP
function ValidaUsuario(){}
```

#### Políticas para comentarios

__Variables__

Se comentara una breve descripción a lo que está referido el nombre de esa variable, se harán arriba de la variables, y solo se hará una vez, cuando se crea la variables.

Ejemplo:

```javascript
/*Este es el nombre del alumno que viene de la base de datos*/
var NombreAlumno = ‘’;
```

__Funciones__

Cuando se haya creado una función y ya esté terminada, se hará un breve comentario encima de esta describiendo que es lo que hará, para que sea más fácil para el resto del equipo conocer las funciones.

Ejemplo:


```PHP
/*Esta función Mostrara un mensaje cada vez que se ingrese a la aplicación*/
function SaludarUsuario(){
	echo “Hola usuario”;
}
```



