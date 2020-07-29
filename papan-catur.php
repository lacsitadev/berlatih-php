<?php

function papan_catur($angka) {
for($i=0; $i<$angka; $i++){
if($i%2==0){
	for($j=0; $j<$angka*2; $j++){
	if($j%2==0){echo "#";}
	else{echo "&nbsp &nbsp";}
    	}
	}
else{
	for($x=0; $x<$angka*2-1; $x++){
	if($x%2==0){echo "&nbsp &nbsp";}
	else{echo "#";}
    	}
	}
echo "<br>";
	}
}


// TEST CASES
echo papan_catur(4); 
echo "<br>";
/*
# # # #
 # # #
# # # #
 # # #
 */

echo papan_catur(8);
echo "<br>";
/* 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # #
# # # # # # # #
 # # # # # # #
*/
echo papan_catur(5); 
echo "<br>";
/*
# # # # #
 # # # #
# # # # #
 # # # # 
# # # # #
*/



?>