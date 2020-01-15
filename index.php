
<?php   error_reporting(E_ALL ^ E_NOTICE); ?>
<?php   include 'mail.php'; ?>
<!DOCTYPE html>


<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/fontello.css">
    <link href="https://fonts.googleapis.com/css?family=ABeeZee|Bitter|Courgette|Courier+Prime|Kreon|Oxygen|Permanent+Marker&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/scrollreveal"></script> <!-- ScrollReveal <3 -->
    <title>Portfolio Bernay Carlos</title>

  </head>
  <body>
    <!-- HEADER -->
    <header>
      <div class="container">
        <!-- Menu -->
        <div class="nav row align-items-strech justify-content-between">
          <div class="col header">
            <h2>Bernay Carlos</h2>
            <p>Programador <span>Web</span> Jr</p>
          </div>

          <!-- Icons -->
          <nav class="col-md-12 col-lg-auto menu d-flex align-items-stretch flex-wrap flex-sm-nowrap">
            <a href="#about" class="color2 d-flex align-items-center">
              <div class="d-flex flex-column text-center">
                <span>Acerca de</span>
                <i class="icon icon-user"></i>
              </div>
            </a>
            <a href="#proyects" class="color1 d-flex align-items-center">
              <div class="d-flex flex-column text-center">
                <span>Portafolio</span>
                <i class="icon icon-briefcase"></i>
              </div>
            </a>
            <a href="#contact" class="color3 d-flex align-items-center">
              <div class="d-flex flex-column text-center">
                <span>Contacto</span>
                <i class="icon icon-mail"></i>
              </div>
            </a>
          </nav>
        </div>

      </div>
    </header>

    <!-- BODY -->
    <main>
      <div class="container">

        <!-- ABOUT -->
        <div id="about" class="row about align-items-center">
          <div class="col-12 col-4-md about-img"> <!-- Image -->
            <img class="img-fluid rounded-circle" src="img/fotoVieja2.png" alt="Image not found =(">

          </div>
          <div class="col-12 col-8-md about-me"> <!-- Description -->
            <h2 class="title">Un poco sobre mí</h2>
            <p>Soy un Programador Jr (o algo parecido) autodidacta con gran afición por la informática.
              Inicié mi aprendizaje en programación, hace poco mas de 2 años, principalmente debido a la
              intriga de como se lograba crear programas a partir de escribir codigo en una computadora.
               Actualmente me oriento al aprendizaje de diversas tecnologias asociadas al desarrollo web.</p>
            <p></p>
            <p>Suelo actualizar mi apartado en Github con algún que otro proyecto que me resulte interesante.
               Si tenés en mente alguna idea sobre realizar un <span>proyecto o sitio web</span> no dudes en
               contactarme mediante el formulario al final la página</p>
          </div>
            <div class="col-12 mt-4">

              <h4 class="title">Tecnologías</h3>

              <!-- Progress Bars -->
              <div id="sr-icons" class="progress-title d-flex align-items-end">
                <img src="img/html5.png" alt="">
                <span>HTML5</span>
              </div>
              <div id="sr-bars" class="progress">
                <div class="progress-bar progress-bar-striped " role="progressbar" style="width:80%; background-color:orange">80%</div>
              </div>


            <div id="sr-icons" class="progress-title d-flex align-items-end">
              <img src="img/css3.png" alt="">
              <span>CSS3</span>
            </div>
            <div id="sr-bars" class="progress">
              <div class="progress-bar progress-bar-striped " role="progressbar" style="width:80%">80%</div>
            </div>

            <div id="sr-icons" class="progress-title d-flex align-items-end">
              <img src="img/bootstrap.png" alt="">
              <span>Bootstrap (Framework)</span>
            </div>
            <div id="sr-bars" class="progress" >
              <div class="progress-bar progress-bar-striped " role="progressbar" style="width:80%; background-color:rgb(101, 11, 136);" >80%</div>
            </div>

            <div id="sr-icons" class="progress-title d-flex align-items-end">
              <img src="img/java.png" alt="">
              <span>Java</span>
            </div>
            <div id="sr-bars" class="progress">
              <div class="progress-bar bg-danger progress-bar-striped" role="progressbar" style="width:70%">70%</div>
            </div>

            <div id="sr-icons" class="progress-title d-flex align-items-end">
              <img src="img/csharp.png" alt="">
              <span>C#</span>
            </div>
            <div id="sr-bars" class="progress">
              <div class="progress-bar bg-dark progress-bar-striped" role="progressbar" style="width:50%">50%</div>
            </div>

            <div id="sr-icons" class="progress-title d-flex align-items-end">
              <img src="img/mysql.png" alt="">
              <span>MySQL</span>
            </div>
            <div id="sr-bars" class="progress">
              <div class="progress-bar bg-info progress-bar-striped" role="progressbar" style="width:50%">50%</div>
            </div>
          </div>


        </div>
        <!-- GALLERY -->
        <div id="proyects" class="row portfolio mt-4">
          <div class="col-12 gallery-title">
            <h2 class="gallery-title">Proyectos</h2>
          </div>

          <div class="row gallery justify-content-center mb-5">
            <div class="col-12 col-lg-6 container-img">
              <h4 class="img-title">Celulandia</h4>
              <a href="Celulandia/index.html" target=_blank>
                <img class="img-fluid"src="img/celulandia.png" alt="">
              </a>
            </div>

            <div class="col-12 col-lg-6 container-img">
              <h4 class="img-title">CoolCoffee</h4>
              <a href="CoolCoffee/index.html" target=_blank>
                <img class="img-fluid"src="img/coolcoffee.png" alt="">
              </a>
            </div>
          </div>
        </div>



        <!-- CONTACT -->
        <div id="contact" class="row contact mt-4 justify-content-center">
          <div class="col-12 col-lg-8">
            <h2 class="title">Contact</h2>
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" class="formulary" method="post">
              <div class="row form-group">
                <div class="col-12 col-md-6 ">
                  <input class="shadow-sm" type="text" name="name" placeholder="Nombre" value="<?php if(!$correct && isset($name)) echo $name;?>">
                </div>
                <div class="col-12 col-md-6">
                  <input class="shadow-sm" type="email" name="email" placeholder="Correo electrónico" value="<?php if(!$correct && isset($email)) echo $email; ?>">
                </div>
                <div class="col-12">
                  <textarea class="shadow-sm" name="message" placeholder="Mensaje"><?php if(!$correct && isset($message)) echo $message; ?></textarea>
                </div>
              </div>

              <!-- PHP start -->

              <?php
               if(!empty($error)):
                  ?>
                <div class="error">
                  <?php echo $error; ?>
                </div>
              <?php elseif($correct): ?>
                <div class="success">
                  <p>El mensaje fue enviado con exito.</p>
                </div>
              <?php endif; ?>



              <!-- PHP end -->

              <div class="col-12 text-center mt-3">
                <input type="submit" name="submit" value="Enviar">

              </div>
            </form>

          </div>
        </div>
      </div>
    </main>

        <!-- FOOTER -->
    <footer>
        <div class="container mt-4">
          <div class="row footer justify-content-center">
            <div class="col-auto">
              <a href="https://www.facebook.com/charly.bernay" target="_blank" class="icon facebook icon-facebook"></a>
            </div>
            <div class="col-auto">
              <a href="https://github.com/Charly001/Webs" target="_blank" class="icon github icon-github-circled-alt2"></a>
            </div>
            <div class="col-auto">
              <a href="https://www.linkedin.com/in/carlos-bernay-7b5743160/" target="_blank" class="icon linkedin icon-linkedin"></a>
            </div>
          </div>
        </div>
    </footer>


    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>


    <script>
      ScrollReveal().reveal('#sr-bars', {delay:1000,
                                        distance:'400px',
                                        origin:'left',
                                        duration:1500,
                                        interval:700,
                                        });
      ScrollReveal().reveal('#sr-icons', {delay:1800,
                                          interval:700,
                                          duration:1400
                                         });
    </script>
    <script>
    //Saving current scroll position
      window.onload=function(){
        var pos=window.name || 0;
        window.scrollTo(0,pos);
      }
      window.onunload=function(){
        window.name=self.pageYOffset || (document.documentElement.scrollTop+document.body.scrollTop);
      }
    </script>
  </body>
  </html>
