<!doctype html>

<html <?php language_attributes(); ?>>

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="theme-color" content="#FFFFFF">

        <?php// the_field ( 'options_head_scripts', 'option' ); //?>

        <!-- <link rel="stylesheet" href="<?php bloginfo ( 'stylesheet_url' ); ?>"> -->

        <?php wp_head(); ?>

    </head>

    <body <?php body_class(); ?>>