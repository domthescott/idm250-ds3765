<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Koh+Santepheap:wght@100;300;400;700;900&display=swap" rel="stylesheet">
    <title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>

<body 
<?php body_class(); ?> 

<?php wp_body_open(); ?> 

>

<?php

get_template_part('components/header');

?>