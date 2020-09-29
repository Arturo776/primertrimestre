<?php include 'header.html.php' ?>

<!--
  View of the register page.
-->

    <main id="main">
      <article id="main_layer">
        <div id="formulary_container">
          <form id="formulary" action="register.php" method="POST">
            <?php if (isset($error) && $error == true or isset($result) && $result == false): ?>
            <p class="error_text"><i class="far fa-sad-cry"></i> ¡Hay un error! Comprueba que los datos sean los correctos.</p>
            <?php else: ?>
            <label class="formulary_label" for="username"><i class="fa fa-user"></i></label>
            <?php endif; ?>
            <input class="formulary_input" placeholder="Usuario" type="text" name="username">
            <label class="formulary_label" for="password"><i class="fa fa-lock"></i></label>
            <input class="formulary_input" placeholder="Contraseña" type="password" name="password">
            <input class="send_button" type="submit" value="Crear cuenta">
          </form>
        </div>
      </article>
    </main>

    <footer id="footer">
      <article>
      </article>
    </footer>
  </body>
</html>
