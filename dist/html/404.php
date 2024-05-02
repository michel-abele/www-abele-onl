<?php

# page settings
$language = 'de';
$title = 'Error: 404 Not Found';
$description = 'Error: 404 Not Found.';

ob_start();
?>



<?php
$content = ob_get_contents();
ob_end_clean();
