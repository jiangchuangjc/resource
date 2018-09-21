<?php
header("content-type:text/html;charset=utf-8");

//1)输出语句1:
echo "Hello World!";
echo '<hr color=blue>';
//2)输出语句2
print_r('banana');
//3)输出语句3
var_dump('国庆节7天假期快乐');
//4)定义变量
//-1.字符串类型
$userName = 'jiangchuang';
$userSex = '男';
$school = '哈佛大学';
//拼接用.
echo '我的名字是'.$userName.',性别'.$userSex.',毕业于'.$school.'<hr>';

//-2.数值
$num1 = 20;
$num2 = 3.1415956;
var_dump($num1,'<hr>');
var_dump($num2,'<hr>');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  这是HTML网页的主体内容区
  <hr>
</body>
</html>
<?php
   echo "php输出在html网页标签的下面";
?>
