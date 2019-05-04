<?php

//~課題1~

function d($i){
    return $i*2;
}

echo d(100);





//~課題2～
function f($a,$b){
    return $a+$b;
}

echo f(2,2);

//~課題3~

function kakezan($arr){
    $result=1;
    foreach($arr as $a){
        $result*=$a;
    }
    return $result;
}
$arr =array(1, 3, 5 ,7, 9) ;
echo kakezan($arr);


//~課題４~

function max_array($arr){
$max_number = $arr[0];
foreach($arr as $a){
if ($a > $max_number){
$max_number = $a;
}
}
return $max_number;
}

echo max_array($arr);

//~課題５~
//strip_tagsの活用


$html_body="課題<br><p>課題</p><storong>課題</storong>";
$html_body=strip_tags($html_body);
echo $html_body;

//array_pushの活用

$fruits=array("banna","appole","cherry");
array_push($fruits,"grape");

print_r($fruits);

//array_mergeの活用


$fruits = array('appole','grape');
$all= array_merge($fruits,array('cherry','zakuro'));

print_r($all);

//time, mktimeの活用


echo time();


echo mktime(1,1,1,8,19,2019);

//dateの活用

echo date("y/m/d");
