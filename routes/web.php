<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
/* HEADER-.-.-.-.-.-.-.-.-.-.-.-.-*/ 
route::get('/header',function() {
    return view('header');
});/* FIN HEADER-.-.-.-.-.-.-.-.-.-.-.-.-*/ 

/* HOME-.-.-.-.-.-.-.-.-.-.-.-.-*/ 
route::get('/home',function() {
    return view('home');
});/* FIN HOME-.-.-.-.-.-.-.-.-.-.-.-.-*/ 
/* PRACTICA PARA SANTI-.-.-.-.-.-.-.-.-.-.-.-.-*/ 
route::get('/santy',function() {
    return view('santy');
});/* FIN PRACTICA PARA SANTI-.-.-.-.-.-.-.-.-.-.-.-.-*/ 

/* FOOTER-.-.-.-.-.-.-.-.-.-.-.-.-*/ 
route::get('/footer',function() {
    return view('footer');
});/* FIN FOOTER-.-.-.-.-.-.-.-.-.-.-.-.-*/ 