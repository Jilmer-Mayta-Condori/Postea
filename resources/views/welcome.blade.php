<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <!--Link Bootstrap-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>      

        </style>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#"><img src="{{asset('imagenes/w.png')}}" class="img-fluid" width="300px" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Celulares</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Computadoras</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Impresoras</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Marcas
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">HP</a>
                            <a class="dropdown-item" href="#">Samsumg</a>
                            <a class="dropdown-item" href="#">Lenovo</a>
                            <a class="dropdown-item" href="#">Apple</a>

                        </div>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="#">Administrador</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Otros
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Ayuda</a>
                            <a class="dropdown-item" href="#">Nosotros</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Reclamos</a>
                        </div>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>

        <!--Carrousel Bootstrap-->
        <div class="bd-example">
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                  <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{asset('imagenes/mac.png')}}" class="d-block w-100"  alt="...">
                        <div class="carousel-caption d-none d-md-block">
                          <h5>MacBook PRO</h5>
                          <p>Mayor velocidad y mejor calidad de graficos a un excelente precio</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('imagenes/celular.png')}}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                          <h5>iPhone 11 y Samsumg S20 pro</h5>
                          <p>Lo ultimo en tecnologia movil al alcance de tus manos</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('imagenes/impresora.png')}}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                          <h5>Impresora HP DeskJet 2050</h5>
                          <p>Lo mejor en impresion, hasta 5000 paginas a color</p>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

        <!--Seccion Recomendados-->
        <div id="recomendados">
          <h1>Lo ultimo!</h1>
        </div>
          
          <div class="jumbotron text-center">
                <div class="container">
                  <div class="row">
                    <div class="col-sm-4 mt-3">
                        <div class="card" >
                            <img src="{{asset('imagenes/iphone11.png')}}" class="card-img-top" alt="..." width="300" height="200">
                            <div class="card-body">
                                <h5 class="card-title">Iphone 11 PRO</h5>
                                <p class="card-text"> Pantalla: 7 pulgadas<br>Memoria RAM: 4GB<br>Nucleos: Hexa-Core</p>
                                <a href="#" class="btn btn-primary">Ver mas</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 mt-3">
                        <div class="card" >
                            <img src="{{asset('imagenes/impresora.png')}}" class="card-img-top" alt="..." width="300" height="200">
                            <div class="card-body">
                                <h5 class="card-title">Impresora HP</h5>
                                <p class="card-text">Puerto: USB 3.0 <br>Modelo: Deskjet 2050 Multifunción (imprime, copia, escanea)</p>
                                <a href="#" class="btn btn-primary">Ver mas</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 mt-3">
                        <div class="card" >
                            <img src="{{asset('imagenes/lenovo.png')}}" class="card-img-top" alt="..." width="300" height="200">
                            <div class="card-body">
                                <h5 class="card-title">Lenovo ThinkBook 13s</h5>
                                <p class="card-text">Procesador: Intel Core i7-8565U<br>Memoria RAM: 8 GB <br>Pantalla: LED 13.3" Full HD </p>
                                <a href="#" class="btn btn-primary">Ver mas</a>
                            </div>
                        </div>
                    </div>
                  </div>

                  <div class="row mt-5">
                        <div class="col-sm-4 mt-3">
                            <div class="card" >
                                <img src="{{asset('imagenes/samsung.png')}}" class="card-img-top" alt="..." width="300" height="200">
                                <div class="card-body">
                                    <h5 class="card-title">Samsumg S20 plus</h5>
                                    <p class="card-text">Pantalla: 6.9 pulgadas <br>Almacenamiento: 128 GB<br>Memoria RAM: 12 GB</p>
                                    <a href="#" class="btn btn-primary">Ver mas</a>
                                </div>
                            </div>
                        </div>
    
                        <div class="col-sm-4 mt-3">
                            <div class="card" >
                                <img src="{{asset('imagenes/impre.png')}}" class="card-img-top" alt="..." width="300" height="200">
                                <div class="card-body">
                                    <h5 class="card-title">Impresora HP Smart Tank 615</h5>
                                    <p class="card-text">Conexion USB y WIFI <br>Sistema de tanques HP <br> Garantia de 2 años</p>
                                    <a href="#" class="btn btn-primary">Ver mas</a>
                                </div>
                            </div>
                        </div>
    
                        <div class="col-sm-4 mt-3">
                            <div class="card" >
                                <img src="{{asset('imagenes/macbook.png')}}" class="card-img-top" alt="..." width="300" height="200">
                                <div class="card-body">
                                    <h5 class="card-title">MacBook PRO</h5>
                                    <p class="card-text">Pantalla: 16"<br>Mejores Graficos<br>Mayor durabilidad de bateria</p>
                                    <a href="#" class="btn btn-primary">Ver mas</a>
                                </div>
                            </div>
                        </div>
                      </div>
                </div>
            </div>

        <!--Aqui ira el Footer-->
        <footer>
            <div class="jumbotron jumbotron-fluid bg-secondary">
                <div class="row" style="justify-content: center">
                    <div class="col-sm-3 mt-3">
                        <div class="card bg-secondary" style="border-style: none" >
                            <div class="card-body">
                                <p>
                                    <span>ElectronicsWorld.com</span><br>
                                        Cookies <br>
                                        Política de privacidad <br>
                                        Aviso legal <br>
                                        Términos y condiciones
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-3 mt-3">
                        <div class="card bg-secondary" style="border-style: none">
                            <div class="card-body">
                                <p>
                                    <span>Proveedores</span><br>
                                        HP <br>
                                        Samsumg <br>
                                        Apple <br>
                                        Lenovo <br>

                                </p>
                            </div>
                        </div>
                    </div>

                <table class="table bg-secondary" style="text-align:center">
                        <tbody>
                            <tr>
                            <th>
                                Follow Us <br>
                                <a href="#"> <img src="{{asset('icons/facebook-logo.png')}}" alt="" width="50px" height="50px" class="f-icon"> </a> 
                                <a href="#"> <img src="{{asset('icons/instagram-logo.png')}}" alt="" width="50px" height="50px" class="f-icon"> </a>
                                <a href="#"> <img src="{{asset('icons/linkedin-logo.png')}}" alt="" width="50px" height="50px" class="f-icon"> </a> 
                                <a href="#"> <img src="{{asset('icons/twitter-logo.png')}}" alt="" width="50px" height="50px" class="f-icon"> </a>
                                <a href="#"> <img src="{{asset('icons/whatsapp.png')}}" alt="" width="50px" height="50px" class="f-icon"> </a> 
                            </th>
                            </tr>
                        </tbody>
                </table>

            </div>
        </footer>    
    </body>
</html>
