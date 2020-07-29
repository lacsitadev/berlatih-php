<?php
function ubah_huruf($string){
	$shift = 1;
	$shiftedString = "";
	
	for ($i = 0; $i < strlen($string); $i++)
	{
		$ascii = ord($string[$i]);
		$shiftedChar = chr($ascii + $shift);
	
		$shiftedString .= $shiftedChar;
	}
	
	echo $shiftedString;
}

// TEST CASES
echo ubah_huruf('wow'); // xpx
echo "<br>";
echo ubah_huruf('developer'); // efwfmpqfs
echo "<br>";
echo ubah_huruf('laravel'); // mbsbwfm
echo "<br>";
echo ubah_huruf('keren'); // lfsfo
echo "<br>";
echo ubah_huruf('semangat'); // tfnbohbu

?>