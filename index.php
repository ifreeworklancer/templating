<?php 

include('views/layout/header.php');

$templates = ['top', 'about', 'contact-form'];

foreach($templates as $template) {
    include('views/' . $template . '.php');
}

include('views/layout/footer.php');