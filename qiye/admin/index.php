<?php
session_start();
if($_SESSION[login_name]=="")
{	echo ("<script>location.href='login.php';</script>");
		exit;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>企业网站后台管理系统</title>
</head>


<frameset rows="76,*" cols="*" frameborder="no" border="0" framespacing="0">
  <frame src="top.php" name="top" scrolling="No" noresize="noresize" id="top" title="top" />
  <frameset rows="*" cols="190,*" framespacing="0" frameborder="no" border="0">
    <frame src="menu.php" name="left" scrolling="No" noresize="noresize" id="left" title="left" />
    <frame src="sysadmin_view.php" name="main" id="main" title="main" />
  </frameset>
</frameset>
<noframes><body>
</body>
</noframes></html>