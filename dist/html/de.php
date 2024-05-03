<?php

# page settings
$language = 'de';
$title = 'Digitales Portfolio';
$description = 'Digitales Portfolio von Michel Abele, Fachinformatiker und Speditionskaufmann aus Hohenwarsleben.';

# navbar
$navbar = [
    'start' => 'Start',
    'about' => 'Über mich',
    'certificates' => 'Zertifikate',
    'skills' => 'Fähigkeiten',
    'resume' => 'Lebenslauf',
    'github' => 'GitHub-Repositories',
    'websites' => 'Webseiten',
    'games' => 'Game-Server',
    'contact' => 'Kontakt'
];

# typed
$typed = [
    'Windows-Administrator',
    'Linux-Administrator',
    'Netzwerkadministrator',
    'Full-Stack-Webentwickler',
    'Speditionskaufmann',
    'Lkw-Disponent',
    'Lkw-Fahrer',
    'Heimatforscher'
];

ob_start();
?>

    <section id="about" class="about">
        <div class="container">
        </div>
    </section>

    <section id="facts" class="facts">
        <div class="container">
        </div>
    </section>

    <section id="certificates" class="certificates">
        <div class="container">
        </div>
    </section>

    <section id="skills" class="skills">
        <div class="container">
        </div>
    </section>

    <section id="resume" class="resume">
        <div class="container">
        </div>
    </section>

    <section id="github" class="github">
        <div class="container">
        </div>
    </section>

    <section id="websites" class="websites">
        <div class="container">
        </div>
    </section>

    <section id="games" class="games">
        <div class="container">
        </div>
    </section>

    <section id="contact" class="contact">
        <div class="container">
        </div>
    </section>

<?php
$content = ob_get_contents();
ob_end_clean();
