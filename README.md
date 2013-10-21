Practica1
=========
<pre>
Autor: Manuel Jesús García Manday
</pre>
  
En el siguiente documento se habla del proceso llevado a cabo para la realización de la primera práctica de la asignatura, en el que se detallará cada punto de la misma.

<b><h3>En que consiste</h3></b>   
Esta aplicación esta realizada con el objetivo de ayudar al usuario a conocer datos sobre su navegador. Al ejecutar la misma 
se ofrecerán datos relevantes sobre el navegador desde el cual se está ejecutando la aplicación. Nos dará información sobre
que tipo de navegador es (Firefox, Chrome, Internet Explorer, etc), la versión del mismo y en que plataforma se está ejecutando (Windows, Linux, etc).

Una ayuda que para cuando tengamos problemas por incompatibilidad de nuestro navegador nos podría venir bien para conocer mejor
problema y subsanarlo.

<b><h3>OpenShift</h3></b> 
He escogido este PaaS porque es el que mejor se adapta a mis necesidades, una plataforma libre, escalable y muy fácil de usar.
Para crear mi aplicación he realizado unos sencillos pasos:
* **Crear cuenta en OpenShift:** antes que nada me he registrado en OpenShift, para poder crear mi aplicación posteriormente.
* **Añadir aplicación en OpenShift:** desde la página de OpenShitf nos creamos nuestra aplicación (add application), buscamos el tipo de aplicacion,en mi caso php5.3,
lo último sería darle un nombre (navegadorV1 en mi caso).

<b><h3>GPL v2</h3></b> 
En mi práctica no hago alusión a ningún tipo de imagen, ni icono, ni nada por el estilo, por lo que con la licencia GPL v2 me cubre 
mis necesidades.

<b><h3>Copia local</h3></b> 
Cuando se creó el repositorio en github lo clonamos a la máquina local, dentro del directorio de la misma es donde se encuentra la aplicación, es decir,
el directorio **navegadorV1**, en el subdirectorio **php** es donde colocamos nuestros dos ficheros necesarios para nuestra aplicación.

<b><h3>Subida a github</h3></b> 
Lo siguiente que se hizo fue subir al repositorio https://github.com/jmanday/Practica1/ de github los últimos cambios que realizamos en nuestra máquina local, 
como se mencionó en el párrafo anterior. Mediante los comandos:
* git add index.php
* git add browser_class_inc.php
* git commit -m "Ficheros subidos"
* git push

<b><h3>Visualizar Aplicacion</h3></b>
http://navegadorv1-p1iv.rhcloud.com/


<b><h3>Bibliografía</h3></b>
* https://www.openshift.com/developers/rhc-client-tools-install
* http://www.php.net/manual/es/
