<?php
  $name="智弥";
  
  if ($name ==="智弥"){
      echo "私は智弥です";
  }else if($name !== "智弥"){
      echo "智弥ではありません";
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