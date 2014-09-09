<?php

require 'facebook.php';
/**
 * Created by PhpStorm.
 * User: tebusco
 * Date: 09/09/14
 * Time: 09:31 AM
 */

$databasehost = "localhost";
$databasename = "eadvert1_1001aniversario";
$databaseusername ="eadvert1_1001ani";
$databasepassword = "Milunani2014!";

// Create our Application instance (replace this with your appId and secret).
$facebook = new Facebook(array(
    'appId'  => '173715872813876',
    'secret' => '2e44467d54ef4ca6920aed7c45e93360',
));