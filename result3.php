<?php
$n = $_GET['input'];

$a = [];
for($i = 0;$i<$n;$i++){
    $a[$i]=$i+1;
}
$GLOBALS['q'] = 0;
//print_r($a);
f($n,$a);
echo $GLOBALS['q'];

function f($n,$a){
    for($i = 0;$i<$n;$i++){
        $v = $a[$i];
        $t = $a;
        array_splice($t,$i,1);
        //print_r($a);
        $r[0] = $v;
        fac($n,$t,$r);
    }
}

function fac($n,$a,$r){
    //print_r($r);
    $c = count((array)$r);
    //echo $c;
    if($c >= $n){
        for($i = 0;$i<$n;$i++){
            echo $r[$i];
        }
        $GLOBALS['q']++;
        echo '<br>';
    }else{
        for($i = 0;$i<count((array)$a);$i++){
            $v = $a[$i];
            $t = $a;
            array_splice($t,$i,1);
            $r[$c] = $v;
            fac($n,$t,$r);
        }
    }
}

?>