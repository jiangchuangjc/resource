<?php
  header("content-type:text/html;charset=utf-8");
  $arr1 = array(
    array('apple',18,'boy','哈佛大学','handsome boy'),
    array('banana',16,'girl','麻省理工大学','beautiful girl','perfect'),
    array('lilei',30,'man','斯坦福大学','clever man'),
    array('wangmeimei',28,'woman','北京大学','nice woman')
);
  for($i=0;$i<count($arr1);$i++){
    for($j=0;$j<count($arr1[$i]);$j++){
      echo $arr1[$i][$j]."<br>";
    }
    echo '<hr>';
  }
?>