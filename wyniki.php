<!doctype html>
<html>

<head>
  <meta charset="utf-8" />
</head>

<body>
  <?php    
    $ile_kurtek = $_POST['kurtka'];
    $ile_kaleson = $_POST['kalesony'];
    $ile_gaci = $_POST['gacie'];
    $suma = $ile_kurtek * 120 + $ile_kaleson * 40 + $ile_gaci * 60;
    if ($suma == 0)
    echo 'Podaj liczbę sztuk kupowanego towaru';
    else
    echo 'Dziękujemy, dokonałeś zakupów za kwotę ' . $suma . ' złotych';
  ?>
</body>

</html>