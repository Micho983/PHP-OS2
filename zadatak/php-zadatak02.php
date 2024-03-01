<?php 
declare (strict_types=1);

//integer
$notebook = 1150;

//float
$mouse = 33.45;

//string
$packet = "Zajedno u paketu : notebook Acer i miš";

//boolean

$convertmouse = intval($mouse);
$sum = ($notebook + $convertmouse);
 if ($sum<=1900)
     {echo "Akcija";} 

// Ispis
echo "<br>Notebook Acer $notebook € <br> Razer miš $mouse € <br> $packet za samo ";

//referenca
$sum=&$notebook;
echo "$sum € <br>";
$notebook=1100;
echo "Ali sada i samo sada uz  dodatni popust $sum € <br>";

//konstante
define ("apsolutna_nula_°C",-273.15);
define("standarna_temperatura_K",273.15);
var_dump(apsolutna_nula_°C,standarna_temperatura_K);
echo "<br>";
echo (apsolutna_nula_°C);
echo "<br>";
echo (standarna_temperatura_K);


?>