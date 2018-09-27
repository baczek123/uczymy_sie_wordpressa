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

