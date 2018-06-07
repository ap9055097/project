<?php
$input = $_GET['input'];
$first = true;
$stack = array("");
$start = 0;
//if($input == ',') echo 'yes';
for($i = 0;$i<strlen($input);$i++){
    $l = substr($input,$i,1);
    //$start = $i;
    if($first){
        if($i == strlen($input)-1){
            array_push($stack,substr($input,$start,$i-$start+1));
            array_splice($stack,0,1);
        }else{
            if($l == ','){
                array_push($stack,substr($input,$start,$i-$start));
                array_splice($stack,0,1);
                $first = false;
                $start = $i+1;
            }
        }
    }else{
        if($i == strlen($input)-1){
            array_push($stack,substr($input,$start,$i-$start+1));
        }else{
            if($l == ','){
                array_push($stack,substr($input,$start,$i-$start));
                $start = $i+1;
            }
        }
    }
    //$k++;
}

//print_r($stack);
$bstack = array("");
if(count($stack) > 1){
    for($i = 0;$i<count($stack)-1;$i++){
        array_push($bstack,$stack[$i+1]);
    }
    array_push($bstack,$stack[0]);
}else{
    $bstack = array_push($bstack,$stack[0]);
}
array_splice($bstack,0,1);
//print_r($bstack);
//echo count($bstack);
$char = array("a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p",
"q", "r", "s", "t", "u", "v", "w", "x", "y", "z","A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P",
"Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z","0","1","2","3","4","5","6","7","8","9");
$num_char = array(97,98,99,100,101,102,103,104,105,106,107,108,109,110,111,112,113,114,115,116,117,118,119,120,121,122
    ,65,66,67,68,69,70,71,72,73,74,75,76,77,78,79,80,81,82,83,84,85,86,87,88,89,90,0,1,2,3,4,5,6,7,8,9);

//echo minus2(substr($bstack[0],0,1));
//echo strlen($bstack[0]);
$result = "";
for($i=0;$i<count($bstack);$i++){
    $add = "".minus2(substr($bstack[$i],0,1));
    for($k = 1;$k<strlen($bstack[$i]);$k++){
       
        $add = $add.minus2(substr($bstack[$i],$k,1));
    }
        //echo($a[0]);
    
    //echo $add;
    for($j=0;$j<count($char);$j++){
        if($add==$num_char[$j]){
            $add = $char[$j];
            break;
        }
        //break;
    }
            
    $result = $result.$add;
            
        
    
}
echo $result;

function minus2($n){
    if($n == 'A') $n = 10;
    if($n == 'B') $n = 11;
    $a = (int)$n-2;
    return $a;
}
?>
