<?php
if (isset($_REQUEST['message'])):
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>提交建议页面</title>
<meta name="description" content="这是一个储存各类文档程序的私人服务器，它并不是公开的。" />
<link rel="stylesheet" type="text/css" href="styles.css" />
<link rel="shortcut icon" href="初音图标.ico" />
</head>
<body>
<center>
<img id="titimg" src="标题图片.webp" alt="手绘的初音未来" title="野生的初音" onerror="this.src='标题图片.png';this.onerror=''" />
<hr />
<?php if(isset($_REQUEST["email"]) && $_REQUEST["email"]!="" && !filter_var($_REQUEST["email"], FILTER_VALIDATE_EMAIL)): ?>
<h1>邮件格式错误</h1>
<a class="buttons" href="./">回到主页</a>
</center>
</body>
</html>
<?php die(); ?>
<?php else: ?>
<h1>提交成功 O&omega;O</h1>
<a class="buttons" href="./">回到主页</a>
</center>
</body>
</html>
<?php endif; ?>
<?php
$message = $_REQUEST['message']."\r\n\r\n--\r\nIP Address: ".$_SERVER["REMOTE_ADDR"]."\r\nUser-Agent: ".$_SERVER["HTTP_USER_AGENT"]."\r\n";
$headers = "From: MidyMidy <no-reply@midymidy.com>\r\n" .
           "Content-Type: text/plain; charset=utf-8";
if(isset($_REQUEST["email"]) && $_REQUEST["email"]!="") $headers = $headers . "\r\nReply-To: <".$_REQUEST["email"].">";
mail( "408155087@qq.com", "MidyMidy用户反馈", $message, $headers );
mail( "b13253@gmail.com", "MidyMidy用户反馈", $message, $headers );
else:
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>提交建议页面</title>
<meta name="description" content="这是一个储存各类文档程序的私人服务器，它并不是公开的。" />
<link rel="stylesheet" type="text/css" href="styles.css" />
<link rel="shortcut icon" href="初音图标.ico" />
</head>
<body>
<center>
<img id="titimg" src="标题图片.webp" alt="手绘的初音未来" title="野生的初音" onerror="this.src='标题图片.png';this.onerror=''" />
<hr />
<form method='post' action='mail.php'>
  <h1>您的建议</h1>
  <textarea name='message' rows='15' cols='40'></textarea><br />
  <span style="font-size: smaller">您的邮件地址(选填)：</span><input width="20" name="email" /><br />
  <input type="submit" name="submit" value="发送建议 &gt;&omega;&lt;" />
</form>
<br />
<div>
<a class="buttons" href="./">回到主页</a></div>
</center>
</body>
</html>
<?php
endif;
?>
