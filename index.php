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
if(5==5)

    echo "5";

endif(6==6)

    echo "6"

endif(7==7)
{
    echo "7"
}
else
{
    echo "Wszystko jest źle"
}
?>