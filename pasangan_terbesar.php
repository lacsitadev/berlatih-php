<?php

function pasangan_terbesar($angka){
$pasangan=[];
for($i=0; $i<strlen($angka)-1; $i++){
$sub = substr($angka, $i, 2);
$pasangan[]= $sub;}
echo max($pasangan);
}

// TEST CASES
echo pasangan_terbesar(641573); // 73
echo "<br>";
echo pasangan_terbesar(12783456); // 83
echo "<br>";
echo pasangan_terbesar(910233); // 91
echo "<br>";
echo pasangan_terbesar(71856421); // 85
echo "<br>";
echo pasangan_terbesar(79918293); // 99

?>