<?php

# page settings
$var_page = [
    'language'      => 'en',
    'title'         => 'Digital portfolio',
    'description'   => 'Digital portfolio of Michel Abele, IT specialist and forwarding agent from Hohenwarsleben (Germany).',
    'cookie_text'   => '<p>This website is a purely private offering and is specifically designed for individuals, potential employers, and clients in the context of freelance projects. For this reason, I am not legally required to provide an imprint or privacy policy.</p><p>However, I would like to transparently inform you that both I and third parties I use may employ cookies to enhance user experience and make the website more efficient.</p>',
    'cookie_button' => 'Understood'
];

# navbar
$var_navbar = [
    'start'        => 'Home',
    'about'        => 'About Me',
    'certificates' => 'Certificates',
    'skills'       => 'Skills',
    'resume'       => 'Resume',
    'github'       => 'GitHub Repositories',
    'websites'     => 'Websites',
    'games'        => 'Game Servers',
    'contact'      => 'Contact'
];

# typed
$var_typed = [
    'Windows Administrator',
    'Linux Administrator',
    'Network Administrator',
    'Full Stack Web Developer',
    'Freight Forwarding Agent',
    'Truck Dispatcher',
    'Truck Driver',
    'Local Historian'
];
$var_page['typed'] = implode(',', $var_typed);

# age
$birthDate       = "1980-02-03";
$currentDate     = date("Y-m-d");
$var_page['age'] = date_diff(date_create($birthDate), date_create($currentDate))->y;

# content
$content  = file_get_contents('../html/en/about.html');
$content .= file_get_contents('../html/en/facts.html');
$content .= file_get_contents('../html/en/certificates.html');
$content .= file_get_contents('../html/en/skills.html');
$content .= file_get_contents('../html/en/resume.html');
$content .= file_get_contents('../html/en/github.html');
$content .= file_get_contents('../html/en/websites.html');
$content .= file_get_contents('../html/en/games.html');
$content .= file_get_contents('../html/en/contact.html');
