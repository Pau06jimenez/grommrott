
<?php

   session_start();
   if (!isset($_SESSION['usuario']) > 0) {
    echo'
    <script>
       alert("Por favor debes iniciar sesion");
       window.location = "./login-register.php";
    </script>
    ';
    session_destroy();
    die();
    
   }
  
   


?>

<!DOCTYPE html>
<html style="font-size: 16px;" lang="es"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Dog Sch​ool, About Us, #02, #01, #04, #03, Full Service,Low CostVet Clinic, Dog Sch​ool, True Friend, ​Sign up for your first consultation">
    <meta name="description" content="">
    <title>Casa</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Casa.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 5.11.4, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700">
    
    
    
    
    
    
    
    <script type="application/ld+json">{
		"@context": "Casa.html",
		"@type": "Organization",
		"name": "",
		"logo": "images/logo.jpg",
		"sameAs": [
				"https://www.facebook.com/people/Estetica-Canina-Y-Felina-Grommrott/100063404360548/?locale=es_LA",
				"https://www.instagram.com/centroveterinariogrommrott/"
		]
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Casa">
    <meta property="og:type" content="website">
  <meta data-intl-tel-input-cdn-path="intlTelInput/"></head>
  <body class="u-body u-xl-mode" data-lang="es"><header class=" u-clearfix u-header u-section-row-container" id="sec-bced"><div class="u-section-rows">
        <div class="u-align-center-xs u-section-row u-section-row-1" id="sec-71fa">
          <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
            <a href="index.php" class="u-image u-logo u-image-1" data-image-width="470" data-image-height="141" title="Casa">
              <img src="images/logo.jpg" class="u-logo-image u-logo-image-1" data-image-width="80">
            </a>
            <div class="u-social-icons u-spacing-17 u-social-icons-1">
              <a class="u-social-url" title="facebook" target="_blank" href="https://www.facebook.com/people/Estetica-Canina-Y-Felina-Grommrott/100063404360548/?locale=es_LA"><span class="u-icon u-social-facebook u-social-icon u-text-palette-1-light-2"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" ><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-df39"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-df39"><circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle><path fill="#FFFFFF" d="M73.5,31.6h-9.1c-1.4,0-3.6,0.8-3.6,3.9v8.5h12.6L72,58.3H60.8v40.8H43.9V58.3h-8V43.9h8v-9.2
            c0-6.7,3.1-17,17-17h12.5v13.9H73.5z"></path></svg></span>
              </a>
              <a class="u-social-url" title="instagram" target="_blank" href="https://www.instagram.com/centroveterinariogrommrott/"><span class="u-icon u-social-icon u-social-instagram u-text-palette-1-light-2"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" ><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-ab01"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-ab01"><circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle><path fill="#FFFFFF" d="M55.9,38.2c-9.9,0-17.9,8-17.9,17.9C38,66,46,74,55.9,74c9.9,0,17.9-8,17.9-17.9C73.8,46.2,65.8,38.2,55.9,38.2
            z M55.9,66.4c-5.7,0-10.3-4.6-10.3-10.3c-0.1-5.7,4.6-10.3,10.3-10.3c5.7,0,10.3,4.6,10.3,10.3C66.2,61.8,61.6,66.4,55.9,66.4z"></path><path fill="#FFFFFF" d="M74.3,33.5c-2.3,0-4.2,1.9-4.2,4.2s1.9,4.2,4.2,4.2s4.2-1.9,4.2-4.2S76.6,33.5,74.3,33.5z"></path><path fill="#FFFFFF" d="M73.1,21.3H38.6c-9.7,0-17.5,7.9-17.5,17.5v34.5c0,9.7,7.9,17.6,17.5,17.6h34.5c9.7,0,17.5-7.9,17.5-17.5V38.8
            C90.6,29.1,82.7,21.3,73.1,21.3z M83,73.3c0,5.5-4.5,9.9-9.9,9.9H38.6c-5.5,0-9.9-4.5-9.9-9.9V38.8c0-5.5,4.5-9.9,9.9-9.9h34.5
            c5.5,0,9.9,4.5,9.9,9.9V73.3z"></path></svg></span>
              </a>
            </div>
          </div>
          
          
          
          
          
        </div>
        <div class="u-palette-1-light-3 u-section-row u-section-row-2" id="sec-13b1">
          <div class="u-clearfix u-sheet u-sheet-2">
            <nav class="u-menu u-menu-one-level u-offcanvas u-menu-1">
              <div class="menu-collapse" style="text-transform: uppercase; font-weight: 700; font-size: 1.125rem;">
                <a class="u-button-style u-custom-text-active-color u-custom-text-hover-color u-custom-text-shadow u-file-icon u-nav-link u-file-icon-1" href="#">
                  <img src="images/4254068.png" alt="">
                </a>
              </div>
              <div class="u-custom-menu u-nav-container">
                <ul class="u-nav u-spacing-10 u-unstyled u-nav-1">
                </li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-light-1 u-text-hover-palette-1-light-2" href="./citas.php" style="padding: 10px 26px;">Agendar</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-light-1 u-text-hover-palette-1-light-2" href="./login-register.php" style="padding: 10px 26px;">login</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-light-1 u-text-hover-palette-1-light-2" href="./update_delete.php" style="padding: 10px 26px;">Actualizar</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-light-1 u-text-hover-palette-1-light-2" href="./datos.php" style="padding: 10px 26px;">Consultar</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-light-1 u-text-hover-palette-1-light-2" href="/C_V_G/controller-login-register/cerrar_sesion.php" style="padding: 10px 26px;">Cerrar Sesion</a>
</li></ul>
              </div>
              <div class="u-custom-menu u-nav-container-collapse">
                <div class="u-container-style u-inner-container-layout u-opacity u-opacity-95 u-palette-1-light-2 u-sidenav">
                  <div class="u-inner-container-layout u-sidenav-overflow">
                    <div class="u-menu-close"></div>
                    <ul class="u-align-center u-custom-font u-font-oswald u-nav u-popupmenu-items u-text-active-white u-text-grey-90 u-text-hover-palette-1-dark-1 u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="index.html">nosotros</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="./citas.php">Cita</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="./login-register.php">login</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="/C_V_G/controller-login-register/cerrar_sesion.php">Cerrar Sesion</a>
</li></ul>
                  </div>
                </div>
                <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
              </div>
            </nav>
          </div>
          
    <section class="u-align-center u-clearfix u-section-1" id="carousel_86dc">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <div class="u-align-right u-container-style u-expanded-width u-group u-palette-1-light-2 u-group-1">
          <div class="u-container-layout u-container-layout-1">
            <h1 class="u-align-left u-text u-text-body-alt-color u-text-1">¿Quiénes Somos?</h1>
          </div>
        </div>
        <h5 class="u-align-left u-text u-text-body-color u-text-2"> El Centro Veterinario Grommrott​ busca el bienestar de tu mascota.&nbsp;Somos una clínica veterinaria con atención las 24 horas y los 7 días de la semana.<br>
          <br>En nuestra clínica, creemos que la medicina preventiva es fundamental para prolongar la vida y la salud de tu mascota, por lo que nos enfocamos en el asesoramiento y equipos de alta tecnología para que tus mascotas tengan una vida saludable y más duradera.
        </h5>
        <div class="u-image u-image-circle u-image-1" alt="" data-image-width="1000" data-image-height="1500"></div>
      </div>
    </section>
    <section class="u-align-riaght u-clearfix u-palette-1-light-2 u-section-2" id="sec-db03">
      <div class="u-clearfix u-sheet u-valign-middle-xs u-sheet-1">
        <h2 class="u-align-center u-custom-font u-font-oswald u-text u-text-default u-text-white u-text-1"> Nuestra misión es la salud y bienestar de tus mascotas.</h2>
        <h4 class="u-align-center u-text u-text-default u-text-white u-text-2"> Hacemos que esto sea posible brindándoles un servicio de clínica veterinaria integral y de excelente calidad.</h4>
      </div>
    </section>
    <section class="u-align-center u-clearfix u-valign-middle u-white u-section-3" id="sec-ff16">
    <div id="carousel-5989" data-interval="5000" data-u-ride="carousel" class="u-carousel u-slider u-slider-1">
        <ol class="u-absolute-hcenter u-carousel-indicators u-carousel-indicators-1">
          <li data-u-target="#carousel-5989" class="u-active u-grey-30 u-shape-circle" data-u-slide-to="0" style="width: 10px; height: 10px;"></li>
          <li data-u-target="#carousel-5989" class="u-grey-30 u-shape-circle" data-u-slide-to="1" style="width: 10px; height: 10px;"></li>
          <li data-u-target="#carousel-5989" class="u-grey-30 u-shape-circle" data-u-slide-to="2" style="width: 10px; height: 10px;"></li>
        </ol>
        <div class="u-carousel-inner" role="listbox">
          <div class="u-active u-align-center u-carousel-item u-container-style u-palette-1-light-3 u-slide u-carousel-item-1">
            <div class="u-container-layout u-container-layout-1">
              <h4 class="u-text u-text-default u-text-1"> ¿Veterinaria 24 horas?<br>
              </h4>
              <img alt="" class="u-image u-image-default u-image-1" data-image-width="678" data-image-height="371" src="images/POL.jpeg">
              <p class="u-large-text u-text u-text-variant u-text-2"> Nuestras puertas están abiertas 24 horas. A la mañana, tarde y noche.</p>
            </div>
          </div>
          <div class="u-align-center u-carousel-item u-container-style u-palette-1-light-3 u-slide u-carousel-item-2">
            <div class="u-container-layout u-container-layout-2">
              <h4 class="u-text u-text-default u-text-3"> Citas sin complicaciones&nbsp;<br>
              </h4>
              <img alt="" class="u-image u-image-contain u-image-default u-image-2" data-image-width="800" data-image-height="533" src="images/car1.jpg">
              <p class="u-large-text u-text u-text-variant u-text-4"> Somos el lugar ideal para atención de urgencias y servicios integrales.</p>
            </div>
          </div>
          <div class="u-carousel-item u-container-style u-palette-1-light-3 u-slide u-carousel-item-3">
            <div class="u-container-layout u-container-layout-3">
              <h4 class="u-text u-text-default u-text-5"> Veterinarios especializados<br>
              </h4>
              <img alt="" class="u-image u-image-default u-image-3" data-image-width="1170" data-image-height="740" src="images/NUTRICION...jpg">
              <p class="u-large-text u-text u-text-variant u-text-6"> Contamos con un completo equipo de veterinarios especializados para brindar cuidados de primera para tus mascotas.</p>
            </div>
          </div>
        </div>
        <a class="u-absolute-vcenter u-carousel-control u-carousel-control-prev u-grey-70 u-hidden-xs u-icon-circle u-spacing-10 u-carousel-control-1" href="#carousel-5989" role="button" data-u-slide="prev">
          <span aria-hidden="true">
            <svg viewBox="0 0 451.847 451.847"><path d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0
c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744
c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z"></path></svg>
          </span>
          <span class="sr-only">
            <svg viewBox="0 0 451.847 451.847"><path d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0
c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744
c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z"></path></svg>
          </span>
        </a>
        <a class="u-absolute-vcenter u-carousel-control u-carousel-control-next u-grey-70 u-hidden-xs u-icon-circle u-spacing-10 u-carousel-control-2" href="#carousel-5989" role="button" data-u-slide="next">
          <span aria-hidden="true">
            <svg viewBox="0 0 451.846 451.847"><path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"></path></svg>
          </span>
          <span class="sr-only">
            <svg viewBox="0 0 451.846 451.847"><path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"></path></svg>
          </span>
        </a>
      </div>
      <style data-mode="XXL">@media (max-width: 0px) {
   .u-section-3 {
    background-image: none;
  }
  .u-block-895b-2 {
    min-height: 579px;
  }
  .u-section-3 .u-slider-1 {
    min-height: 480px;
    width: 763px;
    margin-top: 50px;
    margin-bottom: 50px;
    margin-left: auto;
    margin-right: auto;
  }
  .u-section-3 .u-carousel-indicators-1 {
    position: absolute;
    bottom: 10px;
    width: auto;
    height: auto;
  }
  .u-section-3 .u-container-layout-1 {
    padding-top: 30px;
    padding-bottom: 30px;
    padding-left: 80px;
    padding-right: 80px;
  }
  .u-section-3 .u-image-1 {
    width: 83px;
    height: 83px;
    background-image: url("data:image/svg+xml;base64,PHN2ZyB2ZXJzaW9uPSIxLjEiIGlkPSJtYW4iIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeD0iMHB4IiB5PSIwcHgiIHZpZXdCb3g9IjAgMCAyNTYgMjU2IiBzdHlsZT0id2lkdGg6IDI1NnB4OyBoZWlnaHQ6IDI1NnB4OyI+CjxyZWN0IGZpbGw9IiNDNkQ4RTEiIHdpZHRoPSIyNTYiIGhlaWdodD0iMjU2Ii8+CjxwYXRoIGZpbGw9IiM3Rjk2QTYiIGQ9Ik0xNzIuNiw5My40YzExLjYtNDQuNy0xMS4yLTQ4LjYtMTEuNy00OC4xYy0yMi40LTMxLjMtOTAuMy0xNi44LTc3LjQsNDguMWMtMTMuMy0yLjQtMS44LDMxLjYsMy43LDMyLjEKCWMwLDAsMCwwLDAsMGMwLjIsMCwwLjMsMCwwLjUtMC4xYzE0LjQsNDkuNyw2Mi43LDUwLjIsODAuNywwQzE3Mi4zLDEyNy4zLDE4Ni41LDkzLjMsMTcyLjYsOTMuNHoiLz4KPHBhdGggZmlsbD0iIzdGOTZBNiIgZD0iTTIwNS40LDE3Ny45Yy0yNC02LjEtNDMuNS0xOS44LTQzLjUtMTkuOGwtMjAuNiw2NC44bC04LTIyLjhjMTkuNy0yNy41LTMwLjMtMjcuNS0xMC42LDBsLTgsMjIuOEw5NCwxNTguMQoJYzAsMC0xOS41LDEzLjctNDMuNSwxOS44QzMyLjcsMTgyLjUsMzAsMjU2LDMwLDI1NmgxOTZDMjI2LDI1NiwyMjMuMywxODIuNSwyMDUuNCwxNzcuOXoiLz4KPC9zdmc+Cg==");
    background-position: 50% 50%;
    margin-top: 0;
    margin-bottom: 0;
    margin-left: auto;
    margin-right: auto;
  }
  .u-section-3 .u-text-2 {
    margin-top: 20px;
    margin-left: 0;
    margin-right: 0;
    margin-bottom: 0;
    font-size: 1.25rem;
  }
  .u-section-3 .u-text-1 {
    font-weight: 700;
    margin-top: 35px;
    margin-left: auto;
    margin-right: auto;
    margin-bottom: 0;
  }
  .u-block-895b-17 {
    font-size: 1rem;
    font-weight: 400;
    margin-top: 15px;
    margin-left: auto;
    margin-right: auto;
    margin-bottom: 0;
  }
  .u-section-3 .u-container-layout-2 {
    padding-top: 30px;
    padding-bottom: 30px;
    padding-left: 80px;
    padding-right: 80px;
  }
  .u-section-3 .u-image-2 {
    width: 83px;
    height: 83px;
    background-image: url("data:image/svg+xml;base64,PHN2ZyB2ZXJzaW9uPSIxLjEiIGlkPSJtYW4iIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeD0iMHB4IiB5PSIwcHgiIHZpZXdCb3g9IjAgMCAyNTYgMjU2IiBzdHlsZT0id2lkdGg6IDI1NnB4OyBoZWlnaHQ6IDI1NnB4OyI+CjxyZWN0IGZpbGw9IiNDNkQ4RTEiIHdpZHRoPSIyNTYiIGhlaWdodD0iMjU2Ii8+CjxwYXRoIGZpbGw9IiM3Rjk2QTYiIGQ9Ik0xNzIuNiw5My40YzExLjYtNDQuNy0xMS4yLTQ4LjYtMTEuNy00OC4xYy0yMi40LTMxLjMtOTAuMy0xNi44LTc3LjQsNDguMWMtMTMuMy0yLjQtMS44LDMxLjYsMy43LDMyLjEKCWMwLDAsMCwwLDAsMGMwLjIsMCwwLjMsMCwwLjUtMC4xYzE0LjQsNDkuNyw2Mi43LDUwLjIsODAuNywwQzE3Mi4zLDEyNy4zLDE4Ni41LDkzLjMsMTcyLjYsOTMuNHoiLz4KPHBhdGggZmlsbD0iIzdGOTZBNiIgZD0iTTIwNS40LDE3Ny45Yy0yNC02LjEtNDMuNS0xOS44LTQzLjUtMTkuOGwtMjAuNiw2NC44bC04LTIyLjhjMTkuNy0yNy41LTMwLjMtMjcuNS0xMC42LDBsLTgsMjIuOEw5NCwxNTguMQoJYzAsMC0xOS41LDEzLjctNDMuNSwxOS44QzMyLjcsMTgyLjUsMzAsMjU2LDMwLDI1NmgxOTZDMjI2LDI1NiwyMjMuMywxODIuNSwyMDUuNCwxNzcuOXoiLz4KPC9zdmc+Cg==");
    background-position: 50% 50%;
    margin-top: 0;
    margin-bottom: 0;
    margin-left: auto;
    margin-right: auto;
  }
  .u-section-3 .u-text-4 {
    margin-top: 20px;
    margin-left: 0;
    margin-right: 0;
    margin-bottom: 0;
    font-size: 1.25rem;
  }
  .u-section-3 .u-text-3 {
    font-weight: 700;
    margin-top: 35px;
    margin-left: auto;
    margin-right: auto;
    margin-bottom: 0;
  }
  .u-section-3 .u-carousel-item-3 {
    font-size: 1rem;
    font-weight: 400;
    margin-top: 15px;
    margin-left: auto;
    margin-right: auto;
    margin-bottom: 0;
  }
  .u-section-3 .u-carousel-control-1 {
    width: 43px;
    height: 43px;
    background-image: none;
  }
  .u-section-3 .u-carousel-control-2 {
    width: 43px;
    height: 43px;
    background-image: none;
    left: auto;
    position: absolute;
    right: 0;
  }
}</style>
    </section>
    <section class="u-align-center u-clearfix u-palette-1-light-2 u-section-4" id="carousel_1f8d">
      <div class="u-clearfix u-sheet u-valign-middle-md u-valign-middle-sm u-valign-middle-xs u-sheet-1">
        <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-container-style u-layout-cell u-left-cell u-size-30 u-layout-cell-1">
                <div class="u-container-layout u-valign-middle u-container-layout-1">
                  <h2 class="u-text u-text-body-alt-color u-text-1">En grommrot</h2>
                  <p class="u-text u-text-body-alt-color u-text-3"> Ofrecemos una amplia gama de servicios, manejamos alta tecnología para garantizar la mejor atención a tus mascotas. Contamos con un servicio veterinario de urgencias 24 horas para estar disponibles cuando más nos necesitas.&nbsp;<br>También ofrecemos hospitalización para casos más graves que requieren atención especializada y prolongada. Profilaxis para prevenir enfermedades y mantener la salud de tu mascota en óptimas condiciones, entre otros.<br> &nbsp;En nuestra clinica, creemos que la medicina preventiva es fundamental para prolongar la vida y la salud de tu mascota, por lo que nos enfocamos en la educación y asesoramiento para que tus mascotas tengan una vida saludable y feliz.<br>
                    <br>
                  </p>
                </div>
              </div>
              <div class="u-align-center u-container-style u-layout-cell u-right-cell u-size-26 u-layout-cell-2">
                <div class="u-container-layout u-valign-middle-lg u-valign-middle-md u-valign-middle-xl u-valign-top-sm u-valign-top-xs u-container-layout-2">
                  <div alt="" class="u-image u-image-circle u-image-1"></div>
                  <div class="u-active u-align-letf ">
            <p><img alt="" class="" data-image-width="400" data-image-height="200" src=""></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <p><section class="u-clearfix u-palette-5-light-3 u-section-5" id="sec-9a9c"></p>
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-align-right u-container-style u-expanded-width u-group u-palette-1-light-2 u-group-1">
          <div class="u-container-layout u-container-layout-1">
            <h1 class="u-text u-text-body-alt-color u-text-1">servicios</h1>
          </div>
        </div>
        <div class="u-expanded-width u-list u-list-1">
          <div class="u-repeater u-repeater-1">
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-2">
              <p><img alt="" class="u-expanded-width u-image u-image-default u-image-1" data-image-width="1150" data-image-height="449" src="images/02.png"></p>
                <h3 class="u-align-left u-text u-text-default u-text-2"> Consultas</h3>
                <a href="citas.php" class="u-active-palette-1-base u-align-left u-border-2 u-border-grey-75 u-btn u-button-style u-hover-palette-1-light-2 u-palette-2-light-2 u-btn-1">Agendar</a>
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-3">
              <p><img alt="" class="u-expanded-width u-image u-image-default u-image-2" data-image-width="250" data-image-height="157" src="images/03.png"></p>
                <h3 class="u-align-left u-text u-text-default u-text-3">Vacunación</h3>
                <a href="citas.php" class="u-active-palette-1-base u-align-left u-border-2 u-border-grey-75 u-btn u-button-style u-hover-palette-1-light-2 u-palette-2-light-2 u-btn-2">agendar</a>
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-4">
              <p><img alt="" class="u-expanded-width u-image u-image-default u-image-3" data-image-width="1200" data-image-height="675" src="images/04.png"></p>
                <h3 class="u-align-left u-text u-text-default u-text-4"> Urgencias</h3>
                <a href="citas.php" class="u-active-palette-1-base u-align-left u-border-2 u-border-grey-75 u-btn u-button-style u-hover-palette-1-light-2 u-palette-2-light-2 u-btn-3">agendar</a>
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-5">
                <p><img alt="" class="u-expanded-width u-image u-image-default u-image-4" data-image-width="750" data-image-height="501" src="images/05.png"></p>
                <h3 class="u-align-left u-text u-text-default u-text-5"> Hospitalización</h3>
                <a href="citas.php" class="u-active-palette-1-base u-align-left u-border-2 u-border-grey-75 u-btn u-button-style u-hover-palette-1-light-2 u-palette-2-light-2 u-btn-4">agendar</a>
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-6">
              <p> <img alt="" class="u-expanded-width u-image u-image-default u-image-5" data-image-width="2560" data-image-height="1707" src="images/06.png"></p>
                <h3 class="u-align-left u-text u-text-default u-text-6"> Diagnostico</h3>
                <a href="citas.php" class="u-active-palette-1-base u-align-left u-border-2 u-border-grey-75 u-btn u-button-style u-hover-palette-1-light-2 u-palette-2-light-2 u-btn-5">agendar</a>
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-7">
              <p><img alt="" class="u-expanded-width u-image u-image-default u-image-6" data-image-width="700" data-image-height="450" src="images/07.png"></p>
                <h3 class="u-align-left u-text u-text-default u-text-7"> Grooming</h3>
                <a href="citas.php" class="u-active-palette-1-base u-align-left u-border-2 u-border-grey-75 u-btn u-button-style u-hover-palette-1-light-2 u-palette-2-light-2 u-btn-6">agendar</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="skrollable u-clearfix u-grey-5 u-parallax u-section-6" id="sec-64aa">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-align-left u-container-style u-layout-cell u-left-cell u-size-30 u-layout-cell-1">
                <div class="u-container-layout u-container-layout-1">
                  <h2 class="u-align-left u-text u-text-palette-1-light-2 u-text-1"><b>
                      <br>
                      <br>
                      <br>centro veterinario grommrott</b>
                  </h2>
                  <p class="u-text u-text-2"><b>calle 62asur #43b03</b>
                  </p>
                  <p class="u-text u-text-3">
                    <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-body-color u-btn-1" href="tel:311 2842163">311 284 2163</a>
                  </p>
                  <p class="u-text u-text-4">
                    <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-grey-90 u-btn-2" href="mailto:Grommrott@gmail.com"><b>
                        <span style="font-weight: 400;"></span>Grommrott@gmail.com</b>
                    </a>
                  </p>
                </div>
              </div>
              <div class="u-container-style u-grey-90 u-layout-cell u-right-cell u-size-30 u-layout-cell-2">
                <div class="u-border-2 u-border-palette-1-light-1 u-container-layout u-container-layout-2">
                  <div class="u-expanded u-grey-10 u-map">
                    <div class="embed-responsive">
                      <iframe class="embed-responsive-item" src="https://maps.google.com/maps?output=embed&amp;key=111911&amp;q=calle%2062asur%20%2343b03&amp;t=m" data-map="JTdCJTIycG9zaXRpb25UeXBlJTIyJTNBJTIybWFwLWFkZHJlc3MlMjIlMkMlMjJhZGRyZXNzJTIyJTNBJTIyY2FsbGUlMjA2MmFzdXIlMjAlMjM0M2IwMyUyMiUyQyUyMnpvb20lMjIlM0FudWxsJTJDJTIydHlwZUlkJTIyJTNBJTIycm9hZCUyMiUyQyUyMmxhbmclMjIlM0FudWxsJTJDJTIyYXBpS2V5JTIyJTNBMTExOTExJTJDJTIybWFya2VycyUyMiUzQSU1QiU1RCU3RA=="></iframe>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    
    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-253b"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1">
          <br>
          <a href="https://movet.co/tyc" class="u-active-none u-border-none u-btn u-button-style u-hover-none u-none u-text-palette-1-base u-btn-1">Términos y condiciones</a>
          <br>
          <a href="https://movet.co/tyc/agendamiento" class="u-active-none u-border-none u-btn u-button-style u-hover-none u-none u-text-palette-1-base u-btn-2">Términos y condiciones de servicios de agendamiento</a>
          <br>
          <a href="https://movet.co/wp-content/uploads/2023/03/POLITICA-DE-TRATAMIENTO-DE-DATOS-MOVET.docx.pdf" target="_blank" class="u-active-none u-border-none u-btn u-button-style u-hover-none u-none u-text-palette-1-base u-btn-3">Protección de datos</a>
        </p>
      </div></footer>
    <section class="u-backlink u-clearfix u-grey-80">
      <a class="u-link" href="https://nicepage.com/html-templates" target="_blank">
        <span>Free HTML Templates</span>
      </a>
      <p class="u-text">
        <span>created with</span>
      </p>
      <a class="u-link" href="https://nicepage.com/website-builder" target="_blank">
        <span>Website Builder</span>
      </a>. 
    </section><span style="height: 64px; width: 64px; margin-left: 0px; margin-right: auto; margin-top: 0px; background-image: none; right: 20px; bottom: 20px; padding: 15px" class="u-back-to-top u-icon u-icon-circle u-opacity u-opacity-85 u-palette-1-base u-spacing-15" data-href="#">
        <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 551.13 551.13"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-1d98"></use></svg>
        <svg class="u-svg-content" enable-background="new 0 0 551.13 551.13" viewBox="0 0 551.13 551.13" xmlns="http://www.w3.org/2000/svg" id="svg-1d98"><path d="m275.565 189.451 223.897 223.897h51.668l-275.565-275.565-275.565 275.565h51.668z"></path></svg>
    </span>
  
</body></html>