<?php
ob_start();
?>
<!DOCTYPE html>
<html lang="<?= $language ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?> - Michel Abele</title>
    <meta name="description" content="<?= $description ?>">

    <!-- CSS -->
    <link rel="stylesheet" href="/lib/css/bootstrap.css">
    <link rel="stylesheet" href="/lib/css/aos.css">
    <link rel="stylesheet" href="/lib/css/bootstrap-icons.css">
    <link rel="stylesheet" href="/lib/css/boxicons.css">
    <link rel="stylesheet" href="/lib/css/custom.css">
    
    <!-- Favicon -->
    <link rel="icon" href="/favicon.ico">
</head>
<body>
    <i id="mobile-nav-toggle" class="bi-before bi-before-list d-xl-none"></i>

    <header id="header">
        <div class="d-flex flex-column">

            <div id="profile">
                <img src="/lib/img/avatar.jpg" alt="" class="img-fluid rounded-circle">
                <h1 class="text-light"><a href="/<?= $language ?>">Michel Abele</a></h1>
                <div id="social-links" class="mt-3 text-center">
                    <a href="https://www.linkedin.com/in/michel-abele" title="LinkedIn" class="linkedin" target="_blank"><i class="bx bx-before-l-linkedin"></i></a>
                    <a href="https://github.com/michel-abele" title="GitHub" class="github" target="_blank"><i class="bx bx-before-l-github"></i></a>
                    <a href="https://www.instagram.com/michel._.abele" title="Instagram" class="instagram" target="_blank"><i class="bx bx-before-l-instagram"></i></a>
                    <a href="https://discord.gg/UTy5PFYAMt" title="Discord" class="discord" target="_blank"><i class="bx bx-before-l-discord-alt"></i></a>
                    <a href="https://wakatime.com/@michel_abele" title="WakaTime" class="wakatime" target="_blank"><i class="bx bx-before-n-time"></i></a>
                </div>
            </div>

            <nav id="navbar">
                <ul>
                    <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-before-n-home"></i> <span><?= $navbar['start'] ?></span></a></li>

                    <li><a href="#about" class="nav-link scrollto"><i class="bx bx-before-n-user"></i> <span><?= $navbar['about'] ?></span></a></li>

                    <li><a href="#certificates" class="nav-link scrollto"><i class="bx bx-before-n-certification"></i> <span><?= $navbar['certificates'] ?></span></a></li>

                    <li><a href="#skills" class="nav-link scrollto"><i class="bx bx-before-n-objects-horizontal-left"></i> <span><?= $navbar['skills'] ?></span></a></li>

                    <li><a href="#resume" class="nav-link scrollto"><i class="bx bx-before-n-file-blank"></i> <span><?= $navbar['resume'] ?></span></a></li>

                    <li><a href="#github" class="nav-link scrollto"><i class="bx bx-before-l-github"></i> <span><?= $navbar['github'] ?></span></a></li>

                    <li><a href="#websites" class="nav-link scrollto"><i class="bx bx-before-n-desktop"></i> <span><?= $navbar['websites'] ?></span></a></li>

                    <li><a href="#games" class="nav-link scrollto"><i class="bx bx-before-n-game"></i> <span><?= $navbar['games'] ?></span></a></li>

                    <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-before-n-envelope"></i> <span><?= $navbar['contact'] ?></span></a></li>
                </ul>
            </nav>

        </div>
    </header>

    <section id="hero" class="d-flex flex-column justify-content-center">
        <div class="hero-container" data-aos="fade-in">
            <h1>Michel Abele</h1>
            <p><span class="typed" data-typed-items="<? echo implode(',', $typed) ?>"></span></p>
        </div>
    </section>

    <main id="main">

<?php
$fileHead = ob_get_contents();
ob_end_clean();
