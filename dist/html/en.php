<?php

# page settings
$language = 'en';
$title = 'Digital portfolio';
$description = 'Digital portfolio of Michel Abele, IT specialist and forwarding agent from Hohenwarsleben (Germany).';

ob_start();
?>



<?php
$content = ob_get_contents();
ob_end_clean();
