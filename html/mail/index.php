<?php
if (isset($_REQUEST['message'])):
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>提交建议页面</title>
<meta name="description" content="这是一个储存各类文档程序的私人服务器，它并不是公开的。" />
<link rel="stylesheet" type="text/css" href="../styles.css" />
<link rel="shortcut icon" href="../初音图标.ico" />
</head>
<body>
<center>
<img id="titimg" src="../标题图片.webp" alt="手绘的初音未来" title="野生的初音" onerror="this.src='../标题图片.png';this.onerror=''" />
<hr />
<h1>提交成功OWO</h1>
<a class="buttons" href="../">回到主页</a>
</center>
</body>
</html>
<?php
$message = $_REQUEST['message'];
mail( "408155087@qq.com", "来自erhandsome的用户建议", $message, "From: suggest_admin <suggest_admin@erhandsome.org>" );
mail( "b13253@gmail.com", "来自erhandsome的用户建议", $message, "From: suggest_admin <suggest_admin@erhandsome.org>" );
else:
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>提交建议页面</title>
<meta name="description" content="这是一个储存各类文档程序的私人服务器，它并不是公开的。" />
<link rel="stylesheet" type="text/css" href="../styles.css" />
<link rel="shortcut icon" href="../初音图标.ico" />
</head>
<body>
<center>
<img id="titimg" src="../标题图片.webp" alt="手绘的初音未来" title="野生的初音" onerror="this.src='../标题图片.png';this.onerror=''" />
<hr />
<form method='post' action='index.php'>
  <h1>您的建议</h1>
  <textarea name='message' rows='15' cols='40'>
  </textarea><br />
  <input type="submit" name="submit" value="发送建议 &gt;w&lt;" />
</form>
<br />
<div>
<a class="buttons" href="/~nangcr/">回到主页</a></div>
</center>
</body>
</html>
<?php
endif;
?>
