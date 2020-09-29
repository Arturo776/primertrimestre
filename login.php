<?php

/*
  Contains the backend of the login page.
*/

if (isset($_SESSION['user']))
{
  header('Location: index.php');
} else {
  session_start();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
  $username = (!empty($_POST['username'])) ? $_POST['username'] : false;
  $password = (!empty($_POST['password'])) ? $_POST['password'] : false;

  $error = ($username == false || $password == false) ? true : false;

  if ($error == false)
  {
    $db = new SQLite3('db/db.sqlite');
    $sentence = $db->prepare("select * from users where username = ? and password = ?");
    $sentence->bindValue(1, $username, SQLITE3_TEXT);
    $sentence->bindValue(2, $password, SQLITE3_TEXT);
    $result = $sentence->execute()->fetchArray();

    /*if ($result == true)
    {
      $_SESSION['user'] = $result['id'];
      header('Location: information.html.php');
    }
    */
  }
}

include 'login.html.php';
?>
