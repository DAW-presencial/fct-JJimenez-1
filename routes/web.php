<?php

use Illuminate\Support\Facades\Route;

/*  Rutas
Route::get('/', function() {
    return "Hola desde la pagina de inicio";
});

Route::get('contacto', function() {
    return "Hola desde la pagina de inicio";
});

Route::get('saludo/{nombre?}', function($nombre = "Invitado") {
    return "Saludos " . $nombre;
});
*/

/*Rutas con nombre 
Route::get('contactame', function() {
    return "Seccion de contactos";
})->name('contactos');

Route::get('/', function () {
    echo "<a href='" . route('contactos') . "'>Contactos 1</a><br>";
    echo "<a href='" . route('contactos') . "'>Contactos 2</a><br>";
    echo "<a href='" . route('contactos') . "'>Contactos 3</a><br>";
    echo "<a href='" . route('contactos') . "'>Contactos 4</a><br>";
    echo "<a href='" . route('contactos') . "'>Contactos 5</a><br>";

});
*/

/* Mostrar vistas
Route::get('contactame', function() {
    $nombre = "Dani";

    return view('home')->with(['nombre'=> $nombre]);
})->name('home');


*/
Route::view('/', 'home', ['nombre'=> 'Jose']);