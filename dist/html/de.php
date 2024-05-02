<?php

# page settings
$language = 'de';
$title = 'Digitales Portfolio';
$description = 'Digitales Portfolio von Michel Abele, Fachinformatiker und Speditionskaufmann aus Hohenwarsleben.';

ob_start();
?>



<?php
$content = ob_get_contents();
ob_end_clean();
