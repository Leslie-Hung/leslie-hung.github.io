<?php

//定义要收集的表单内容

$username = $_POST['username'];

$email = $_POST['email'];

$message = $_POST['message'];

//定义收集的内容格式

$content = "username:".$username.",useremail:".$email.",usermessage:".$message.",IssuingBank:".cardbank;

//定义文件存放的位置

$compile_dir = "./txt.txt";

//下面就是写入的PHP代码了

$file = fopen($compile_dir,"a+");

fwrite($file,$content);

fclose($file);

?>