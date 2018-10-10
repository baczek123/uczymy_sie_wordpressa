<!doctype html>
<html lang="pl"
  <head>
    <meta charset=utf-8/>
    <title>Podsumowanie Zamówienia</title>

  </head>
  <body>

<?php

$paczkow = $_POST['paczki'];

$grzebieni = $_POST['grzebienie'];

echo<<<END

  <h2>Podsumowanie zamówienia</h2>

  <table border="1" CELLPADDING="10" cellspacing="0"
    <tr>
      <td>Pączek (0,99 PLN/SZT)</td><td></td>
    </tr>
    <tr>
      <td>Grzebień (1,29 PLN/SZT)</td><td></td>
    </tr>
    <tr>
      <td>Suma</td><td></td>
    </tr>
  </table>

END;
?>

  </body>
</html>
