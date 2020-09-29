<?php

/*
  Backend of the index page.
*/

if (!isset($_SESSION['user']))
{
  session_start();
}

include 'index.html.php';
?>
