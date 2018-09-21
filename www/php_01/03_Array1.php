<?php
  header("content-type:text/html;charset=utf-8");
  $arr1 = array('apple',18,'boy','哈佛大学','handsome');
  echo "<ul>";    
    for($i=0;$i<count($arr1);$i++){
      if($i%2 == 0){
      echo '<li style="background:pink">'.$i.":".$arr1[$i]."</li>";
    }else{
      echo '<li style="background:skyblue">'.$i.":".$arr1[$i]."</li>";
    }
  }
  echo "</ul>";
?>