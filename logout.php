<?php

if (isset($_SESSION['user']))
{
  session_destroy();
  $_SESSION['user'] = null;
}
else {
  header('Location: index.html.php');
}

?>
