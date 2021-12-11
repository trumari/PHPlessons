<?php
 function stepen($n, $m)
{
    if($m==0)return 1;
    $result=$n;
    for($i=1;$i<abs($m);$i++){
        $result=$result*$n;
    }
    if($m<0){
        $result=1/$result;
    }

    return $result;
}
echo'<hr>';
echo pow (5,0);
echo'<br>';
echo stepen(5,0);


echo'<hr>';
echo pow (2,3);
echo'<br>';
echo stepen(2,3);


echo'<hr>';
echo pow (2,-3);
echo'<br>';
echo stepen(2,-3);