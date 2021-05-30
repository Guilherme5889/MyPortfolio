 <!-- ======= Mobile nav toggle button ======= -->
 <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>
 <!-- ======= Header ======= -->
 <header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
        <img src="assets/img/<?php echo $config["imagem_perfil"]; ?>" alt="" class="img-fluid rounded-circle">
        <h1 class="text-light"><a href="index.html"><?php echo $config["titulo"]; ?></a></h1>
        <div class="social-links mt-3 text-center">
          <a href="https://twitter.com/DevGuilherme1" class="twitter" target="_blank"><i class="bx bxl-twitter"></i></a>
          <a href="https://www.facebook.com/profile.php?id=100011777160138" target="_blank" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="https://instagram.com/guilhermedevolio" target="_blank" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="https://www.linkedin.com/in/guilherme-dev%C3%B3lio-3442a01b4/" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
      </div>

      <nav id="navbar" class="nav-menu navbar">
        <ul>
          <li><a href="home#hero" class="nav-link scrollto "><i class="bx bx-home"></i> <span> Home </span></a></li>
          <li><a href="home#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span> Sobre </span></a></li>
          <li><a href="home#portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span> Portfólio </span></a></li>
          <li><a href="home#services" class="nav-link scrollto"><i class="bx bx-server"></i> <span> Serviços </span></a></li>
          <li><a href="home#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contato</span></a></li>
          <li><a href="admin" class="nav-link scrollto"><i class="bx bx-lock"></i> <span>Admin</span></a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->