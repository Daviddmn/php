<?php

$text = 'Hello Friend';
$shiphri = '';
$gadanacvleba = 534;


$t=[];
for ($i = 0; $i < strlen($text); $i++){
    array_push($t,$text[$i]);
}


$anbani_upper = range("A","Z");
$anbani_lower = range('a','z');

foreach ($anbani_upper as $i) {
	for($x = 0; $x <= $gadanacvleba; $x++) {
		$anbani_upper[] = $i; 
    }
    

}
foreach ($anbani_lower as $i) {
	for($x = 0; $x <= $gadanacvleba; $x++) {
		$anbani_lower[] = $i; 
    }
    

}
    
       

foreach ($t as $i){
    if(ctype_upper($i)){
        $z= array_search($i,$anbani_upper);
        $shiphri .= $anbani_upper[$z+$gadanacvleba];
    } elseif(ctype_lower($i)){
        $w=array_search($i,$anbani_lower);
        $shiphri .= $anbani_lower[$w+$gadanacvleba];
        
    } else{
        $shiphri .= $i;
    }
	//echo $i;
    //echo '<br>';
}

echo $shiphri;

?>
