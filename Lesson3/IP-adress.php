<?php

$number = 321;
$float = 654.21;
$string = 'Tolik is 20';
$another_string = '654';
$bool = true; // true|false
$arr = [2, 3, 4, 5];

// echo '<pre>';
// print_r($arr[2]);
// echo '</pre>';

$arr_assoc = [
2 =>'Two',
3 => 'Three',
4 => 'Four',
'number' => 8615216,
'float'=> 86.15216,
'bool' => true,
'boolIF' => false,
'arr' =>[1,2,3],
'null' => null,
'object' =>(object)[
    'name' =>'Sveta',
    'age' => 25,


]


];
// echo '<pre>';
// print_r($arr_assoc);
// echo '</pre>';






function check_ip($ip_adress)
{
 $ip_adress_fragments=explode('.',$ip_adress);
   if (count($ip_adress_fragments) !== 4){
 return false;
}

foreach ($ip_adress_fragments as $ip_fragment){
   if($ip_fragment < 0){
return false;
}
   if ($ip_fragment > 255){
       return false;
   }
}

return true;


}


$ip= '132.132.123.123';
$is_ip=check_ip($ip);
if($is_ip){
    echo"This string <b>$ip</b> is ip";
}else {
    echo"<b>$ip</b> - wrong format";

}
echo '<hr>';

$ip= '132.132.123';
$is_ip=check_ip($ip);
if($is_ip){
    echo"This string <b>$ip</b> is ip";
}else {
    echo"<b>$ip</b> - wrong format";
}
echo '<hr>';
    
    
    
    $ip= '132.132.123.325';
    $is_ip=check_ip($ip);
    if($is_ip){
        echo"This string <b>$ip</b> is ip";
    }else {
        echo"<b>$ip</b> - wrong format";
    
    }




