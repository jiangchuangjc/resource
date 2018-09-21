<?php
  header("content-type:text/html;charset=utf-8");
  echo '国庆节快乐';
  echo '<br>用get方式提交数据';
  var_dump($_GET);
  echo '<br>用post方式提交数据';
  var_dump($_POST);
  //访问文件
  var_dump($_FILES);
  $file = $_FILES['photo']['tmp_name'];
  $name = $_FILES['photo']['name'];
  move_uploaded_file($file,'./image/'.$name);
?>