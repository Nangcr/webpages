<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>上传文件</title>
<meta name="description" content="这是一个储存各类文档程序的私人服务器，它并不是公开的。" />
<link rel="stylesheet" type="text/css" href="/~nangcr/styles.css" />
<link rel="shortcut icon" href="初音图标.ico" />
</head>
<body>
<center>
<img id="titimg" src="标题图片.webp" alt="手绘的初音未来" title="野生的初音" onerror="this.src='标题图片.png';this.onerror=''" />
<hr />
<h1>上传结束</h1>
</center>
<?php
  if ($_FILES["file"]["error"] > 0):
?>
<h3>上传失败！</h3>
<div>
<a class="buttons" href="/~nangcr/share/">再次上传</a><br />
<a class="buttons" href="/~nangcr/">返回主页面</a></div>
<?php
  elseif(file_exists("/home/nangcr/public_html/downloads/公众分享/" . $_FILES["file"]["name"])):
?>
<h3>该文件已存在.</h3>
<div>
<a class="bbuttons" href="/~nangcr/share/">另外上传</a><br />
<div><a class="bbuttons" href="/~nangcr/">返回主页面</a></div>
<?php
  else:
     move_uploaded_file($_FILES["file"]["tmp_name"],
     "/home/nangcr/public_html/downloads/公众分享/" . $_FILES["file"]["name"]);
?>
<?=$_FILE["file"]["name"]?>
<h3>上传成功=W=</h3>
<hr />
<div>
<a class="bbuttons" href="/~nangcr/share/">继续上传</a><br />
<div><a class="bbuttons" href="/~nangcr/">返回主页面</a><br />
<a class="bbuttons" href="/~nangcr/downloads/公众分享/">查看已上传的文件</a></div>
<?php endif;
?>
