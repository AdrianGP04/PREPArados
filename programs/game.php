<!DOCTYPE html>
<html>
  <head>Juego PREPArados</head>
  <body>
    <?php
      $Question_1 = array('cual es el primer planeta del sistema solar?', 'mercurio', 'jupiter', 'tierra');
      $Question_3 = array('quien es el presidente de Mexico?', 'Enrique Pena nieto', 'Wayne Rooney', 'Barack Obama', 'Donald Trump');
      $Question_2 = array('cual es el simbolo del oro en la tabla periodica?', 'AU', 'H', 'O', 'K');
      $Question_4 = array('cuando es 2x2?', '4', '5', '12', '3');
      $Question_5 = array('cual de estos es un lenguaje de programacion', 'C', 'html', 'bootstrap', 'kernel');
      $random = rand(1, 5);
    ?>
      <button type="button"><?php $Question_.$random[0] ?></button>



  </body>
</html>

<!-- 
<!DOCTYPE html>
<html>
  <head>Juego PREPArados</head>
  <body>
    <form method="POST" action="game.php">
      <button

    </form>
  </body>
</html> -->
