<?php 

#if---------

$a = 25;
$b = 15;

if ($a < $b) {
	echo "a es menor que b";
}
else if ($a > $b) {
	echo "a es mayor que b";
}
else{
	echo "a es igual a b";
}

echo "<br><br>";

#switch
 
$dia = 'martes';

switch ($dia) {
	case 'lunes':
		echo "por que lunes!";
		break;
	case 'martes':
	    echo "hoy es martes";
	    break;
	case 'miercoles':
	    echo "hoy es miercoles";
	    break;    
	default:
		echo "no es ningund día de la semana";
		break;
}

echo "<br><br>";

#while

$c = 1;

while ( $c <= 10) {
	echo $c;
	$c++;
}

echo "<br><br>";

#do while

$d = 1;

do{
	echo $d;
	$d++;
}
while ( $d <= 10);

echo "<br><br>";

#for

for ($i=0; $i <= 10; $i++){
	echo $i;
}

?>