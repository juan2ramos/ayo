<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html lang="es">
<head>

    <title>Alfa & Omega</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="author" content=""/>
    <meta name="contact" content=""/>
    <meta name="description" content=""/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0 maximum-scale=1"/>

    <!-- Meta Facebook -->
    <meta property="og:url" content="">
    <meta property="og:title" content=""/>
    <meta property="og:description"
          content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:site_name" content=""/>


    <link rel="shortcut icon" href="favicon.png">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="57x57" href="images/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="images/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="images/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="images/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="images/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="images/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="images/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="images/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!-- Estilos -->

    <link rel="stylesheet" href="css/normalize.css"/>
    <link rel="stylesheet" href="css/style.css"/>

    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Lato:400,300,100,700,900' rel='stylesheet' type='text/css'>

</head>
<body>
<header>
    <div class="content-header">
        <div class="header-bar">
            <h1 class="logo"><a href="home">ALFA & OMEGA <span>Sistemas y Servicios</span></a></h1>
            <nav class="nav">

        <span class="menu-mobile">
            <div></div>
            <div></div>
            <div></div>
        </span>
                <ul>
                    <li><a href="servicios" <?php if ($url == 'servicios') echo 'class="current"' ?>>Servicios</a></li>
                    <li><a href="ventas" <?php if ($url == 'ventas') echo 'class="current"' ?>> Ventas</a></li>
                    <li><a href="nosotros" <?php if ($url == 'nosotros') echo 'class="current"' ?>> Nosotros</a></li>
                    <li><a href="garantia" <?php if ($url == 'garantia') echo 'class="current"' ?>>Garantia</a></li>
                    <li><a href="">Blog</a></li>
                    <li><a href="contacto"
                           class="contact-li <?php if ($url == 'contacto') echo 'current' ?>">Contacto</a></li>
                </ul>
            </nav>
        </div>
    </div>


    <div id="banner" class="owl-carousel owl-theme">

        <div class="item elemenBanner" style="background-image: url('images/banner2.jpg') "></div>
        <div class="item elemenBanner" style="background-image: url('images/blur.jpg') ">
            <div class="text-content">
                <span>Mantenimiento de Pantallas y Televisores</span></div>
            <div class="images-content">
                <img src="images/tv1.png" alt="">
                <img src="images/tv2.png" alt="">
            </div>

        </div>
        <div class="item elemenBanner" style="background-image: url('images/banner3.jpg') "></div>


    </div>


    <div class="brand">
        <div class="brand-wrapper">
            <ul>
                <li><img src="images/samsung-logo.png" alt=""></li>
                <li><img src="images/acer-logo.png" alt=""></li>
                <li><img src="images/lg-logo.png" alt=""></li>
                <li><img src="images/sony-logo.png" alt=""></li>
                <li><img src="images/toshiba-logo.png" alt=""></li>
                <li><img src="images/elo-logo.png" alt=""></li>
                <li><img src="images/aoc-logo.png" alt=""></li>
                <li><img src="images/genius-logo.png" alt=""></li>
                <li><img src="images/viewsonic-logo.png" alt=""></li>
                <li><img src="images/asus-logo.png" alt=""></li>
                <li><img src="images/dell-logo.png" alt=""></li>
                <li><img style="max-width: 60%;" src="images/hp-logo.png" alt=""></li>
                <li><img src="images/lenovo-logo.png" alt=""></li>
            </ul>
        </div>
    </div>
    <div class="subscribe">
        <div class="subscribe-wrapper">
            <a href="mailto:soporte@alfomega.com"><i class="demo-icon icon-phone">&#xe804;</i><span class="mail">soporte@alfomega.com</span></a>
            -
            <a href="tel:634 89 91"><i class="demo-icon icon-mobile">&#xe805;</i>(57) 1 634 89 91</a>
            <ul class="network">
                <li><a href=""><i class="demo-icon icon-mobile">&#xe800;</i></a></li>
                <!--<li><a href=""><i class="demo-icon icon-mobile">&#xe801;</i></a></li>
                <li><a href=""><i class="demo-icon icon-mobile">&#xe802;</i></a></li>-->
                <li><a href=""><i class="demo-icon icon-mobile">&#xe803;</i></a></li>
            </ul>
        </div>
    </div>
</header>
<?php include $fileName; ?>

<!-- JavaScript -->
<script type='text/javascript' src='http://maps.googleapis.com/maps/api/js?sensor=false&#038;ver=1.0'></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="js/owl.js"></script>
<script src="js/script.js"></script>

<?php if ($url == '/contacto'): ?>
    <script src="js/map.js"></script><?php endif ?>
<!-- BEGIN JIVOSITE CODE {literal} -->
<script type='text/javascript'>
    (function () {
        var widget_id = 'zDDYmUsPAg';
        var s = document.createElement('script');
        s.type = 'text/javascript';
        s.async = true;
        s.src = '//code.jivosite.com/script/widget/' + widget_id;
        var ss = document.getElementsByTagName('script')[0];
        ss.parentNode.insertBefore(s, ss);
    })();</script>
<!-- {/literal} END JIVOSITE CODE -->

</body>
</html>