<?php
echo "cześć!";
?>

<?php
define(NAME, "Paweł");
echo "Cześć,".NAME;
?>


<?php
$name="Paweł";
echo "cześć jak si masz"."".$name;
?>

<?php

$telefon=(5+5!==10)? "Prawda" : "Fałsz";
echo "$telefon";
?>

<?php

$x=6;
$y=12;
$xy=(2+4==$x)||(8+7<$y)? "Prawda" : "Fałsz";
echo "$xy";
?>

<?php
if(4==6)
{
    echo "5";
}

elseif(6==7)
{
    echo "6";
}

elseif (7==7)
{
    echo "7";
}
else
{
    echo "Wszystko jest źle";
}
?>

<?php

$name='Tytus';
switch($name)
{
    case'Paweł':
    echo 'Witaj Pawle';
    break;
    case'Jakub':
    echo 'Witaj Jakubie';
    break;
    default:
    echo 'Nie masz dostempu do tej strony';
    break;
}
?>

<?php
for($i=1; $i<=21; $i++)
{
echo $i;
}
?>

<?php
$Imiona=array('Jakub', 'Paweł', 'Sara', 'Michał', 'Maciej', 'Iwona', 'Konstanty' );
echo $Imiona[3];
?>

<br />

<?php  
  $los1 = rand(10, 100);
  $los2 = rand(10, 100);    
  echo 'pierwsza liczba = ' . $los1 . '<br />';
  echo 'druga liczba = ' . $los2 . '<br />';
  
  if ($los1 % 2 == 0)
  {
    $suma = $los1 + $los2;
    echo 'suma = ' . $suma;
    
  }
  else
  {
    $iloczyn = $los1 * $los2;
    echo 'iloczyn = '.$iloczyn;      
  }
?>

<br />

<?php
/* 1  */  $liczba = rand(1, 100);
/* 2  */  $komunikat1 = 'Wylosowana liczba '.$liczba. ' jest liczą nieparzystą, podzielną przez 3 i 5';
/* 3  */  $komunikat2 = 'Wylosowana liczba '.$liczba. ' nie spełnia podanych warunków';

if ($liczba % 2 > 0)
    {
        if ($liczba % 3 == 0 )
        {
            if ( $liczba % 5 == 0 ) echo $komunikat1;
            else  echo $komunikat2;
        }
               
        else echo $komunikat2;
    }
    else echo $komunikat2;

    
?>

<br />

<?php
/* 1  */  $liczba = rand(10, 100);
/* 2  */  $komunikat1 = 'Wylosowana liczba '.$liczba. ' jest liczą nieparzystą, podzielną przez 3 i 5';
/* 3  */  $komunikat2 = 'Wylosowana liczba '.$liczba. ' nie spełnia podanych warunków';
/* 4  */    
/* 5  */  if ($liczba % 2 > 0)
/* 6  */  {
/* 7  */    if ($liczba % 3 == 0)
/* 8  */    {
/* 9  */      if ($liczba % 5 == 0) echo $komunikat1;
/* 10 */      else echo $komunikat2;
/* 11 */    }
/* 12 */    else echo $komunikat2;
/* 13 */  }
/* 14 */  else echo $komunikat2;
?>

<br />

<?php
  $sciana1 = 'biała'; //tak najpierw pan Stefan pomalował pierwszą ścianę
  $sciana2 = 'szara'; //a tak pomalował drugą ścianę
  $pierwszy_kolor_sciany1 = $sciana1; //zapamiętujemy początkowy kolor pierwszej ściany
  echo 'Ściana 1 jest ' . $sciana1 . ', ściana 2 jest ' . $sciana2 . '<br />'; //wyświetlamy opis
  $sciana1 = $sciana2; //pierwszą ścianę przemalowujemy na kolor drugiej ściany
  echo 'Ściana 1 jest ' . $sciana1 . ', ściana 2 jest ' . $sciana2 . '<br />'; //wyświetlamy opis
  $sciana2 = $pierwszy_kolor_sciany1; //drugą ścianę przemalowujemy na pierwotny kolor pierwszej ściany
  echo 'Ściana 1 jest ' . $sciana1 . ', ściana 2 jest ' . $sciana2; //wyświetlamy opis
?>

<br />

<?php

$piłka1 = 'piłka do kosza';
$piłka2 = 'piłka do nogi';
$piłka3 = 'piłka do śiatkówki';

echo $piłka1. ' jest wiksza od '.$piłka2.'<br />';


$piłka2 = $piłka3;
echo $piłka1. ' jest wiksza od '.$piłka2.'<br />';

$piłka4 = $piłka1;

echo $piłka1. ' jest taka sama jak '.$piłka4;

?>

<?php 
for ($i=1; $i <= 15 ; $i++)

echo 'to jest kod napisany przez pentle '.$i.' raz <br />';


?>

<?php    
  $liczba = rand(0, 15000);
  echo "$liczba ma cyfr ";
  $ile_cyfr = 1;
  while ($liczba >= 10)
  {
    $ile_cyfr++;
    $liczba /= 10;
  }
  echo $ile_cyfr; 
?>

<br />

<?php
 do 
  {
    $liczba = rand(1, 10);
    if ($liczba != 6) echo $liczba . ', ';
    else
    echo $liczba;
  } while ($liczba != 6);

?>

<br />

<?php 

$liczba12 = 1;

while ($liczba12 > 21);

$liczba12++;
echo "$liczba12 + $liczba12";



?>

<br />

<?php

//2 sposób tworzenia tablic asocjacyjnych
  $ksiazka2 = array('tytul' => 'HTML5', 'autor' => 'Bartosz Danowski', 'wydawnictwo' => 'Helion',     'rok_wydania' => 2012, 'sztuk' => 5, 'cena' => 24,30);
  $ksiazka3 = array('tytul' => 'JavaScript', 'autor' => 'Alex MacCaw', 'wydawnictwo' => 'Helion',   'rok_wydania' => 2012, 'sztuk' => 5, 'cena' => 24,30);
  $ksiazka4 = array('tytul' => 'PHP5', 'autor' => 'Sebastian Bergmann', 'wydawnictwo' => 'Helion',   'rok_wydania' => 2006, 'sztuk' => 5, 'cena' => 24,30);
  $ksiazka5 = array('tytul' => 'GIMP', 'autor' => 'Włodzimierz Gajda', 'wydawnictwo' => 'Helion',   'rok_wydania' => 2011, 'sztuk' => 5, 'cena' => 24,30);

  //dostęp do elementu tablicy
  echo $ksiazka3['tytul'];

  echo '<br />';
  //dostęp do elementów tablicy
  foreach ($ksiazka5 as $element) 
  echo $element . ' , ';
?>

<br />



<br />

<?php    
  //definicja funkcji
  function dzielenie($liczba1, $liczba2)
  {
    if ($liczba2 == 0) return false;
    return $liczba1 / $liczba2;
  }
  
  //nasz kod
  $a = rand(0, 5);
  $b = rand(0, 5);
  $iloraz = dzielenie($a, $b); //wywołanie funkcji
  if ($iloraz === false) echo 'Nie ma dzielenia przez zero!';
  else
  echo $a . ' / ' . $b . ' = ' . $iloraz;
?>

<br />

<?php    
  //definiujemy funkcję, która tworzy tablicę
  function tablica($rozmiar, $od, $do)
  {
    for ($i = 0; $i < $rozmiar; $i++)
    $t[] = rand($od, $do);
    return $t;
  }
  
  //definiujemy funkcję przestawiającą elementy
  function przestaw(&$a, &$b)
  {
    $tmp = $a;
    $a = $b;
    $b = $tmp;
  }
  
  //funkcja ustawiająca największy element na końcu tablicy
  function maksimum($t, $index)
  {
    for ($i = 0; $i < $index; $i++)
    if ($t[$i] > $t[$i + 1]) przestaw($t[$i], $t[$i + 1]);
    return $t;
  }
  
  //funkcja sortująca rosnąco
  function sortuj_rosnaco($tab)
  {
    $rozmiar = count($tab);
    for ($j = $rozmiar - 1; $j > 0; $j--)
    $tab = maksimum($tab, $j);
    return $tab;
  }
  
  //pokazanie elementów tablicy
  function pokaz_tablice($tab)
  {
    for ($i = 0; $i < count($tab); $i++)
    echo $tab[$i] . ', ';       
    echo '<br />';
  }
  
  $tablica_niesort = tablica(10, 1, 10);
  pokaz_tablice($tablica_niesort);
  
  $tablica_sort = sortuj_rosnaco($tablica_niesort);
  pokaz_tablice($tablica_sort);
?>
