<?php
header("content-type:text/html;charset=utf-8");

//2)string格式
//echo '<br>我接收到信息了';
//通过post方式发送的数据必须通过$_POST接收
//echo $_POST;//php语法里的数组,js不认识
var_dump($_POST);
echo '国庆节快乐';

//2)html标记格式
//echo "<div><h3>中秋节,发月饼啦！</h3><p>作者:".$_POST['uname']."</p></div>";

//3)json格式
   /*title:'十一国庆假期'
     author:'jiangchuang'
     time:2018/9/14 17:14:15
     content:'祝大家国庆节愉快,吃好喝好玩好,祝大家国庆节愉快,吃好喝好玩好,祝大家国庆节愉快,吃好喝好玩好,祝大家国庆节愉快,吃好喝好玩好,'
   */
  // $article = array(
  //   'title'=>'十一国庆假期',
  //   'author'=>'jiangchuang',
  //   'time'=>'2018/9/14 17:14:15',
  //   'content'=>'祝大家国庆节愉快,吃好喝好玩好,祝大家国庆节愉快,吃好喝好玩好,祝大家国庆节愉快,吃好喝好玩好,祝大家国庆节愉快,吃好喝好玩好'
  // );

  // 要把PHP的数组转成js认识的json格式
  //echo json_encode($article);
?>