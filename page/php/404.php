<?php

# page settings
$var_page = [
    'language'      => 'de',
    'title'         => 'Fehler 404 - Seite nicht gefunden',
    'description'   => 'Fehlermeldung 404 - Die Seite wurde nicht gefunden.',
    'cookie_text'   => '<p>Diese Website stellt ein rein privates Angebot dar und ist speziell für Privatpersonen, potenzielle Arbeitgeber sowie Auftraggeber im Kontext freiberuflicher Projekte konzipiert. Aus diesem Grund unterliege ich nicht der gesetzlichen Pflicht, ein Impressum oder eine Datenschutzerklärung vorzuhalten.</p><p>Dennoch möchte ich Sie transparent darüber informieren, dass sowohl ich als auch von mir genutzte Drittanbieter möglicherweise Cookies einsetzen, um die Nutzererfahrung zu verbessern und die Webseite effizienter zu gestalten.</p>',
    'cookie_button' => 'Verstanden'
];

# navbar
$var_navbar = [
    'start'        => 'Error',
    'about'        => 'Error',
    'certificates' => 'Error',
    'skills'       => 'Error',
    'resume'       => 'Error',
    'github'       => 'Error',
    'websites'     => 'Error',
    'games'        => 'Error',
    'contact'      => 'Error'
];

# typed
$var_typed = [
    '404 Error',
    '404 Fehler'
];
$var_page['typed'] = implode(',', $var_typed);

$content = file_get_contents('../html/404/error.html');
