<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" 
    crossorigin="anonymous">
    <link rel="stylesheet" href="vista/estilos.css">
    <title>El faro | Principal</title>

</head>
<body>
    <center>
        <div class="user">
                
        </div>
    </center>
    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 sticky-top">
        <center>
            <div class="header m-auto mt-1 d-flex justify-content-between">
                <div class="logo m-1 auto d-flex justify-content-start">
                    <img class="logo" src="vista/imagenes/faro.jfif">
                </div>
                <div class="texto">
                    <p><h1>PERIODICO EL FARO</h1></p>
                    <nav class="navbar navbar-expand-md navbar-light  border-3">
                        <div id="navegacion" class="container-fluid ">
                            <a href="#" class="navbar-brand"></a>
                            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#MenuNavegacion">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                        
                            <div id="MenuNavegacion" class="collapse navbar-collapse">
                                <ul class="navbar-nav ms-3">
                                    <li class="nav-item"><a class="nav-link" href="vista/paginas/NACIONAL.php">Nacional</a></li>
                                    <li class="nav-item"><a class="nav-link" href="vista/paginas/INTERNACIONAL.php">Internacional</a></li>
                                    <li class="nav-item"><a class="nav-link" href="vista/paginas/seccion_deportes.php">Deportes</a></li>
                                    <li class="nav-item"><a class="nav-link" href="vista/paginas/ECONOMIA.php">Economia</a></li>
                                    <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Registros</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="vista/paginas/registro.php">Registrarse</a></li>
                                        <li><a class="dropdown-item" href="controlador/consult_user.php">Ver registros</a></li>
                                    </ul>
                                    <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Otros</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="vista/paginas/economicos.php">Avisos clasificados</a></li>
                                        <li><a class="dropdown-item" href="vista/paginas/privacidad.php">Politica de privacidad</a></li>
                                        <li><a class="dropdown-item" href="vista/paginas/ingreso_articulo.php" onclick="alerta()">Ingreso Articulo</a></li>
                                    </ul>
                                </ul>
                            </div>
                        </div>
                    </nav>
                    <hr>
                </div>
                
                <div class="widget" >
                    <div class="fecha">
                        <p id="dia" class="dia"></p>
                        <p>de</p>
                        <p id="mes" class="mes"></p>
                        <p>de</p>
                        <p id="year" class="year"></p>
                    </div>
                    <div class="reloj">
                        <p id="horas" class="horas "></p>
                        <p>:</p>
                        <p id="minutos" class="minutos"></p>
                        <p>:</p>
                        <div class="caja-segundos">
                            <p id="segundos" class="segundos"></p>
                        </div>
                    </div>  
                </div> 
            </div> 
            
        </center>  
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-7 col-xl-7 col-xxl-7">
                <center>
                    <div class="central mb-1">
                        <div class="destacadas d-flex flex-wrap align-content-center justify-content-center">
                            <div class="destacadas_principal m-1">
                                <?php
                                ?>
                                <img src="vista/imagenes/chile.jpg" class="img_seccion">
                                <a class="vinculo" href="vista/paginas/NACIONAL.php">
                                <p class="letra_seccion_a">Nacional</p></a>
                            </div>
                            <div class="destacadas_principal m-1">
                                <img src="vista/imagenes/internacional.jpg" class="img_seccion">
                                <a class="vinculo" href="vista/paginas/INTERNACIONAL.php">
                                <p class="letra_seccion_a">Internacional</p></a>
                            </div>
                            <div class="destacadas_principal m-1">
                                <img src="vista/imagenes/deportes.jpg" class="img_seccion">
                                <a class="vinculo" href="vista/paginas/seccion_deportes.php">
                                <p class="letra_seccion_a">Deportes</p></a>
                            </div>
                            <div class="destacadas_principal m-1">
                                <img src="vista/imagenes/economia.jpg" class="img_seccion">
                                <a class="vinculo" href="vista/paginas/ECONOMIA.php">
                                    <p class="letra_seccion_a">Economia</p></a>
                            </div>
                    </div>
                </center>    
            </div>
            <div class="col-sm-12 col-md-12 col-lg-5 col-xl-5 col-xxl-5">
                <center>
                    <p class="txt_ind m-2">Indicadores Economicos</p>
                    <div class="indicadores mb-1">
                        <div class="graficos m-auto" style="height: 80%;">
                            <div class="botonera d-flex justify-content-between">    
                                <div class="dolar">
                                    <a href="#" class="btn btn-dolar btn-primary" onclick="indicadores(1)">Dolar</a>
                                </div>
                                <div class="euro">
                                    <a href="#" class="btn btn-euro btn-primary" onclick="indicadores(2)">Euro</a>
                                </div>
                                <div class="uf">
                                    <a href="#" class="btn btn-uf btn-primary" onclick="indicadores(3)">UF</a>
                                </div>
                                 <div class="utm">
                                    <a href="#" class="btn btn-utm btn-primary" onclick="indicadores(4)">UTM</a>
                                </div>
                                <div class="ipc">
                                    <a href="#" class="btn btn-ipc btn-primary" onclick="indicadores(5)">IPC</a>
                                </div>   
                            </div>
                            <div class="carga_datos mt-2 d-block align-items-end">
                                <div class="info d-flex justify-content-center">
                                    <p id="info_text" class="info_text">Dolar observado: $780,59</p>
                                </div>
                                <img id="source" class="source" src="vista/imagenes/grafico_dolar.png" alt="">
                            </div>
                        </div>
                    </div>
                </center> 
            </div>
        </div>  
    </div>
    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
        <center>
            <div class="footer d-flex justify-content-center">
                <div class="contacto_link m-auto d-flex">
                    <img src="vista/imagenes/email.png" class="contacto" alt="">
                    <a class="vinculo" href="vista/paginas/contacto.php"><p class="letra_footer">Contacto</p></a>
                </div>
                <div class="rrss1 m-auto d-flex">
                    <img src="vista/imagenes/facebook.png" class="contacto" alt="">
                    <a class="vinculo" href="http://www.facebook.com" target="_blank"><p class="letra_footer">Facebook</p></a>
                </div>
                <div class="rrss2 m-auto d-flex">
                    <img src="vista/imagenes/twitter.png" class="contacto" alt="">
                    <a class="vinculo" href="http://www.twitter.com" target="_blank"><p class="letra_footer">Twitter</p></a>
                </div>
                <div class="rrss3 m-auto d-flex">
                    <img src="vista/imagenes/instagram.png" class="contacto" alt="">
                    <a class="vinculo" href="http://www.instagram.com" target="_blank"><p class="letra_footer">Instagram</p></a>
                </div>
            </div>
        </center> 
        <center>
            <div class="footer">
                <p class="letra_footer">
                    Pagina creada para instituto AIEP, carrera de Tecnico analista y programador de sistemas, 3er semestre
                </p>
                <p class="letra_footer">
                    Alumno Jaime Daniel Pardo Maldonado
                </p>
                <p class="letra_footer">
                    jdpm2014@gmail.com
                </p>
                <p class="letra_footer">
                    Septiembre, 2021
                </p>
            </div>
        </center>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" 
    crossorigin="anonymous"></script>
    <script src="vista/script_reloj.js"></script>
    <script src="vista/script.js"></script>
</body>
</html>