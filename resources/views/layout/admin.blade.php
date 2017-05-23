<!DOCTYPE html>
<html lan="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta="viewport" content="width=device-width initial-scale=1">
    <tilte></title>
        {!!Html::style('css/bootstrap.min.css')!!}
        {!!Html::style('css/bootstrap-theme.min.css')!!}   
        {!!Html::script('js/jquery.min.js')!!}
        {!!Html::script('js/bootstrap.min.js')!!}
    </head>
    <body>
        <div class="container">
            <div class="row" style="margin-bottom: 80px">
                <div class="col col-md-12">
                  
                     <nav class="navbar navbar-default navbar-fixed-top">
                      <div class="container">
                        <div class="navbar-header">
                          <a class="navbar-brand" href="#">
                            Cinema
                          </a>
                          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                          </button>

                        </div>
                        <div id="navbar" class="navbar-collapse collapse" style="float:right">
                          <ul class="nav navbar-nav">
                            
                            <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{!!Auth::user()->name!!} <span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Ajustes</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="/logout">Logout</a></li>
                              </ul>
                            </li>
                            
                          </ul>
                        </div><!--/.nav-collapse -->
                      </div>
                    </nav>
                </div>
            </div>
            <div class="row">
                <div class="col col-md-3">
                        <!-- <div class="navbar-default sidebar" role="navifation">
                            <div class="sidebar-nav navbar-collapse">
                                <div class="nav" id="side-menu">
                                    @if(Auth::user()->id == 1)
                                    <li>
                                        <a href="#"><i class="fa fa-users fa-fw"></i>Usuario<span class="fa arrow"></span></a>
                                        <ul class="nav nav-second-level">
                                            <li>
                                                <a href="{!!URL::to('/usuario/create')!!}"><i class='fa fa-plus fa-fw'></i>Agregar</a>
                                            </li>
                                            <li>
                                                <a href="{!!URL::to('/usuario')!!}"><i class='fa fa-list-ol fa-fw'></i>Usuarios</a>
                                            </li>
                                        </ul>
                                    </li>
                                    @endif
                                    <li>
                                        <a href="#"><i class="fa fa-users fa-fw"></i>Pelicula<span class="fa arrow"></span></a>
                                        <ul class="nav nav-second-level">
                                            <li>
                                                <a href="#"><i class='fa fa-plus fa-fw'></i>Agregar</a>
                                            </li>
                                            <li>
                                                <a href="#"><i class='fa fa-list-ol fa-fw'></i>Peliculas</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-users fa-fw"></i>Genero<span class="fa arrow"></span></a>
                                        <ul class="nav nav-second-level">
                                            <li>
                                                <a href="#"><i class='fa fa-plus fa-fw'></i>Agregar</a>
                                            </li>
                                            <li>
                                                <a href="#"><i class='fa fa-list-ol fa-fw'></i>Generos</a>
                                            </li>
                                        </ul>
                                    </li>
                                </div>
                            </div>
                        </div> -->
                        <!-- Menu acordion  -->
                         <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                @if(Auth::user()->id == 1)
                              <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="text-decoration:none; ">
                                      <h4 class="panel-title">
                                          Usuarios
                                      </h4>
                                    </a>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                  <div class="panel-body">
                                    <ul class="nav nav-second-level">
                                        <li>
                                            <a href="{!!URL::to('/usuario/create')!!}"><i class='fa fa-plus fa-fw'></i>Agregar</a>
                                        </li>
                                        <li>
                                            <a href="{!!URL::to('/usuario')!!}"><i class='fa fa-list-ol fa-fw'></i>Usuarios</a>
                                        </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                               @endif
                              <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingTwo">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="text-decoration:none; ">
                                    <h4 class="panel-title">
                                      Pelicula
                                    </h4>
                                    </a>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                  <div class="panel-body">
                                    <ul class="nav nav-second-level">
                                        <li>
                                            <a href="#"><i class='fa fa-plus fa-fw'></i>Agregar</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class='fa fa-list-ol fa-fw'></i>Peliculas</a>
                                        </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingThree">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style="text-decoration:none; ">
                                    <h4 class="panel-title">
                                      Genero
                                    </h4>
                                    </a>
                                </div>
                                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                  <div class="panel-body">
                                    <ul class="nav nav-second-level">
                                        <li>
                                            <a href="{!!URL::to('/usuario/create')!!}"><i class='fa fa-plus fa-fw'></i>Agregar</a>
                                        </li>
                                        <li>
                                            <a href="{!!URL::to('/usuario')!!}"><i class='fa fa-list-ol fa-fw'></i>Usuarios</a>
                                        </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                            </div>
                        <!-- Fin Menu acordion -->

                    <!-- </nav> -->
                </div>
                <div class="col col-md-9">
                    @yield('content')

                    <footer>
                        <div class="row" style="margin-bottom: 80px">
                            <div class="col col-md-12">
                              
                                 <nav class="navbar navbar-default navbar-fixed-bottom">
                                  <div class="container">
                                    <span><h6>@author: luis perez contreras test de desarrollo en laravel</h6></span>       
                                    
                                  </div>
                                </nav>
                            </div>
                        </div>
                    </footer>
                </div> 
            </div>
        </div>
    </body>
    </html> 