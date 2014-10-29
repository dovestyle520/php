<?php
    // if we using IIS, we need to set
    // $_SERVER['PHP_AUTH_USER'] and
    // $_SERVER['PHP_AUTH_PW']

if( (substr($_SERVER['SERVER_SOFTWARE'], 0, 9) == 'Microsoft') &&
    (!isset($_SERVER['PHP_AUTH_USER'])) &&
    (!isset($_SERVER['PHP_AUTH_PW'])) &&
    (substr($_SERVER['HTTP_AUTHORIZATION'], 0, 6) == 'Basic ')
   )    
?>