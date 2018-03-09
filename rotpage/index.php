<?php

  $variable = $_GET['var'];
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Victor Caceres">
  <title>ROT PAGE</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/animate.min.css" rel="stylesheet"> 
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link href="css/lightbox.css" rel="stylesheet">
  <link href="css/main.css" rel="stylesheet">
  <link id="css-preset" href="<?php echo $variable ?>" rel="stylesheet">
  <link href="css/responsive.css" rel="stylesheet">
  
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
  <link rel="shortcut icon" href="images/favicon.ico">
</head>

<body>

  <!--.preloader-->
  <div class="preloader"> <i class="fa fa-circle-o-notch fa-spin"></i></div>
  <!--/.preloader-->

  <header id="home">
    <div id="home-slider" class="carousel slide carousel-fade" data-ride="carousel">
      <div class="carousel-inner">
        <div class="item active" style="background-image: url(images/slider/1.png)">
          <div class="caption">
            <h1 class="animated fadeInLeftBig">Bienvenido a <span>ROTPAGE</span></h1>
            <p class="animated fadeInRightBig">Si lo imaginas, lo programamos y lo llevamos a la realidad</p>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="#services">Inicia</a>
          </div>
        </div>
        <div class="item" style="background-image: url(images/slider/2.png)">
          <div class="caption">
            <h1 class="animated fadeInLeftBig">Dile Hola a <span>ROTPAGE</span></h1>
            <p class="animated fadeInRightBig">Que nadie detenga tu idea. Desarróllala!</p>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="#services">Inicia</a>
          </div>
        </div>
        <div class="item" style="background-image: url(images/slider/3.png)">
          <div class="caption">
            <h1 class="animated fadeInLeftBig">La Mejor <span>Tecnologia</span></h1>
            <p class="animated fadeInRightBig">Bootstrap - Responsive Design - Retina Ready - Parallax</p>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="#services">Inicia</a>
          </div>
        </div>
      </div>
      <a class="left-control" href="#home-slider" data-slide="prev"><i class="fa fa-angle-left"></i></a>
      <a class="right-control" href="#home-slider" data-slide="next"><i class="fa fa-angle-right"></i></a>

      <a id="tohash" href="#services"><i class="fa fa-angle-down"></i></a>

    </div><!--/#home-slider-->
    <div class="main-nav">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
                             
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">                 
            <li class="scroll"><a href="#home">Inicio</a></li>
            <li class="scroll"><a href="#services">Servicios</a></li> 
            <li class="scroll"><a href="#about-us">Sobre Mí</a></li>                     
            <li class="scroll"><a href="#portfolio">Portafolio</a></li>
            <li class="scroll"><a href="#contact">Contáctame</a></li>       
          </ul>
        </div>
      </div>
    </div><!--/#main-nav-->
  </header><!--/#home-->
  <section id="services">
    <div class="container">
      <div class="heading wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
        <div class="row">
          <div class="text-center col-sm-8 col-sm-offset-2">
            <h2>Mis servicios</h2>
            <p>Estos son algunos servicios  que ofrezco. Si necesitas un sitio web altamente responsivo, amigable y poderoso, estas en el lugar correcto, yo puedo hacer cualquier trabajo al mejor costo que podrás conseguir. Sigue navegando esta web y velo por ti mismo</p>
          </div>
        </div> 
      </div>
      <div class="text-center our-services">
        <div class="row">
          <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="service-icon">
              <i class="fa fa-flask"></i>
            </div>
            <div class="service-info">
              <h3>Identidad de Marca</h3>
              <p>Nunca dejes tu idea a un lado, en el siglo de la tecnología debes dejar tu huella y contar con la mejor marca que todos quieran adquirir. Yo lo hago posible!</p>
            </div>
          </div>
          <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="450ms">
            <div class="service-icon">
              <i class="fa fa-umbrella"></i>
            </div>
            <div class="service-info">
              <h3>Idea Creativa</h3>
              <p>Te ofrezco las mejores ideas y las más competitivas del mercado, tu programa o tu sitio web jamás se podrá comparar</p>
            </div>
          </div>
          <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="550ms">
            <div class="service-icon">
              <i class="fa fa-cloud"></i>
            </div>
            <div class="service-info">
              <h3>Soporte Asombroso</h3>
              <p>El soporte que te brindare será tan magnifico, que no lo podrás creer, tu aplicación siempre estará optimizada pase el tiempo que pase</p>
            </div>
          </div>
          <div class="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="650ms">
            <div class="service-icon">
              <i class="fa fa-coffee"></i>
            </div>
            <div class="service-info">
              <h3>Diseño Profesional</h3>
              <p>Te ofrezco el diseño más impecable y profesional que podrás encontrar. Si tienes una idea la representaremos y la haremos realidad!</p>
            </div>
          </div>
          <div class="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="750ms">
            <div class="service-icon">
              <i class="fa fa-bitbucket"></i>
            </div>
            <div class="service-info">
              <h3>Desarrollo de Aplicaciones</h3>
              <p>Uso las mejores tecnologías al momento de desarrollar todo tipo de aplicación, nunca te arrepentirás de lo que veras</p>
            </div>
          </div>
          <div class="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="850ms">
            <div class="service-icon">
              <i class="fa fa-gift"></i>
            </div>
            <div class="service-info">
              <h3>Código Limpio</h3>
              <p>Al momento de programar siempre pienso en los detalles, la aplicación será tan poderosa, como amigable</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><!--/#services-->
  <section id="about-us" class="parallax">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <div class="about-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
            <h2>Sobre Mí</h2>
            <p>Soy freelancer en tecnologías de desarrollo backend, especializado en el lenguaje de programación PHP y desarrollador de aplicaciones en diferentes lenguajes y frameworks que son: java, javascript, python, c ++, laravel, php yii, nodejs y django. También soy un constructor de base de datos, como mysql, sqlserver y postgresql, capaz de generar un software muy potente que cumple con todos los métodos de integridad y seguridad de la información. </p>
            <p>Poseo conocimiento criptográfico, capaz de encriptar cualquier información usando los algoritmos HASH más fuertes para una protección efectiva.</p>
			<p>Como desarrollador integral, puedo crear una solución completa para cualquier problema complejo. También tengo conocimiento frontend en HTML5, CSS3 y JavaScript, para la construcción de páginas web completas.</p>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="our-skills wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
              <p class="lead">Experiencia de Usuarios</p>
              <div class="progress">
                <div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar"  aria-valuetransitiongoal="95">95%</div>
              </div>
            </div>
            <div class="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="400ms">
              <p class="lead">Diseño Web</p>
              <div class="progress">
                <div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar"  aria-valuetransitiongoal="80">80%</div>
              </div>
            </div>
            <div class="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="500ms">
              <p class="lead">Programación</p>
              <div class="progress">
                <div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar"  aria-valuetransitiongoal="70">70%</div>
              </div>
            </div>
            <div class="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
              <p class="lead">Funcionalidad</p>
              <div class="progress">
                <div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar"  aria-valuetransitiongoal="85">85%</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><!--/#about-us-->

  <section id="portfolio">
    <div class="container">
      <div class="row">
        <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
          <h2>Mi Portafolio </h2>
          <p>Observa mis trabajos más recientes, diseñados con la mejor tecnología web, altamente responsivos, en Rot Page te ofrecemos infinidad de opciones, que estas esperando y observa los trabajo, no te arrepentirás de lo que veras.</p>
        </div>
      </div> 
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3">
          <div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="folio-image">
              <img class="img-responsive" src="images/portfolio/1.png" alt="">
            </div>
            <div class="overlay">
              <div class="overlay-content">
                <div class="overlay-text">
                  <div class="folio-info">
                    <h3>SERCOM UNEFA</h3>
                    <p>Proyecto institucional contruido con HTML5 y PHP</p>
                  </div>
                  <div class="folio-overview">
                    <span class="folio-expand"><a href="images/portfolio/e24c3c.png" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="folio-item wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="400ms">
            <div class="folio-image">
              <img class="img-responsive" src="images/portfolio/2.png" alt="">
            </div>
            <div class="overlay">
              <div class="overlay-content">
                <div class="overlay-text">
                  <div class="folio-info">
                    <h3>Despertar Juvenil Ayacucho</h3>
                    <p>Página para pequeño consejo comunal de municipio Sucre</p>
                  </div>
                  <div class="folio-overview">
                    <span class="folio-expand"><a href="images/portfolio/b88d6b.png" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="500ms">
            <div class="folio-image">
              <img class="img-responsive" src="images/portfolio/3.png" alt="">
            </div>
            <div class="overlay">
              <div class="overlay-content">
                <div class="overlay-text">
                  <div class="folio-info">
                    <h3>Yascake´s</h3>
                    <p>Sitio Web responsivo de comercialización de postres</p>
                  </div>
                  <div class="folio-overview">
                    <span class="folio-expand"><a href="images/portfolio/28a798.png" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="folio-item wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="600ms">
            <div class="folio-image">
              <img class="img-responsive" src="images/portfolio/4.png" alt="">
            </div>
            <div class="overlay">
              <div class="overlay-content">
                <div class="overlay-text">
                  <div class="folio-info">
                    <h3>Criptografía</h3>
                    <p>Proyecto institucional referente a la historia de la criptografía</p>
                  </div>
                  <div class="folio-overview">
                    <span class="folio-expand"><a href="images/portfolio/001728.png" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="portfolio-single-wrap">
      <div id="portfolio-single">
      </div>
    </div><!-- /#portfolio-single-wrap -->
  </section><!--/#portfolio-->


  <section id="contact">
    <div id="google-map" class="wow fadeIn" data-latitude="10.4789177" data-longitude="-66.7986507" data-wow-duration="1000ms" data-wow-delay="400ms"></div>
    <div id="contact-us" class="parallax">
      <div class="container">
        <div class="row">
          <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
            <h2>Contáctame</h2>
            <p>¿Necesitas el mejor servicio que te han podido ofrecer? Pues no esperes más y contáctame te brindare la mejor solución al mejor precio.</p>
          </div>
        </div>
        <div class="contact-form wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
          <div class="row">
            <div class="col-sm-6">
              <form action=" method="POST" enctype="multipart/form-data" class="form">
                <div class="row  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <input type="text" name="name" class="form-control" placeholder="Nombre" required="required">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <input type="email" name="email" class="form-control" placeholder="Correo Electronico" required="required">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <input type="text" name="subject" class="form-control" placeholder="Asunto" required="required">
                </div>
                <div class="form-group">
                  <textarea name="message" id="message" class="form-control" rows="4" placeholder="Ingresa tu Mensaje" required="required"></textarea>
                </div>  
              <center>                      
                <div class="form-group loading">
                  <button type="submit" class="btn-submit">Enviar Mensaje</button>
                </div>
              </center>
              </form>
              <div class="mostrar"></div>
            </div>
            <div class="col-sm-6">
              <div class="contact-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                <ul class="address">
                  <li><i class="fa fa-map-marker"></i> <span> Dirección:</span> Palo Verde, Caracas, Venezuela </li>
                  <li><i class="fa fa-phone"></i> <span> Teléfono:</span> +58 424 1279301  </li>
                  <li><i class="fa fa-envelope"></i> <span> Email:</span><a href="mailto:caceres.vc95@gmail.com"> caceres.vc95@gmail.com</a></li>
                  <li><i class="fa fa-globe"></i> <span> Website:</span> <a href="https://rotx.000webhostapp.com/">rotx.000webhostapp.com</a></li>
                </ul>
              </div>                            
            </div>
          </div>
        </div>
      </div>
    </div>        
  </section><!--/#contact-->
  
  <footer id="footer">
    <div class="footer-top wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
      <div class="container text-center">
        <div class="social-icons">
          <ul>
            <li><a class="envelope" href="mailto:caceres.vc95@gmail.com"><i class="fa fa-envelope"></i></a></li>
			<li><a class="github" href="https://github.com/rotcax"><i class="fa fa-github"></i></a></li>
            <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
            <li><a class="stack-overflow" href="https://stackexchange.com/users/12859786/victor-caceres"><i class="fa fa-stack-overflow"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <p>&copy; 2018 Awesome Design.</p>
          </div>
          <div class="col-sm-6">
            <p class="pull-right">Diseñado por <a href="https://www.freelancer.es/u/rotcax">Victor Caceres</a></p>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <script src="js/jquery-3.2.1.min.js"></script>
  <script src="js/sweetalert.js"></script>

  <script>
    $(function(){
    $('.form').submit(function(){
      $('.loading').html("<img src='images/lightbox/loading.gif'>");
      $.ajax({
        url: 'sendemail.php',
        type: 'POST',
        data: $('.form').serialize(),
        success: function(data){
          $('.mostrar').html(data);
          $('.loading').hide();
          $('.form')[0].reset();
        }
      });
      return false;
    });
  });
  </script>

  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyB_ACUc90z67ChaKGeXvBZzB9tMkJyxRGg"></script>
  <script type="text/javascript" src="js/jquery.inview.min.js"></script>
  <script type="text/javascript" src="js/wow.min.js"></script>
  <script type="text/javascript" src="js/mousescroll.js"></script>
  <script type="text/javascript" src="js/smoothscroll.js"></script>
  <script type="text/javascript" src="js/jquery.countTo.js"></script>
  <script type="text/javascript" src="js/lightbox.min.js"></script>
  <script type="text/javascript" src="js/main.js"></script>

</body>
</html>