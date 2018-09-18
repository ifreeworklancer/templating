<?php include(__DIR__ . '/../../storage.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="/dist/app.css">
</head>
<body>
    
<header>
    <?php
    foreach($phones as $phone) {
        echo '<div>'
        . '<a href="tel:' . str_replace(['(', ')', '-', ' '], '', $phone) . '">' . $phone . '</a>'
        . '</div>';
    }
    ?>
</header>