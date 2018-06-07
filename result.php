<?php
$input = $_GET['input'];

$stack = array(substr($input,0,1));
for($i = 0;$i<strlen($input)-1;$i++){
    array_push($stack,substr($input,$i+1,1));
    //echo count($stack);
}

if(count($stack) > 1){
    $bstack = array($stack[count($stack)-1]);
    for($i = 0;$i<count($stack)-1;$i++){
        array_push($bstack,$stack[$i]);
    }
}else{
    $bstack = array($stack[0]);
}

//echo $bstack[2];
//echo plus2(8);

$char = array("a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p",
"q", "r", "s", "t", "u", "v", "w", "x", "y", "z","A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P",
"Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z","0","1","2","3","4","5","6","7","8","9");
$num_char = array(97,98,99,100,101,102,103,104,105,106,107,108,109,110,111,112,113,114,115,116,117,118,119,120,121,122
    ,65,66,67,68,69,70,71,72,73,74,75,76,77,78,79,80,81,82,83,84,85,86,87,88,89,90,0,1,2,3,4,5,6,7,8,9);
//echo $char[53]."=".$num_char[53];

//if($stack[0] == $char[25]) echo 'yes';
//echo plus2(substr($num_char[25],2,1));
$result = "";
for($i=0;$i<count($bstack);$i++){
    for($j=0;$j<count($char);$j++){
        if($bstack[$i]==$char[$j]){
            
            $add = "".plus2(substr($num_char[$j],0,1));
            for($k = 1;$k<strlen($num_char[$j]);$k++){
                
                $add = $add.plus2(substr($num_char[$j],$k,1));
            }
            //echo($a[0]);
            
            $result = $result.$add;
            if($i != count($bstack)-1) $result = $result.',';
        }
    }
}
echo $result;


function plus2($n){
    $a = (int)$n+2;
    if($a == 10) $a = 'A';
    else if($a == 11) $a = 'B';
    return $a;
}
?>