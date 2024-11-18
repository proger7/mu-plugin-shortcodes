<?php

if ( ! defined( 'ABSPATH' ) ) exit;

include_once __DIR__ . '/parse-functions.php';
include_once __DIR__ . '/offers-data.php';

add_action( 'wp_enqueue_scripts', function () {
    wp_enqueue_style( 'table-client-css', site_url() . '/table-client/mob/inc/style.css', array(), '1.0.0' );
    wp_enqueue_script( 'table-client-js', site_url() . '/table-client/mob/inc/script.js', array( 'jquery' ), '1.0.0', true );
});