<?php
  header("content-type:text/html;charset=utf-8");
  $arr1 = array('uname'=>'apple','age'=>18,'sex'=>'girl','school'=>'哈佛大学','information'=>'beautiful girl');
  echo "<ul>";    
  $i = 0;
  foreach($arr1 as $key=>$value){ 
    if($i%2 == 0){
    echo "<li style='background:lightgreen'>".$key.':'.$value."</li>";   
  }else{
    echo "<li style='background:purple'>".$key.':'.$value."</li>";
  }
  $i =$i+1;
}
  echo "</ul>";
?>