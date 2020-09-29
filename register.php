<?php

/*
  Contains the backend of the register page.
*/

if (isset($_SESSION['user']))
{
  header('Location: index.php');
}
else {
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
    $sentence = $db->prepare("insert into users (username, password) values (?, ?)");
    $sentence->bindValue(1, $username, SQLITE3_TEXT);
    $sentence->bindValue(2, $password, SQLITE3_TEXT);
    $result = $sentence->execute()->fetchArray();

    if ($result == true)
    {
      header('Location: index.html.php');
    }
    /*
    if ($existing_user == false)
    {
      $query = "insert into users (username, password) VALUES ('$username', '$password')";
      $connection->exec($query);
    }
    else {
      $error = true;
    }
    */
  }
}

include 'register.html.php';
?>
