<?php
// 检查空字段
if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['message'])		||
//	empty($_POST['phone'])		||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "未提供参数！";
	return false;
   }
	
$name = $_POST['name'];
$email_address = $_POST['email'];
$message = $_POST['message'];
$phone = $_POST['phone'];
	
// 创建电子邮件并发送消息
$to = '2470508462@qq.com'; // 在“”替换之间添加您的电子邮件地址yourname@yourdomain.com-这是表单将向其发送消息的位置。
$email_subject = "从个人网站收到的电子邮件:  $name";
$email_body = "您已从您的网站联系人表单中收到一条新消息。\n\n"."以下是详细信息:\n\nName: $name\n\nEmail: $email_address\n\nPhone: $phone\n\nMessage:\n$message";
//$headers = "From: ifdh@qq.com\n";  这是生成消息的电子邮件地址。我们建议使用以下内容noreply@yourdomain.com.
//$headers .= "Reply-To: $email_address";	
$i=mail($to,$email_subject,$email_body);
//echo $i;
if($i==1){
return true;
}else{
return false;
}

 ?>