@extends('plantilla')
@section('content')


<div id="mainSlider" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item ">
          </div>
          <div class="carousel-item active">
            <img src="./img/H2x1_NintendoSwitch_Family_enGB.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
          </div>
        </div>
    </div><!-- CAROUSEL-->

    <!-- RIBBON-->
    <div id="ribbon">
        <div id="birthday" class="container w-50 pl-5 pr-5 rounded-lg">
          <!-- slide -->
          <div class="row align-items-center">
            <div class="col-sm col-sm p-3" id="description">
              <video width= 700 height= 600 src="./resources/Nintendo Switch (modelo OLED) – Tráiler de presentación.mp4" controls preload="auto"></video>
            </div>
          </div><!-- SLIDE-->
        </div>
    </div><!-- RIBBON-->

    <!-- SEPARATOR RIBBON-->
    <div id="separator-ribbon">
      <div class="content bg-warning"></div>
    </div>

    <!-- GAMES-->
    <div id="games">
      <div class="container-md p-5">
        
        <div class="row pt-5">
            <h3 class="text-center pb-5 pt-5 h1">Algunos Juegos de Nintendo</h3>
        </div>

        <div class="row ">
            <div class="col-sm">
                <div class="card w-100 card-border mb-5">
                    <img src="./img/71CEYxAqqHL._AC_SX466_P.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <p class="card-text"></p>
                    </div>
                  </div>
            </div>
            <div class="col-sm">
                <div class="card w-100 card-border mb-5">
                    <img src="./img/71TU0o8tAwS._AC_SL1125_.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <p class="card-text"></p>
                    </div>
                  </div>
            </div>
            <div class="col-sm">
                <div class="card w-100 card-border mb-5">
                    <img src="./img/81kfvGfF+SL._AC_SL1500_.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <p class="card-text"></p>
                    </div>
                  </div>
            </div>
          </div>

          <div class="row py-5 ">
            <div class="col">
              <h3 class="text-center" style="color: var(--bs-blue)">Más juegos en Nintendo.com:</h3>
            </div>
          </div>
          <div class="row justify-content-center">
            <div class="col-2"><a href="#">Nintendo Switch</a></div>
            <div class="col-2"><a href="#">Nintendo 3DS</a></div>
            <div class="col-1"><a href="#">Mobile</a></div>
          </div>
        </div>
      </div>  
    </div>
    

    <div id="separator">
      <div class="content"></div>
    </div>
    
    <div id="" class="px-5">
        <div class="container">
            <div class="row">
                <h2 class="text-center text-black text-shadow h1">Algunos acesorios para tu Nintendo Switch</h2>
            </div>
            <div class="row row-cols-1 row-cols-2 row-cols-sm-2 row-cols-md-2">
                <div class="col-sm">
                  <img src="./img/61drpi3cYUL._AC_SX522_.jpg" alt="" class="w-100 ">
                  <div class="text-center"><span class="h5 p-2">Pro Controller</span></div>
                </div>
                <div class="col-sm">
                  <img src="./img/71ZEdcE7mpL._AC_SX522_C.jpg" alt="" class="w-100 ">
                  <div class="text-center"><span class="h5 p-2">Joy-Con </span></div>
                </div>
            </div>
            <div class="row py-5">
              <div class="col text-center">
                <a href="#" class="link-dark">
                  <button class="btn btn-warning btn-lg rounded-pill p-3 font-weight-bold">Ver mas acesorios</button>
                </a>
                
              </div>
                
            </div>
        </div>
        <div id="separator">
        </div>
    </div>

    @endsection