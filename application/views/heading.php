<!DOCTYPE html>
<html lang="en">

<head>
    <title><?= $title; ?></title>
    <meta charset="UTF-8">
    <meta name="description" content="<?= $description; ?>">
    <meta name="keywords" content="<?= $keyword; ?>">
    <meta name="google-site-verification" content="JcFT66ycrQ04X-8XArXEB38NuSpzfr2OAh8hnoATStQ" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;1,100;1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('asset/'); ?>aos/aos.css">
    <link rel="stylesheet" href="<?= base_url('asset/'); ?>swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="<?= base_url('asset/'); ?>css/materialize.min.css">
    <link rel="stylesheet" href="<?= base_url('asset/'); ?>css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="icon" href="<?= base_url('img/'); ?>logo/ravi-artikel-icon.png">
</head>

<body>
    <!-- navbar -->
    <div class="navbar-fixed">
        <nav class="navbar-background">
            <div class="container">
                <div data-aos="fade-down" data-aos-duration="2000" class="nav-wrapper">
                    <a href="<?= site_url('home/'); ?>" class="brand-logo"><img src="<?= base_url('img/'); ?>logo/ravi-artikel-logo.png" alt="ravi artikel" width="130" height="40"></a>
                    <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons notranslate">menu</i></a>
                    <ul class="right hide-on-med-and-down">
                        <li><a href="<?= site_url('artikels/q/'); ?>">Artikel</a></li>
                        <li><a href="<?= site_url('flora/'); ?>">Flora</a></li>
                        <li><a href="<?= site_url('fauna/'); ?>">Fauna</a></li>
                        <li><a href="<?= site_url('iklim/'); ?>">Iklim</a></li>
                        <li><a href="<?= site_url('umri/'); ?>">Umri</a></li>
                        <li><a href="<?= site_url('aboutme/'); ?>">About Me</a></li>
                        <li><a href="<?= site_url('login/'); ?>" class="waves-effect waves-light btn">Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <!-- side nav -->
    <ul class="sidenav" id="mobile-nav">
        <li><a href="<?= site_url('home/'); ?>" class="brand-logo center"><img src="<?= base_url('img/'); ?>logo/ravi-artikel-logo.png" alt="ravi artikel" width="130" height="40"></a></li>
        <li><a href="<?= site_url('flora/'); ?>">Flora</a></li>
        <li><a href="<?= site_url('fauna/'); ?>">Fauna</a></li>
        <li><a href="<?= site_url('iklim/'); ?>">Iklim</a></li>
        <li><a href="<?= site_url('umri/'); ?>">Umri</a></li>
        <li><a href="<?= site_url('aboutme/'); ?>">About Me</a></li>
        <li><a href="<?= site_url('login/'); ?>" class="waves-effect waves-light btn">Login</a></li>
    </ul>