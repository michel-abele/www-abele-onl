<?php

# page settings
$var_page = [
    'language'      => 'de',
    'title'         => 'Digitales Portfolio',
    'description'   => 'Digitales Portfolio von Michel Abele, Fachinformatiker und Speditionskaufmann aus Hohenwarsleben.',
    'cookie_text'   => '<p>Diese Website stellt ein rein privates Angebot dar und ist speziell für Privatpersonen, potenzielle Arbeitgeber sowie Auftraggeber im Kontext freiberuflicher Projekte konzipiert. Aus diesem Grund unterliege ich nicht der gesetzlichen Pflicht, ein Impressum oder eine Datenschutzerklärung vorzuhalten.</p><p>Dennoch möchte ich Sie transparent darüber informieren, dass sowohl ich als auch von mir genutzte Drittanbieter möglicherweise Cookies einsetzen, um die Nutzererfahrung zu verbessern und die Webseite effizienter zu gestalten.</p>',
    'cookie_button' => 'Verstanden'
];

# navbar
$var_navbar = [
    'start'        => 'Start',
    'about'        => 'Über mich',
    'certificates' => 'Zertifikate',
    'skills'       => 'Fähigkeiten',
    'resume'       => 'Lebenslauf',
    'github'       => 'GitHub-Repositories',
    'websites'     => 'Webseiten',
    'games'        => 'Game-Server',
    'contact'      => 'Kontakt'
];

# typed
$var_typed = [
    'Windows-Administrator',
    'Linux-Administrator',
    'Netzwerkadministrator',
    'Full-Stack-Webentwickler',
    'Speditionskaufmann',
    'Lkw-Disponent',
    'Lkw-Fahrer',
    'Heimatforscher'
];
$var_page['typed'] = implode(',', $var_typed);

# age
$birthDate       = "1980-02-03";
$currentDate     = date("Y-m-d");
$var_page['age'] = date_diff(date_create($birthDate), date_create($currentDate))->y;

# content
$content  = file_get_contents('../html/de/about.html');
$content .= file_get_contents('../html/de/facts.html');
$content .= file_get_contents('../html/de/certificates.html');
$content .= file_get_contents('../html/de/skills.html');
$content .= file_get_contents('../html/de/resume.html');
$content .= file_get_contents('../html/de/github.html');
$content .= file_get_contents('../html/de/websites.html');
$content .= file_get_contents('../html/de/games.html');
$content .= file_get_contents('../html/de/contact.html');
