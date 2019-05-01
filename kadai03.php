<?php
  $name="智弥";
  
  if ($name=="智弥"){
      echo "私はあなたの名前です";
  }else if($name!= "智弥"){
      echo "あなたの名前ではありません";
  }
  
  
  $total=0;
  echo $total;
  
  for($i=0;$i<=10000;$i++){
    $total+=$i;
  }
  echo $total;
  
  $fruits=array("grape","banana","pine","pear","lychee");
  foreach($fruits as $fruit){
    echo "好きな果物は". $fruit;
    echo "\n";
  }
  
  
  $start = 1;
  $end = 100;

  for($i = $start; $i <= $end; $i++){

  if($i % 5 == 0){
    echo $i;
    echo "\n";
  }
}