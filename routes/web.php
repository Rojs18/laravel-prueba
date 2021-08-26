<?php

use App\Http\Controllers\MessageController;
use App\Http\Controllers\ProjectController;

Route::view('/', 'home')->name('home');
Route::view('/quienes-somos', 'about')->name('about');
// Route::get('/portafolio', 'ProjectController@index')->name('portafolio.index');
Route::get('/portafolio', [ProjectController::class, 'index'])->name('projects.index');
Route::get('/portafolio/crear', [ProjectController::class, 'create'])->name('projects.create');

Route::post('/portafolio', [ProjectController::class, 'store'])->name('projects.store');

Route::get('/portafolio/{project}', [ProjectController::class, 'show'])->name('projects.show');

Route::get('/portafolio/{project}/editar', [ProjectController::class, 'edit'])->name('projects.edit');

Route::patch('/portafolio/{project}', [ProjectController::class, 'update'])->name('projects.update');


Route::view('/contacto', 'contact')->name('contact');

Route::post('contact', [MessageController::class,'store'])->name('message.store');








//Myapp.com = route::get('/', function)
//Myapp.com/contacto = route::get('contacto', function)
/*
Route::get('/', function(){
    return "hola desde la pagina de inicio";
});

Route::get('contacto', function(){
    return"hola desde la pagina de contacto";
});

Route::get()
Route::post() // for action="post"
Route::put()
Route::patch()
Route::delete()  */
/*
Route::get('saludo/{nombre?}', function($nombre = "invitado"){
    return "saludos " . $nombre;
});*/

