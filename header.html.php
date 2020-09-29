<!DOCTYPE html>

<!--
  Contains the CSS and Font Awesome kit links, scripts,
  and the <header> mark (logo and navbar links)
-->

<html id="html">
  <head>
    <script src="https://kit.fontawesome.com/e6dc47c4f5.js" crossorigin="anonymous"></script>
     <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Rock+Salt&family=Roboto&family=Monoton&family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/master.css" type="text/css">
    <title>P&aacute;gina de prueba</title>
  </head>
  <body>
    <header>
      <article id="header_layer">
        <h1 id="logo"><a class="no_link" href="index.html.php">Prueba con PHP en servidor local y sin framework</a></h1>
        <section id="navbar">
          <div id="navbar_link_container">
            <?php if (!isset($_SESSION['user'])): ?>
            <a href="register.html.php" class="navbar_link"><i class="far fa-id-card"></i> Crear cuenta</a>
            <a href="login.html.php" class="navbar_link"><i class="far fa-user"></i> Iniciar sesi&oacute;n</a>
            <?php elseif (isset($_SESSION['user'])): ?>
            <a href="logout.php" class="navbar_link"><i class="far fa-user"></i> Cerrar sesi&oacute;n</a>
            <?php endif; ?>
            <a class="navbar_link"><i class="far fa-paper-plane"></i> Informaci&oacute;n</a>
          </div>
        </section>
      </article>
    </header>
