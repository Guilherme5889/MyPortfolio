<?php
require_once 'config.php';
$config = Config::getConfig();
?>
  <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?php echo $config["titulo"]; ?></title>
  <meta content="Guilherme Devólio Portfólio" name="description">
  <meta content="Programação, Desenvolvimento Web, Marketing Digital" name="keywords">
  <meta name="title" content="Guilherme Devólio">
  <meta name="author" content="Guilherme Devólio">
  <meta name="robots" content="index, follow">
  <meta property="og:type" content="website">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta property="og:title" content="Guilherme Devólio">
  <meta property="og:site_name" content="Guilherme Devólio">
  <meta property="og:description" content="Guilherme Devólio">
  <meta property="og:url" content="https://guilhermedevolio.tech/">
  <meta property="og:image" content="https://guilhermedevolio.tech/assets/img/profile.ico">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-DLNC599ZQW"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-DLNC599ZQW');
    </script>

  <!-- Favicons -->
  <link href="assets/img/<?php echo $config["imagem_perfil"]; ?>" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <!-- ./wrapper -->

  <!-- =======================================================
  * Template Name: iPortfolio - v3.2.0
  * Template URL: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <?php
        require_once 'components/sidebar.php';
        Online::verificarUsuarioOnline();
    ?>

    <?php
        ob_start();
        if(isset($_GET['url'])){
            $page = explode('/', $_GET['url'])[0];
        } else {
            $page = "home";
        }

        if(file_exists('pages/'.$page.'.php')){
            require_once 'pages/'.$page.'.php';
        }
        ob_end_flush();
    ?>

 
    <?php
        require_once 'components/footer.php';
    ?>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>