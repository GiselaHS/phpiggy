<?php 

//phpinfo();
/*
ini_set(''); // función que nos da la opción de anular la configuración actual en PHP
Esta función nos da la opción de anular la configuración actual de PHP.
Quizás te preguntes cuáles son las diferencias entre usar esta función y configurarla directamente.
¿El archivo de configuración oficial?
Las modificaciones aplicadas al archivo de configuración se aplican a todos los scripts PHP, mientras que la función set de Ini
Sólo afecta a los scripts actuales.
Esta función tiene dos argumentos que son el nombre de la configuración y el valor de la configuración.

ini_set('memory_limit', '255M'); // actualización de el limite de memoria
echo ini_get('memory_limit'); //devuelve una configuración específica, debemos pasar el nombre como una cadena
//cada script tiene un limite en cuanto a la cantidad de memoria que puede consumir
//si un script consume demasiada memoria, genera un error fatal
// salida en el navegadr -> 512M
//salida -> 255M

*/


$app = include __DIR__ . '/../src/App/bootstrap.php';

$app-> run();

?>