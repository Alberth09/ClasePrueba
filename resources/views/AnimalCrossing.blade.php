@extends('plantilla')
@section('content')

 <div id="mainSlider" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item ">
            <img src="img/slide01.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item active">
            <img src="img/slide02.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/slide03.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
    </div><!-- CAROUSEL-->

    <!-- RIBBON-->
    <div id="ribbon">
        <div id="birthday" class="container w-50 pl-5 pr-5 rounded-lg">
          <!-- slide -->
          <div class="row align-items-center">
            <div class="col-sm col-sm p-3" id="description">
              <video width= 700 height= 600 src="./resources/¿Qué es Animal Crossing_ New Horizons.mp4" controls preload="auto"></video>
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
            <h3 class="text-center pb-5 pt-5 h1">Juegos de Animal Crossing destacados</h3>
        </div>

        <div class="row">
            <div class="col-sm">
                <div class="card w-100 card-border mb-5">
                    <img src="img/card01.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <p class="card-text"></p>
                    </div>
                  </div>
            </div>
            <div class="col-sm">
                <div class="card w-100 card-border mb-5">
                    <img src="img/card02.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <p class="card-text"></p>
                    </div>
                  </div>
            </div>
            <div class="col-sm">
                <div class="card w-100 card-border mb-5">
                    <img src="img/card03.jpg" class="card-img-top" alt="...">
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
            <div class="col-1"><a href="#">Wii U</a></div>
            <div class="col-1"><a href="#">Mobile</a></div>
            <div class="col-1"><a href="#">Retro</a></div>
          </div>
        </div>
      </div>  
    </div>
    

    <div id="separator-amiibos">
      <div class="content bg-success"></div>
    </div>
    
    <div id="amiibos" class="px-5 pb-5 bg-success">
        <div class="container">
            <div class="row">
                <h2 class="text-center text-white text-shadow h1">Figuras Amiibo™ destacadas</h2>
            </div>
            <div class="row row-cols-1 row-cols-2 row-cols-sm-2 row-cols-md-4">
                <div class="col-sm">
                  <img src="img/figure01.png" alt="" class="w-100 amiibo">
                  <div class="text-center"><span class="amiibo-name h5 p-2">Isabelle</span></div>
                </div>
                <div class="col-sm">
                  <img src="img/figure02.png" alt="" class="w-100 amiibo">
                  <div class="text-center"><span class="amiibo-name h5 p-2">Kapp'n</span></div>
                </div>
                <div class="col-sm">
                  <img src="img/figure03.png" alt="" class="w-100 amiibo">
                  <div class="text-center"><span class="amiibo-name h5 p-2">Rover</span></div>
                </div>
                <div class="col-sm">
                  <img src="img/figure04.png" alt="" class="w-100 amiibo">
                  <div class="text-center"><span class="amiibo-name h5 p-2">Timmy & Tommy</span></div>
                </div>
            </div>
            <div class="row py-5">
              <div class="col text-center">
                <a href="#" class="link-dark">
                  <button class="btn btn-warning btn-lg rounded-pill p-3 font-weight-bold">Ver catálogo de Amiibo</button>
                </a>
                
              </div>
                
            </div>
        </div>
        <div id="separator-amiibos-footer">
        </div>
    </div>
    

  <!-- Play Nintendo-->
  <div id="play" >
    <div class="container-sm p-5">
      <h3 class="text-center h1">Isabelle y amigos en Play Nintendo</h3>
      <div class="row justify-content-center align-items-center">
        <div class="col-3 d-none d-md-block">
          <img src="img/isabelle.png" class="w-100">
        </div>
        <div class="col-9">
          <div class="row justify-content-md-center">
            <div class="col p-1">
              <div class="card bg-primary text-white">   
                <div class="row">
                  <div class="col-md-6">
                    <img src="img/ph-01.jpg" class="w-100"  alt="...">
                  </div>
                  <div class="col-md-6">
                    <div class="card-body">
                      <h5 class="card-title"></h5>
                      <p class="card-text"></p>
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
                      <p class="card-text"></p>
                    </div><!--card-body-->
                  </div>
                  <div class="col-md-6">
                    <img src="img/ph-02.jpg" class="w-100"  alt="...">
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
                    <img src="img/ph-03.jpg" class="w-100"  alt="...">
                  </div>
                  <div class="col-md-6">
                    <div class="card-body">
                      <h5 class="card-title"></h5>
                      <p class="card-text"></p>
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
                      <p class="card-text"></p>
                    </div><!--card-body-->
                  </div>
                  <div class="col-md-6">
                    <img src="img/ph-04.jpg" class="w-100"  alt="...">
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