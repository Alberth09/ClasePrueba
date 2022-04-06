@extends('plantilla')
@section('content')

<!-- CAROUSEL-->
<div id="mainSlider" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item ">
          </div>
          <div class="carousel-item active">
            <img src="./img/202212416252645_1.jpg" class="d-block w-100" alt="...">
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
              <video width= 700 height= 600 src="./resources/Pokémon Legends_ Arceus - Overview Trailer - Nintendo Switch.mp4" controls preload="auto"></video>
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
            <h3 class="text-center pb-5 pt-5 h1">Juegos de Pokemon destacados</h3>
        </div>

        <div class="row">
            <div class="col-sm">
                <div class="card w-100 card-border mb-5">
                    <img src="./img/81ErLLyfr5L._SL1500_.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <p class="card-text"></p>
                    </div>
                  </div>
            </div>
            <div class="col-sm">
                <div class="card w-100 card-border mb-5">
                    <img src="./img/818iETWG-aL._SY445_.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <p class="card-text"></p>
                    </div>
                  </div>
            </div>
            <div class="col-sm">
                <div class="card w-100 card-border mb-5">
                    <img src="./img/81eJlNQ1UCL._AC_SL1500_.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <p class="card-text"></p>
                    </div>
                  </div>
            </div>
          </div>

          <div class="row py-5">
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
      <div class="content bg-success"></div>
    </div>
    
    <div id="" class="px-5 pb-5 bg-success">
        <div class="container">
            <div class="row">
                <h2 class="text-center text-white text-shadow h1">Inicia tu aventura con los iniciales de la región de Hisui</h2>
            </div>
            <div class="row row-cols-1 row-cols-2 row-cols-sm-2 row-cols-md-3">
                <div class="col-sm">
                  <img src="./img/Rowlet_(2021).png" alt="" class="w-100 ">
                  <div class="text-center"><span class="h5 p-2">Rowlet</span></div>
                </div>
                <div class="col-sm">
                  <img src="./img/Cyndaquil_(2021).png" alt="" class="w-100 ">
                  <div class="text-center"><span class="h5 p-2">Cyndaquil</span></div>
                </div>
                <div class="col-sm">
                  <img src="./img/Oshawott_(2021).png" alt="" class="w-100">
                  <div class="text-center"><span class=" h5 p-2">Oshawott</span></div>
                </div>
            </div>
            <div class="row py-5">
              <div class="col text-center">
                <a href="#" class="link-dark">
                  <button class="btn btn-warning btn-lg rounded-pill p-3 font-weight-bold">Ver sobre la historia de la región de Hisui</button>
                </a>
                
              </div>
                
            </div>
        </div>
        <div id="separator">
        </div>
    </div>
    

  <!-- Play Nintendo-->
  <div id="play" >
    <div class="container-sm p-5">
      <h3 class="text-center h1">Un Poco del juego</h3>
      <div class="row justify-content-center align-items-center">
        <div class="col-3 d-none d-md-block">
          <img src="./img/Profesor_Lavender.png" class="w-100">
        </div>
        <div class="col-9">
          <div class="row justify-content-md-center">
            <div class="col p-1">
              <div class="card bg-primary text-white">   
                <div class="row">
                  <div class="col-md-6">
                    <img src="./img/Villa_Jubileo_mapa.png" class="w-100"  alt="...">
                  </div>
                  <div class="col-md-6">
                    <div class="card-body">
                      <h5 class="card-title"></h5>
                      <p class="card-text">La región entera se divide en cinco áreas completamente explorables en un entorno de mundo abierto donde se encuentran variedades de Pokémon, con la posiblidad de controlar la cámara de la misma manera que en el Área Silvestre de Pokémon Espada y Pokémon Escudo.</p>
                    </div><!--card-body-->
                  </div><!--col-->
                </div><!--row-->
              </div><!--CARD-->
            </div><!--col-->
            
            <div class="col p-1">
              <div class="card bg-warning text-white">   
                <div class="row">
                  <div class="col-md-6">
                    <div class="card-body">
                      <h5 class="card-title"></h5>
                      <p class="card-text"> se dispone de la ayuda de los Pokémon del equipo a la hora de combatir contra los Pokémon salvajes para capturarlos de manera tradicional o para evitar ser atacado en caso de ser avistado. Para empezar un combate se debe lanzar la Poké Ball cerca de un Pokémon salvaje y el combate se iniciará automáticamente.</p>
                    </div><!--card-body-->
                  </div>
                  <div class="col-md-6">
                    <img src="./img/Captura_de_Pokémon_LPA.jpg" class="w-100"  alt="...">
                  </div><!--col-->
                </div><!--row-->
              </div><!--CARD-->
            </div>
          </div>
        <div class="row  justify-content-md-center">
          <div class="col p-1">
            <div class="card bg-danger text-white">   
                <div class="row">
                  <div class="col-md-6">
                    <img src="./img/Poké_Ball_(Hisui)_(Ilustración).png" class="w-100"  alt="...">
                  </div>
                  <div class="col-md-6">
                    <div class="card-body">
                      <h5 class="card-title"></h5>
                      <p class="card-text">Las Poké Ball de la época se construyen de forma distinta a las de hoy en día, y despiden vapor de la parte superior al atrapar un Pokémon. Se deben fabricar utilizando bonguri y otros objetos, como guijarros.</p>
                    </div><!--card-body-->
                  </div><!--col-->
                </div><!--row-->
              </div><!--CARD-->
          </div>
          <div class="col p-1">
            <div class="card bg-success text-white">   
                <div class="row">
                  <div class="col-md-6">
                    <div class="card-body">
                      <h5 class="card-title"></h5>
                      <p class="card-text">Al inicio de tu viaje, recibirás un artefacto llamado móvil Arceus. Su diseño está basado en Arceus. Se dice que tiene un poder extraño y que te servirá de guía durante tu aventura. Una de sus funciones es la de proporcionar un mapa e información de los diversos lugares que muestra.</p>
                    </div><!--card-body-->
                  </div>
                  <div class="col-md-6">
                    <img src="./img/Móvil_Arceus.png" class="w-100"  alt="...">
                  </div><!--col-->
                </div><!--row-->
              </div><!--CARD-->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection