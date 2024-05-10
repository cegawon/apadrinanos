<?php
  session_start(); 
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>APADRINANOS</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Free Website Template" name="keywords">
        <meta content="Free Website Template" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        
        <!-- CSS Libraries -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">

        <!-- Toastr --> 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" />

      
        <!-- alerta sweetalert2 -->
        <script src="sweetalert2.all.min.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="sweetalert2.min.js"></script>
        <link rel="stylesheet" href="sweetalert2.min.css"> 
        <style>
           
            .nosotros_imagen{
                margin-left: 20px;               
            }
            
            .educacion{
                margin-right: 30px;
            }  
            .video2{
                width: 800px;
                height: 500px;
            }
                    
            @media (max-width: 756px) 
            {
                .nosotros{
                    display: flex;
                    flex-direction: column;
                    justify-content: center;
                }
                .nosotros_imagen{
                    width: 200px;
                    margin-left: 0px;
                }
                .tab-content{
                    margin-left: 20px;
                    margin-right: 20px;
                } 
                .educacion{
                    margin-right: 60px;
                }    
                .comida{
                    margin-right: 30px;
                }    
                .about{
                    margin-top: -80px;
                }  
                .video2{
                    width: 300px;
                    height: 300px;
                    margin-top: -60px;
                }   
            }
        </style>
    </head>

    <body>
        <div id="mostrar_mensaje"></div>
        
        <!-- alerta de inscripción -->
        <?php
        if (isset($_SESSION['inscripcion'])) 
        {  unset($_SESSION['inscripcion']);?>
            <script>
                
                Swal.fire({
                   position: 'center-center',
                   icon: 'success',
                   title: 'Resgisto Exitoso',
                   text: 'Pronto no comunicaremos con usted, Dios te bendiga Grandemente',
                   showConfirmButton: false,
                   timer: 5000
                })
                
            </script>
        <?php
        }
        ?>
        
        <!-- alerta de contacto -->

        <?php
            if (isset($_SESSION['mensaje'])) 
            {  unset($_SESSION['mensaje']);?>
               <script>
                
                Swal.fire({
                   position: 'center-center',
                   icon: 'success',
                   title: 'Envio Exitoso',
                   text: 'Pronto no comunicaremos con usted, Dios te bendiga Grandemente',
                   showConfirmButton: false,
                   timer: 5000
                })
                
            </script> 
            <?php
            }
        ?>
        <!-- alerta de Suscripción -->
        <?php
            if (isset($_SESSION['boletin'])) 
            {  unset($_SESSION['boletin']);
        ?>
                <script>
                    Swal.fire({
                        position: 'center-center',
                        icon: 'success',
                        title: 'Registro Exitoso',
                        text: 'Pronto no comunicaremos con usted, Dios te bendiga Grandemente',
                        showConfirmButton: false,
                        timer: 5000
                    })
                        
                </script> 
            <?php
            }
            ?>
        
    
        <!-- Top Bar Start -->
        <div class="top-bar d-none d-md-block">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="top-bar-left">
                            <div class="text">
                                <i class="fa fa-phone-alt"></i>
                                <p>+57 3008334903</p>
                            </div>
                            <div class="text">
                                <i class="fa fa-envelope"></i>
                                <p>apadrinandounbaby@gmail.com</p>  
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="top-bar-right">
                            <div class="social">
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-facebook-f"></i></a>
                                <a href=""><i class="fab fa-linkedin-in"></i></a>
                                <a href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top Bar End -->

        <!-- Nav Bar Start -->
        <div class="navbar navbar-expand-lg bg-dark navbar-dark">
            <div class="container-fluid">
                <a href="index.html" class="navbar-brand">Apadrinanos</a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse" style="margin-top: 20px;">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav ml-auto">
                        <a href="index.php" class="nav-item nav-link active">Inicio</a>
                        <a href="about.php" class="nav-item nav-link">Nosotros</a>
                        <a href="causes.php" class="nav-item nav-link">Causas</a>                       
                        <a href="contact.php" class="nav-item nav-link">Contáctanos</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Nav Bar End -->


        <!-- Carousel Start -->
        <div class="carousel">
            <div class="">
                <div class="owl-carousel">
                    <div class="carousel-item">
                        <div class="carousel-img">
                            <img src="img/2.jpeg" alt="Image" style="height: 700px;">
                        </div>
                        <div class="carousel-text">
                            <h1>Involucrate con una mano amiga</h1>
                            <p>
                                Apadriando a un niño podras suplir algunas de sus necesidades basicas y ayudarlos alejarse de las problematicas sociales de su entorno.
                            </p>
                            <div class="carousel-btn">                                
                                <a class="btn btn-custom btn-play" href="https://api.whatsapp.com/send?phone=+573008334903&text=Hola, Mi nombre es Cesar, Gracias por tu interés de comunicarte con nosotros, cada apoyo que recibamos es de inmenso valor para los niños en condiciones de vulnerabilidad, en un momento nos comunicaremos con usted.">Dona Ahora</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-img">
                            <img src="img/1.jpeg" alt="Image"  style="height: 700px;">
                        </div>
                        <div class="carousel-text">
                            <h1>Llevando Sonrisas a Millones</h1>
                            <p>
                                Realizando actividades Deportivas, Recreativas, Culturales, Seguimiento Medico, Acompañamiento Escolar, entre otros.
                            </p>
                            <div class="carousel-btn">                                
                                <a class="btn btn-custom btn-play" href="https://api.whatsapp.com/send?phone=+573008334903&text=Hola, Mi nombre es Cesar, Gracias por tu interés de comunicarte con nosotros, cada apoyo que recibamos es de inmenso valor para los niños en condiciones de vulnerabilidad, en un momento nos comunicaremos con usted.">Dona Ahora</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-img">
                            <img src="img/3.jpeg" alt="Image"  style="height: 700px;">
                        </div>
                        <div class="carousel-text">
                            <h1>Apadrina a un niño</h1>
                            <p>
                                Con tan solo $ 333 pesos diarios o $ 10.000 pesos mensuales podras realizar un aporte muy significativo en sus vidas.
                            </p>
                            <div class="carousel-btn">                                
                                <a class="btn btn-custom btn-play" href="https://api.whatsapp.com/send?phone=+573008334903&text=Hola, Mi nombre es Cesar, Gracias por tu interés de comunicarte con nosotros, cada apoyo que recibamos es de inmenso valor para los niños en condiciones de vulnerabilidad, en un momento nos comunicaremos con usted.">Dona Ahora</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carousel End -->

        <!-- Video Modal Start-->
        <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>        
                        <!-- 16:9 aspect ratio -->
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="" id="video"  allowscriptaccess="always" allow="autoplay"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        <!-- Video Modal End -->
        

        <!-- About Start -->
        <div class="about" style="display: flex; justify-content: center;">
            <div>
                <div class="row align-items-center nosotros" >
                    
                    <div class="col-auto text-center">
                        <div class="section-header text-center">
                            <p>Conozca sobre nosotros</p>
                            <h2>Organización benefica sin animo de lucro</h2>
                        </div>
                       
                            <div class="video">
                                <video controls class="video2">
                                    <source src="img/video.mp4" type="video/mp4">
                                </video>
                            </div>
                        
                        <div class="about-tab mt-5">
                            <ul class="nav nav-pills nav-justified">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="pill" href="#tab-content-1">Nosotros</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="pill" href="#tab-content-2">Misión</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="pill" href="#tab-content-3">Visión</a>
                                </li>
                            </ul>

                            <div class="tab-content">
                                <div id="tab-content-1" class="container tab-pane active" style="text-align:     justify;">
                                    Somos una organización Cristiana que busca ayudar a la niños y jovenes de Colombia de escasos recursos a mejorar las condiciones de vida en la cual se encuentran, supliendo algunas de sus necesidades básicas, complementadas con actividades culturales, deportivas y ministeriales.
                                </div>
                                <div id="tab-content-2" class="container tab-pane fade" style="text-align: justify;">
                                    Formar a los niños y jóvenes que viven en barrios de escasos recursos con principios y valores cristianos, alejarlos de las diferentes problemáticas sociales de su entorno, así como suplir sus necesidades básicas.
                                </div>
                                <div id="tab-content-3" class="container tab-pane fade" style="text-align: justify;">
                                    Que los niños que crecen en barrios de bajos recursos de Colombia conozcan la palabra de Dios desde temprana edad, que no se involucren en actividades delictivas, se integren de manera adecuada a la sociedad, se destaquen en todo lo que hagan y que sus necesidades básicas sean suplidas.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Service Start -->
        <div class="service">
            <div class="container">
                <div class="section-header text-center">
                    <p>LO QUE HACEMOS?</p>
                    <h2>Creemos que podemos salvar mas vidas contigo</h2>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="flaticon-diet"></i>
                            </div>
                            <div class="service-text comida">
                                <h3>Comida Sana</h3>
                                <p>Entregamos meriendas saludables.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="flaticon-water"></i>
                            </div>
                            <div class="service-text">
                                <h3>Agua Pura</h3>
                                <p>Entregamos botellones de agua purificada x 20 Lt.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="flaticon-healthcare"></i>
                            </div>
                            <div class="service-text">
                                <h3>Cuidado de la Salud</h3>
                                <p>Controles Periodicos con personas capacitadas.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="flaticon-education"></i>
                            </div>
                            <div class="service-text educacion">
                                <h3>Educación Primaria</h3>
                                <p>Entregamos Kids Escolares.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="flaticon-home"></i>
                            </div>
                            <div class="service-text">
                                <h3>Reuniones Grupales</h3>
                                <p>Estudio de la Biblia, charlas con psicólogos y sociólogos.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="flaticon-social-care"></i>
                            </div>
                            <div class="service-text">
                                <h3>Cultura y Deporte</h3>
                                <p>Clases de Musica, Practicas Deportiva y Actividades Recreativas</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->
        
        
        <!-- Facts Start -->
         <div class="facts" data-parallax="scroll" data-image-src="img/facts.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="facts-item">
                            <i class="flaticon-home"></i>
                            <div class="facts-text">
                                <h3 class="facts-plus" data-toggle="counter-up">6</h3>
                                <p>Municipios</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="facts-item">
                            <i class="flaticon-charity"></i>
                            <div class="facts-text">
                                <h3 class="facts-plus" data-toggle="counter-up">8</h3>
                                <p>Voluntarios</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="facts-item">
                            <i class="flaticon-kindness"></i>
                            <div class="facts-text">
                                <h3  data-toggle="counter-up">300</h3>
                                <p>Beneficiarios</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="facts-item">
                            <i class="flaticon-donation"></i>
                            <div class="facts-text">
                                <h3  data-toggle="counter-up">500</h3>
                                <p>Meta 2024</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Facts End -->
        
        
        <!-- Causes Start -->
        <div class="causes">
            <div class="container">
                <div class="section-header text-center">
                    <p>Causas Que Destacan</p>
                    <h2>Estas son las Causas en que Generalmente Ayudamos</h2>
                </div>
                <div class="owl-carousel causes-carousel">
                    <div class="causes-item">
                        <div class="causes-img">
                            <img src="img/agua.jpeg" alt="Image" height="300px">
                        </div>
                        <div class="causes-progress">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                                    <span>60%</span>
                                </div>
                            </div>
                            <div class="progress-text">
                                <p><strong>Patrocinios:</strong>300</p>
                                <p><strong>Meta 2024:</strong> 500</p>
                            </div>
                        </div>
                        <div class="causes-text">
                            <h3>Agua Potable</h3>
                            <p style="text-align: justify;">Entregamos un botellon de agua purificada x 20 Lt cada semana a la familia del menor patrocinado.</p>
                        </div>                       
                    </div>

                    <div class="causes-item">
                        <div class="causes-img">
                            <img src="img/comida.jpeg" alt="Image" height="300px">
                        </div>
                        <div class="causes-progress">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                    <span>50%</span>
                                </div>
                            </div>
                            <div class="progress-text">
                                <p><strong>Patrocinios:</strong> $250</p>
                                <p><strong>Meta 2024:</strong> $500</p>
                            </div>
                        </div>
                        <div class="causes-text">
                            <h3>Comida Saludable</h3>
                            <p style="text-align: justify;">Entregamos Meriendas Nutritivas en las diversas Activiadades que realizamos.</p>
                        </div>
                        
                    </div>
                    <div class="causes-item">
                        <div class="causes-img">
                            <img src="img/cultura.jpeg" alt="Image" height="300px">
                        </div>
                        <div class="causes-progress">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">
                                    <span>30%</span>
                                </div>
                            </div>
                            <div class="progress-text">
                                <p><strong>Patrocinios:</strong> $150</p>
                                <p><strong>Meta 2024:</strong> $500</p>
                            </div>
                        </div>
                        <div class="causes-text">
                            <h3>Cultura y Deporte</h3>
                            <p style="text-align: justify;">Enseñamos Musica, Futbol y realizamos diversas actividades Recreativas.</p>
                        </div>
                        
                    </div>
                    <div class="causes-item">
                        <div class="causes-img">
                            <img src="img/educacion.jpeg" alt="Image" height="300px">
                        </div>
                        <div class="causes-progress">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                                    <span>70%</span>
                                </div>
                            </div>
                            <div class="progress-text">
                                <p><strong>Patrocinios:</strong> $350</p>
                                <p><strong>Meta 2024:</strong> $500</p>
                            </div>
                        </div>
                        <div class="causes-text">
                            <h3>Educación Primaria</h3>
                            <p style="text-align: justify;">Entregamos Kids Escolares, para que los ñiños y jovenes tengan las Herramientas basicas para sus estudios.</p>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- Causes End -->
        <!-- Botton Epayco -->
        <div class="text-center">       
            <a href="https://api.whatsapp.com/send?phone=+573008334903&text=Hola, Mi nombre es Cesar, Gracias por tu interés de comunicarte con nosotros, cada apoyo que recibamos es de inmenso valor para los niños en condiciones de vulnerabilidad, en un momento nos comunicaremos con usted." class="btn btn-warning btn-lg text-center fw-bold" style="border-radius: 25px;">Dona Ahora</a>
        </div>
        <!-- Botton Epayco -->
        
        <!-- Donate Start -->
        <div class="donate" >
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="donate-content">
                            <div class="section-header">
                                <p>Patrocina un Niño Ahora</p>
                                <h2>Donemos a Niños y Jovenes para una Vida Mejor</h2>
                            </div>
                            <div class="donate-text">
                                <p style="text-align: justify;">
                                    El aumento de la desigualdad es perjudicial para el crecimiento social y económico, que impulsa la inestabilidad y los conflitos en la humanidad. 
                                </p>
                                <p style="text-align: justify;">Patrocina a un niño desde $333 pesos diarios que dara una contribución mensual de $10.000 Pesos, con esto los estas ayudando  a suplir sus necesidades más apremiantes. Nuestra intension es formar una red amiga de colaboradores, que con sus valiosos aportes contribuyamos a mejorar el entorno social de nuestro pais, influyendo en el desarrollo con principios, valores, buenos habitos, una adecuada alimentacion, controles en salud, entre otros.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="donate-form">
                            <p  style="text-align: justify; margin-top: -50px; font-weight: bold; font-size: 25px;">El que se apiada del pobre presta al SEÑOR, y él lo recompensará por su buena obra. proverbios 19:17</p>
                            <form action="inscripcion.php" method="post" class="d-none">
                                
                                <p class="text-center fw-bold mt-5" style="color: black; font-weight: bold;">INSCRÍBETE PARA SER DONADOR</p>
                                <div class="control-group">
                                    <input type="text" class="form-control" placeholder="Name" name="nombre" id="nombre" required="required" />
                                </div>
                                <div class="control-group">
                                    <input type="email" class="form-control" placeholder="Email" name="correo" id="correo" required="required" />
                                </div>
                                <div class="control-group">
                                    <input type="number" class="form-control" placeholder="Celular" name="celular" id="celular" required="required" />
                                </div>
                                <div class="control-group">
                                    <input type="text" class="form-control" placeholder="Departamento" name="departamento" id="departamento" required="required" />
                                </div>
                                <div class="control-group">
                                    <input type="text" class="form-control" placeholder="Municipio" name="municipio" id="municipio" required="required" />
                                </div>
                                <div class="control-group">
                                    
                                    <select class="form-control"  name="donacion" id="donacion" required="required">
                                        <option style="color: black;">Donación</option>
                                        <option  style="color: black;" value="10000">$10.000</option>
                                        <option  style="color: black;" value="20000">$20.000</option>
                                        <option  style="color: black;" value="30000">$30.000</option>
                                        <option  style="color: black;" value="40000">$50.000</option>
                                        <option  style="color: black;" value="100000">$100.000</option>
                                    </select>
                                </div>
                                
                                <div>
                                    <button class="btn btn-custom" type="submit" >Inscríbete</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Donate End -->
        
        
        <!-- Event Start -->
        
        <!-- Event End -->


        <!-- Team Start -->
        <div class="team">
            <div class="container">
                <div class="section-header text-center">
                    <p>Conozca a nuetro equipo</p>
                    <h2>Personas increibles al sevicio de la niñez y la juventud</h2>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="img/pastor.jpeg" alt="Team Image" height="350">
                            </div>
                            <div class="team-text">
                                <h2>EDUIW THOMAS</h2>
                                <p>Fundador & CEO</p>
                                <div class="team-social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="img/islena.jpeg" alt="Team Image" height="350">
                            </div>
                            <div class="team-text">
                                <h2>ISLENA PLATA</h2>
                                <p>Docente</p>
                                <div class="team-social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="img/angelith.jpeg" alt="Team Image" height="350">
                            </div>
                            <div class="team-text">
                                <h2>ANGELITH MENDAZA</h2>
                                <p>Lider Espiritual</p>
                                <div class="team-social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="img/cesar.jpg" alt="Team Image" height="350">
                            </div>
                            <div class="team-text">
                                <h2>CESAR GALINDO</h2>
                                <p>Lider de Proyecto</p>
                                <div class="team-social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->
        
        
        <!-- Volunteer Start -->
        
        <!-- Volunteer End -->
        
        
        <!-- Testimonial Start -->
        
        <!-- Testimonial End -->
        
        
        <!-- Contact Start -->
        <div class="contact d-none">
            <div class="container">
                <div class="section-header text-center">
                    <p>Contáctanos</p>
                    <h2>Contáctanos para cualquier consulta</h2>
                </div>
                <div class="contact-img">
                    <img src="img/contact.jpg" alt="Image">
                </div>
                <div class="contact-form">
                        
                        <form action="correo.php" method="post">
                            <div class="control-group">
                                <input type="text" class="form-control" id="nombre_correo" name="nombre" placeholder="Nombre completo" required="required" data-validation-required-message="Please enter your name" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="email" class="form-control" id="correo_correo" name="correo" placeholder="Correo Electrónico" required="required" data-validation-required-message="Please enter your email" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="text" class="form-control" id="asunto_correo" name="asunto" placeholder="Asunto" required="required" data-validation-required-message="Please enter a subject" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <textarea class="form-control" id="mensaje_correo" name="mensaje" placeholder="Mensaje" required="required" data-validation-required-message="Please enter your message"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div>
                                <button class="btn btn-custom" type="submit">Enviar Mensaje</button>
                            </div>
                        </form>
                    </div>
            </div>
        </div>
        <!-- Contact End -->
        <!-- Botton Epayco -->
            <div class="text-center">       
                <a href="https://api.whatsapp.com/send?phone=+573008334903&text=Hola, Mi nombre es Cesar, Gracias por tu interés de comunicarte con nosotros, cada apoyo que recibamos es de inmenso valor para los niños en condiciones de vulnerabilidad, en un momento nos comunicaremos con usted." class="btn btn-warning btn-lg text-center fw-bold" style="border-radius: 25px;">Dona  Ahora
                </a>
            </div>
        <!-- Botton Epayco -->
        

        <!-- Blog Start -->
       
        <!-- Blog End -->


        <!-- Footer Start -->
        <div class="footer" style="margin-bottom: -25px;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-contact">
                            <h2>Nuestra Oficina Central</h2>
                            <p><i class="fa fa-map-marker-alt"></i>Calle 6# 8 - 24, Becerril, César</p>
                            <p><i class="fa fa-phone-alt"></i>+57 300 833 4903</p>
                            <p><i class="fa fa-envelope"></i>cegawon@hotmail.com</p>
                            <div class="footer-social">
                                <a class="btn btn-custom" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-custom" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-custom" href=""><i class="fab fa-youtube"></i></a>
                                <a class="btn btn-custom" href=""><i class="fab fa-instagram"></i></a>
                                <a class="btn btn-custom" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-link">
                            <h2>Links</h2>
                            <a href="">Nosotros</a>
                            <a href="">Contáctanos</a>
                            <a href="">Causas</a>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-newsletter">
                            <h2>Boletín informativo</h2>
                            <form action="boletin.php" method="POST">
                                <input class="form-control" id="boletin" name="boletin" placeholder="Correo Eletrónico" required>
                                <button class="btn btn-custom" type="submit">Enviar</button>                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container copyright">
                <div class="row">
                    <div class="col-md-6">
                        <p>&copy; <a href="#">Cegasoft</a>, Todos los derechos reservados.</p>
                    </div>
                    <div class="col-md-6">
                        <p>Diseñado por <a href="https://portafolio-fawn-psi.vercel.app/">Cegasoft</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->
        
        <!-- Back to top button -->
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></a>
        
        <!-- Pre Loader -->
        <div id="loader" class="show">
            <div class="loader"></div>
        </div>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/counterup/counterup.min.js"></script>
        <script src="lib/parallax/parallax.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Contact Javascript File -->
        <script src="mail/jqBootstrapValidation.min.js"></script>
        <script src="mail/contact.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>

        <!-- Toastr -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    </body>
</html>

<script type="text/javascript">  
    
    ////////////////// REGISTRAR /////////////////////// 
      function registrar()
       {           
         location.reload();
         var nombre = document.getElementById("nombre").value
         var correo = document.getElementById("correo").value
         var celular = document.getElementById("celular").value
         var departamento = document.getElementById("departamento").value
         var municipio = document.getElementById("municipio").value
         var donacion = document.getElementById("donacion").value
               
    
        if (nombre == "" || correo  == "" || celular  == "" || departamento  == "" || municipio == "" || donacion  == ""){
           
          return false
          }else {              
                    

          var parametros = 
          {           
            "nombre" : $("#nombre").val(),
            "correo" : $("#correo").val(),
            "celular" : $("#celular").val(),
            "departamento" : $("#departamento").val(),
            "municipio" : $("#municipio").val(),
            "donacion" : $("#donacion").val(),            
            "accion":"1"
          };
    
          $.ajax({
            data: parametros,
            url: 'inscripcion.php',
            type: 'POST',
            
            beforesend: function()
            {
              $('#mostrar_mensaje').html("Mensaje antes de Enviar");
            },
    
            success: function(mensaje)
            {
              $('#mostrar_mensaje').html(mensaje);
              location.reload();
            }
          });
          return false;
        }
      }    
      
      /////////////////// CONTACTANOS ///////////////////////  
    function co()
    {           
         location.reload();
         var nombre = document.getElementById("nombre_correo").value
         var correo = document.getElementById("correo_correo").value
         var asunto = document.getElementById("asunto_correo").value
         var mensaje = document.getElementById("mensaje_correo").value
               
    
        if (nombre == "" || correo  == "" || asunto  == "" || mensaje  == "" ){
           
          return false
          }else {              
                 
          var parametros = 
          {           
            "nombre" : $("#nombre_correo").val(),
            "correo" : $("#correo_correo").val(),
            "asunto" : $("#asunto_correo").val(),
            "mensaje" : $("#mensaje_correo").val(),
            "accion":"1"
          };
    
          $.ajax({
            data: parametros,
            url: 'correo.php',
            type: 'POST',
            
            beforesend: function()
            {
              $('#mostrar_mensaje').html("Mensaje antes de Enviar");
            },
    
            success: function(mensaje)
            {
              $('#mostrar_mensaje').html(mensaje);
              location.reload();
            }
          });
          return false;
        }
    } 
    ///////////////////// BOLETÍN /////////////////////////////////  
    function bo()
    {           
         location.reload();
         var boletin = document.getElementById("boletin").value        
               
    
        if ( boletin == "" ){
           
          return false
          }else {              
                 
          var parametros = 
          {           
            "boletin" : $("#boletin").val(),
            "accion":"1"
          };
    
          $.ajax({
            data: parametros,
            url: 'boletin.php',
            type: 'POST',
            
            beforesend: function()
            {
              $('#mostrar_mensaje').html("Mensaje antes de Enviar");
            },
    
            success: function(mensaje)
            {
              $('#mostrar_mensaje').html(mensaje);
              location.reload();
            }
          });
          return false;
        }
    } 
</script>
