<?php
$input = $_POST['valin'];
//print_r($input);
//$a = [];
$max = 0;
$m=0;
//$b = [];//array($input[0]);
// $c =[];


for($i = 0;$i<count($input);$i++){
    $count = 0;
    
    for($j = $i+1;$j<count($input);$j++){
        if($input[$i] == $input[$j]){
            $count++;
        }
    }
    
    if($count>=$max){
        if($count == $max){
            //array_push($a,$input[$i]);
            $a[$m++] = $input[$i];
        }else{
            $a[] = "";
            $m=0;
            $a[$m++]=$input[$i];
            $max = $count;
        }
    }
}
print_r($a);
echo "value : ".$m."<br>";
for($i = 0;$i<$m;$i++){
    echo $a[$i]." มี ".($max+1)." จำนวน<br>";
}



?>