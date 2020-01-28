<?php 
$imc="erorr";
$color="";
 $resultado=0.0;
if (isset($_POST['peso']) &&isset($_POST['altura']) && is_numeric($_POST['peso']) && is_numeric($_POST['altura'])  ) {
    $peso= $_POST['peso'];
    $altura= $_POST['altura'];
    $resultado= round($peso/($altura*$altura),1);
    
    if ($resultado<18.5) {
        $imc="debes de subir un poco de peso";
        $color="danger";
    }elseif ($resultado>=18.5 AND $resultado<=24.9) {
       $imc="Estas es un peso normal sigue asi";
        $color="success";
    }elseif ($resultado>=25 AND $resultado<=29.9) {
        $imc="Estas un poquito de sobre peso, cuidate come bien";
        $color="warning";
    }elseif ($resultado>30) {
        $imc="Amigo tienes que hacer dieta urgente,cuidate bro";
        $color="dark";
    }else{
        $imc="No se pudo calcular tu peso";
        $color="light";
    }
    // echo "la suma es ".$resultado;
}else {
   $color="light";
   $imc="INGRESA LOS VALORES";
}

 ?>
<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Calculadora Imc</title>
    <!-- Font Awesome Icons -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic'
        rel='stylesheet' type='text/css'>


    <link rel="icon" href="img/android-icon-48x48.png">
    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Theme CSS - Includes Bootstrap -->
    <link href="css/creative.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">Calculadora IMC</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto my-2 my-lg-0">
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#about">Sobre</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#redes">Redes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#ejercicios">Ejercicios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#contact">Contacto</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Masthead -->
    <header class="masthead">
        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center text-center">
                <div class="col-lg-10 align-self-end">
                    <h1 class="text-uppercase text-white font-weight-bold">Bienvenidos a la mejor calculadora de IMC
                    </h1>
                    <hr class="divider my-4">
                </div>
                <div class="col-lg-8 align-self-baseline">
                    <p class="text-white-75 font-weight-light mb-5">Con esta calculadora podras saber si es que estas en
                        un peso adecuado a tu talla o si necesitas bajar de peso.Si es asi nosotros te ayudaremos a
                        bajar esos kilos de mas.
                    </p>
                    <a class="btn btn-primary btn-xl js-scroll-trigger" href="#calculadora">Calcular mi IMC</a>
                </div>
            </div>
        </div>
    </header>
    <!-- About Section -->
    <section class="page-section bg-primary" id="calculadora">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9 text-center">
                    <h2 class="text-white mt-0">Calcular tu IMC</h2>
                    <hr class="divider light my-4">
                    <p class="text-white-50 mb-4">Esto no tardara nada 😎😉</p>
                    <form class="text-white-50 mb-4" action="index.php#calculadora" method="POST">
                        Ingrese su peso en kilogramos(kg) <input class="form-control" step=".01" type="number"
                            name="peso" placeholder="80" id="example-number-input">
                        Ingrese su altura en metros (m) <input class="form-control" type="number" step=".01"
                            name="altura" placeholder="1.70" />
                        <br /><br />
                        <input class="btn btn-light btn-xl js-scroll-trigger" type="submit" name="" value="Calcular" />

                    </form>
                </div>
                <div class="col-lg-9 text-center">
                    <div class="alert alert-<?php echo $color;?>" role="alert">
                        <h4 class="alert-heading">Respuesta</h4>
                        <hr>
                        <p class="mb-0">Tu IMC es:<?php echo $resultado; ?></p>
                        <p class="mb-0">Consejo:<?php echo $imc; ?></p>
                        <a class="btn btn-primary btn-xl js-scroll-trigger" href="#ejercicios">Ejercicios</a>
                        <a class="btn btn-primary btn-xl js-scroll-trigger" href="#video">ver videos</a>
                    </div>

                </div>

            </div>
        </div>
    </section>
    <!-- About Section -->
    <section class="page-section bg-primary" id="about">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="text-white mt-0">Que es la calculadora IMC?</h2>
                    <hr class="divider light my-4">
                    <p class="text-white-50 mb-4">El Índice de Masa Corporal (IMC) es una medida de asociación entre el
                        peso y la talla de una persona. El IMC es usado como uno de varios indicadores para evaluar el
                        estado nutricional.

                        El IMC constituye la medida poblacional más útil del sobrepeso y la obesidad, pues la forma de
                        calcularlo no varía en función del sexo ni de la edad en la población adulta. No obstante, debe
                        considerarse como una guía aproximativa, pues puede no corresponder al mismo grado de gordura en
                        diferentes individuos.

                        La Organización Mundial de la Salud, ha propuesto una clasificación del estado nutricional
                        dependiendo del IMC de una persona.</p>
                    <a class="btn btn-light btn-xl js-scroll-trigger" href="#calculadora">Calcular mi IMC</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="page-section" id="redes">
        <div class="container">
            <h2 class="text-center mt-0">Redes del creador</h2>
            <hr class="divider my-4">
            <div class="row">
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <!-- <i class="fas fa-4x fa-gem text-primary mb-4"></i> -->
                        <a href="https://facebook.com/fapcod"><i
                                class="fab fa-4x fa-facebook text-primary mb-4"></i></a>
                        <h3 class="h4 mb-2">Sigueme</h3>
                        <p class="text-muted mb-0">Todo lo nuevo que publico</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <a href="https://github.com/fapcod"><i class="fab  fa-4x fa-github text-primary mb-4"></i></a>
                        <!-- <i class="fas fa-4x fa-laptop-code text-primary mb-4"></i> -->
                        <h3 class="h4 mb-2">GitHub</h3>
                        <p class="text-muted mb-0">Todos mis proyectos</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <a href="https://twitter.com/FrankAntonioPA"><i
                                class="fab  fa-4x fa-twitter text-primary mb-4"></i></a>
                        <!-- <i class="fas fa-4x fa-globe text-primary mb-4"></i> -->
                        <h3 class="h4 mb-2">Twitter</h3>
                        <p class="text-muted mb-0">Toda mi actividad diaria</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <a href="https://www.youtube.com/channel/UCaypB7CvHIK0-aQNjp5E4Ag?view_as=subscriber"><i
                                class="fab   fa-4x fa-youtube text-primary mb-4"></i></a>
                        <!-- <i class="fas fa-4x fa-heart text-primary mb-4"></i> -->
                        <h3 class="h4 mb-2">Youtube</h3>
                        <p class="text-muted mb-0">Aprende gratis</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Section -->
    <section id="ejercicios">
        <div class="container-fluid p-0">
            <div class="row no-gutters">
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="img/portfolio/fullsize/1.jpg">
                        <img class="img-fluid" src="img/portfolio/thumbnails/1.jpg" alt="">
                        <div class="portfolio-box-caption">
                            <div class="project-category text-white-50">
                                Ejercicio
                            </div>
                            <div class="project-name">
                                1. Sentadilla con rotación de caderas: Intenta hacerlo lo más rápido que puedas y
                                ponerte de puntillas cuando hagas el movimiento de caderas.
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="img/portfolio/fullsize/2.jpg">
                        <img class="img-fluid" src="img/portfolio/thumbnails/2.jpg" alt="">
                        <div class="portfolio-box-caption">
                            <div class="project-category text-white-50">
                                Ejercicio
                            </div>
                            <div class="project-name">
                                2. Reverencia y patada de rodilla: Esta biofísica y entrenadora online recomienda apoyar
                                el peso del cuerpo en los talones cuando realices la patada de rodilla. Cambia de pierna
                                cada 15 segundos.
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="img/portfolio/fullsize/3.jpg">
                        <img class="img-fluid" src="img/portfolio/thumbnails/3.jpg" alt="">
                        <div class="portfolio-box-caption">
                            <div class="project-category text-white-50">
                                Ejercicio
                            </div>
                            <div class="project-name">
                                3. Elevación de pesa: Si no tienes pesas o discos, siempre puedes hacerlo sin carga
                                extra
                                (y ya es un ejercicio súper completo). Súper importante mantener la espalda recta y
                                realizar “un movimiento fluido de abajo a arriba”
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="img/portfolio/fullsize/4.jpg">
                        <img class="img-fluid" src="img/portfolio/thumbnails/4.jpg" alt="">
                        <div class="portfolio-box-caption">
                            <div class="project-category text-white-50">
                                Ejercicio
                            </div>
                            <div class="project-name">
                                4. Posición del perro con rodilla al pecho: “Estira la pierna con la que estés
                                trabajando bien arriba y llévala lo más cerca al pecho que puedas mientras tensas los
                                abdominales.”
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="img/portfolio/fullsize/5.jpg">
                        <img class="img-fluid" src="img/portfolio/thumbnails/5.jpg" alt="">
                        <div class="portfolio-box-caption">
                            <div class="project-category text-white-50">
                                Ejercicio
                            </div>
                            <div class="project-name">
                                5. Plancha inversa levantando rodillas: Natacha afirma que “le encantan las planchas
                                inversas para el ‘core’, los hombros y los glúteos”. Según la ‘instagramer’, el truco
                                está en mantener el glúteo alto para que de la rodilla al pecho se forme una línea
                                recta.
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">

                    <a class="portfolio-box" href="img/portfolio/fullsize/6.jpg">
                        <img class="img-fluid" src="img/portfolio/thumbnails/6.jpg" alt="">
                        <div class="portfolio-box-caption p-3">
                            <div class="project-category text-white-50">
                                Ejercicio
                            </div>
                            <div class="project-name">
                                6. Zancadas alternas: Para terminar este entrenamiento ‘quemagrasa’, realiza
                                zancadas
                                alternas (adelante y atrás) sin para en en la posición vertical. ¡Aprovecha la
                                zancada
                                hacia atrás para coger impulso!
                            </div>

                        </div>

                    </a>

                </div>

            </div>
        </div>
    </section>

    <!-- Call to Action Section -->
    <section class="page-section bg-dark text-white" id="video">
        <div class="container text-center">
            <h2 class="mb-4">IR A VER LOS VIDEOS DE LOS EJERCICIOS</h2>
            <a class="btn btn-light btn-xl" href="https://www.instagram.com/p/Bs1BX5tnZ6N/">ir ahora</a>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="page-section" id="contact">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="mt-0">Hablemos!</h2>
                    <hr class="divider my-4">
                    <p class="text-muted mb-5">Posiblemente no te responda de inmediato pero si lo hare 😎</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 ml-auto text-center mb-5 mb-lg-0">
                    <i class="fas fa-phone fa-3x mb-3 text-muted"></i>
                    <div>+51 957 188 427</div>
                </div>
                <div class="col-lg-4 mr-auto text-center">
                    <i class="fas fa-envelope fa-3x mb-3 text-muted"></i>
                    <!-- Make sure to change the email address in anchor text AND the link below! -->
                    <a class="d-block" href="mailto:contact@yourwebsite.com">frankantoniopiato@gmail.com</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-light py-5">
        <div class="container">
            <div class="small text-center text-muted">Copyright &copy; 2020 - FapCod</div>
        </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/creative.min.js"></script>

</body>

</html>