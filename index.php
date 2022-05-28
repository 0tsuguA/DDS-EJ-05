<?php
//La función date() con el parametro 'D' nos devuelve las tres primeras letras del día de la semana en inglés: Mon, Tue, Wed, Thu, Fri, Sat, Sun.
//Con este pequeño código $dia_ingles = date('D'); tendremos el día en la variable $dia_ingles.
//Mostrar el día en español por pantalla con el mensaje: "El día de la semana es: XXXX".


$dia_ingles = date('D');

if ($dia_ingles == 'Mon') {
    echo 'El dia de la semana es: Lunes';
} elseif ($dia_ingles == 'Tue') {
    echo 'El dia de la semana es: Martes';
} elseif ($dia_ingles == 'Wed') {
    echo 'El dia de la semana es: Miércoles';
} elseif ($dia_ingles == 'Thu') {
    echo 'El dia de la semana es: Jueves';
} elseif ($dia_ingles == 'Fri') {
    echo 'El dia de la semana es: Viernes';
} elseif ($dia_ingles == 'Sat') {
    echo 'El dia de la semana es: Sábado';
} elseif ($dia_ingles == 'Sun') {
    echo 'El dia de la semana es: Domingo';
}
