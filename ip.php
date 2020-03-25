<?php
$ip=$_SERVER["REMOTE_ADDR"];
file_put_contents('ip.txt',$ip,FILE_APPEND);//建立ip.txt文件存ip
//header('Location: http://www.baidu.com/');
?>
