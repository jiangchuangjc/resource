<?php
  header("content-type:text/html;charset=utf-8");
  //1)声明一个数组
  //索引数组
  $arr1 = array('apple',10,3.14,true);
  echo $arr1;//Array
  echo "<hr color=red>";
  print_r($arr1);//Array ( [0] => apple [1] => 10 [2] => 3.14 [3] => 1 )
  echo "<hr color=blue>";
  var_dump($arr1);//array
              // 0 => string 'apple' (length=5)
              // 1 => int 10
              // 2 => float 3.14
              // 3 => boolean true
  echo "<hr color=green>";
  //输出一下数组里的元素:根据下标取元素
  echo $arr1[0]."<br>";//apple
  echo $arr1[3]."<hr>";//1  把true隐式转换成数值型

  //获取数组的长度:通过count(数组名) 方法获取
  echo 'arr1数组的长度是'.count($arr1)."<hr>";

  //for循环遍历取数组元素
  for($i=0; $i<count($arr1); $i++){
      echo '下标'.$i."取到的元素是:".$arr1[$i]."<br>";
  }
  
  //关联数组
  $arr2 = array();
  $arr2['uname'] = 'jiangchuang';
  $arr2['age'] = 10;
  $arr2['sex'] = 'boy';

  var_dump($arr2);
  echo $arr2['uname'];

  $arr3 = array('uname'=>'apple','age'=>18,'sex'=>'girl','school'=>'哈佛大学');
  var_dump($arr3);
  echo 'arr3数组的长度是'.count($arr3).'<hr>';//arr3数组的长度是4

  //如何循环遍历关联数组？取到下标和值
  foreach($arr3 as $key=>$value){
     echo '$key的值是'.$key.' $value的值是'.$value."<br>";
  }

  //1)自己创建一个一维数组,循环遍历成列表显示(偶数行/奇数行添加不同的颜色修饰)
  //2)在试着创建一个二维数组,循环遍历一下
?>