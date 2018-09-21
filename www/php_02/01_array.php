<?php
header('content-type:text/html;charset=utf-8');
echo '数组演示';

//1)定义一个多维数组
  $web1807 = array(
    array('姓名','年龄','性别'),
    array('uname'=>'李雷','age'=>15,'sex'=>'男'),
    array('uname'=>'韩梅梅','age'=>14,'sex'=>'女'),
    array('uname'=>'小明','age'=>19,'sex'=>'人妖'),
  );
  //在页面上输出显示数组
  var_dump($web1807);
  //输出数组长度(统计有多少学生？)
  echo 'web1807总共有'.count($web1807).'个学生';

  //显示成一个表格的形式
  //$key可以省略
  echo '<table border="1px" bordercolor="red" cellspacing="0" width="300" align="center" cellpadding="10">';
    for($i=0;$i<count($web1807);$i++){//循环行
      //如果是偶数行,加粉色的背景
      //如果是奇数行,加天蓝色背景
      
      if($i%2 == 0){
        echo '<tr bgcolor=pink>';
      }else{
        echo '<tr style="background:skyblue">';
      }
      foreach($web1807[$i] as $value){//循环列     
        echo '<td>'.$value.'</td>';
      }
      echo '</tr>';
    }
  echo '</table>';
?>