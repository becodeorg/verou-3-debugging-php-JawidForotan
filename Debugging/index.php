<?php
echo "Exercise starts here:<hr/> <br/>";


function myFunction($x){
$desc = "The  exercise $x starts here <hr/><br/>";
echo $desc;
}
myFunction(1);

myFunction(2);
$days = ["monday", "tuesday", "wednesday", "thursday", "friday", "saturday", "sunday"];
$monday = "$days[0]<br/>";
$tuesday = $days[1];
echo $monday;
echo $tuesday;