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
/* ----------------------------------------------- VISTAS DEL USUARIO------------------------------------------------- */
/* HEADER-.-.-.-.-.-.-.-.-.-.-.-.-*/ 
route::get('/header',function() {
    return view('header');
});/* FIN HEADER-.-.-.-.-.-.-.-.-.-.-.-.-*/ 

/* 1-LOGIN-.-.-.-.-.-.-.-.-.-.-.-.-*/ 
route::get('/login',function() {
    return view('login');
});/* FIN LOGIN-.-.-.-.-.-.-.-.-.-.-.-.-*/ 

/* 2-REGISTRARSE-.-.-.-.-.-.-.-.-.-.-.-.-*/ 
route::get('/registrarse',function() {
    return view('registrarse');
});/* FIN REGISTRARSE-.-.-.-.-.-.-.-.-.-.-.-.-*/ 

/* 3-HOME-.-.-.-.-.-.-.-.-.-.-.-.-*/ 
route::get('/home',function() {
    return view('home');
});/* FIN HOME-.-.-.-.-.-.-.-.-.-.-.-.-*/

/* 4-PRODUCTOS-.-.-.-.-.-.-.-.-.-.-.-.-*/ 
route::get('/productos',function() {
    return view('productos');
});/* FIN PRODUCTOS-.-.-.-.-.-.-.-.-.-.-.-.-*/ 

/* 5-DETALLE PRODUCTOS-.-.-.-.-.-.-.-.-.-.-.-.-*/ 
route::get('/detalleProducto',function() {
    return view('detalleProducto');
});/* FIN DETALLE PRODUCTOS-.-.-.-.-.-.-.-.-.-.-.-.-*/ 

/* 6-CONTACTO-.-.-.-.-.-.-.-.-.-.-.-.-*/ 
route::get('/contacto',function() {
    return view('contacto');
});/* FIN CONTACTO-.-.-.-.-.-.-.-.-.-.-.-.-*/ 

/* 7-CARRITO-.-.-.-.-.-.-.-.-.-.-.-.-*/ 
route::get('/carrito',function() {
    return view('carrito');
});/* FIN CARRITO-.-.-.-.-.-.-.-.-.-.-.-.-*/ 

/* 8-INICIO DE COMPRA-.-.-.-.-.-.-.-.-.-.-.-.-*/ 
route::get('/inicioDCompra',function() {
    return view('inicioDCompra');
});/* FIN INICIO DE COMPRA-.-.-.-.-.-.-.-.-.-.-.-.-*/ 

/* 9-MEDIO DE PAGO-.-.-.-.-.-.-.-.-.-.-.-.-*/ 
route::get('/medioDPago',function() {
    return view('medioDPago');
});/* FIN MEDIO DE PAGO -.-.-.-.-.-.-.-.-.-.-.-.-*/ 

/* 10-VER PREFIL -.-.-.-.-.-.-.-.-.-.-.-.-*/ 
route::get('/verPerfil',function() {
    return view('verPerfil');
});/* FIN VER PERFIL -.-.-.-.-.-.-.-.-.-.-.-.-*/

/* 11-EDITAR PERFIL-.-.-.-.-.-.-.-.-.-.-.-.-*/ 
route::get('/editarPerfil',function() {
    return view('editarPerfil');
});/* FIN EDITAR PERFIL -.-.-.-.-.-.-.-.-.-.-.-.-*/ 
/* ----------------------------------------------- FIN VISTAS DEL USUARIO------------------------------------------------- */

/* ----------------------------------------------- VISTAS DEL ADMINISTRADOR------------------------------------------------- */

/* 1-ALTA DE PRODUCTOS-.-.-.-.-.-.-.-.-.-.-.-.-*/ 
route::get('/altaDProductos',function() {
    return view('altaDProductos');
});/* FIN ALTA DE PRODUCTOS -.-.-.-.-.-.-.-.-.-.-.-.-*/ 

/* 2-ADMINISTRAR PRODUCTOS-.-.-.-.-.-.-.-.-.-.-.-.-*/ 
route::get('/administrarProductos',function() {
    return view('administrarProductos');
});/* FIN ADMINISTRAR PRODUCTOS -.-.-.-.-.-.-.-.-.-.-.-.-*/

/* 3-AGREGAR PRODUCTOS-.-.-.-.-.-.-.-.-.-.-.-.-*/ 
route::get('/agregarProductos',function() {
    return view('agregarProductos');
});/* FIN AGREGAR PRODUCTOS -.-.-.-.-.-.-.-.-.-.-.-.-*/ 

/* 4-EDITAR/ELIMINAR PRODUCTOS-.-.-.-.-.-.-.-.-.-.-.-.-*/ 
route::get('/editarEliminarProduc',function() {
    return view('editarEliminarProduc');
});/* FIN EDITAR/ELIMINAR PRODUCTOS -.-.-.-.-.-.-.-.-.-.-.-.-*/ 

/* 5-HISTORIAL DE VENTAS-.-.-.-.-.-.-.-.-.-.-.-.-*/ 
route::get('/historialDVentas',function() {
    return view('historialDVentas');
});/* FIN HISTORIAL DE VENTAS -.-.-.-.-.-.-.-.-.-.-.-.-*/ 



/* ----------------------------------------------- FIN VISTAS DEL USUARIO------------------------------------------------- */

/* PRACTICA PARA SANTI-.-.-.-.-.-.-.-.-.-.-.-.-*/ 
route::get('/santy',function() {
    return view('santy');
});/* FIN PRACTICA PARA SANTI-.-.-.-.-.-.-.-.-.-.-.-.-*/ 

/* FOOTER-.-.-.-.-.-.-.-.-.-.-.-.-*/ 
route::get('/footer',function() {
    return view('footer');
});/* FIN FOOTER-.-.-.-.-.-.-.-.-.-.-.-.-*/ 