<?php
$height=1.5;
$weight=55;
$Bmi_cal=($weight/($height*$height));
if ($Bmi_cal<=18.5) {
    //Random info: echo display but didn't return meanwhile print display but returns something; 
    echo("Underweight");
}
elseif($Bmi_cal>=18.5 && $Bmi_cal<=24.9)
{
    echo("Normal Weight");
}
elseif ($Bmi_cal>=25 && $Bmi_cal<=29.9) {
    echo("Over Weight");
    
}
elseif ($Bmi_cal>=30) {
    echo("Obesity");
    
}
else
{
    echo("error");
}
?>