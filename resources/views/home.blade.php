@extends('app')
@section('content')
    <div class="contenedorDeInicio">
        <div class="imagenDeArriba">
            <img class="imgInicio" src="/img/fotoInicio2.png" alt="fotoInicio">
        </div>
        <div class="contenedorTituloYProductos">
             <div class="tituloPruductos">
                   CATEGORIA DE PRODUCTOS:
                </div>
                <div class="ListaProduc"> 
                    <ul class="ulCategorias"> 
                        <li class=" liCategoriasPro ">Remeras</li>
                        <li class=" liCategoriasPro ">Pantalones</li>
                        <li class=" liCategoriasPro ">Conjuntos</li>
                        <li class=" liCategoriasPro ">Gorras </li>
                    </ul>
                  
                </div>
                
                 <div class="contenedorDDestacados">
                    <div class="contenedorTituloLanzamientos"> <h1 class="tituloLanza">L A N Z A M I E N T O S</h1></div>
                    <div class="contenedorDArt">
                    <div class="articulosPaVender " > <img class="cssimg" src="/img/remera.png" alt=""></div>
                    <div class="articulosPaVender " > <img class="cssimg" src="/img/pantalon.jpg" alt=""></div>
                    <div class="articulosPaVender " > <img class="cssimg" src="/img/pantalon.jpg" alt=""></div>
                    <div class="articulosPaVender " > <img class="cssimg" src="/img/remera.png" alt=""></div>
                    <div class="articulosPaVender " > <img class="cssimg" src="/img/gorra.png" alt=""></div>
                    <div class="articulosPaVender " > <img class="cssimg" src="/img/pantalon.jpg" alt=""></div>
                    <div class="articulosPaVender " > <img class="cssimg" src="/img/remera.png" alt=""></div>
                    <div class="articulosPaVender " > <img class="cssimg" src="/img/gorra.png" alt=""></div>
                 </div>
                </div>
                <div class="contenedorDSEguinosYFotos">
                <div class="contenedorDeSeguinos"> <h1  class="tituloSeguinos">S E G U I N O S</h1></div>
                <div class="contenedosDeFotoIGFC"> 
                    <div class="contenedorFacebook" ><img class="imgface" src="/img/facebook.png" alt="facebook"></div>
                    <div class="contenedorIg"> <img class="imgIg" src="/img/instagram.png" alt=""></div></div>
                </div>
        </div>






    </div>
 @endsection