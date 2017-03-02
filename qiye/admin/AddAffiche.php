<?php
require("../mysql.php");
//添加网站公告
if($mark=="save")
{
if($title=="" || $content=="")
{
echo "<script language=JavaScript>window.alert('公告标题和内容都不能为空！');history.back();</script>";
	exit;
}
$addtime=date("Y-m-d");
$sql="insert into affiche (title,content,addtime) values ('$title','$content','$addtime')";
$result=mysql_query($sql);
if($result)
{
	echo "<script language=JavaScript>{window.alert('添加成功！');window.location.href='Affiche.php'}</script>";
}
else
{
exit ("失败了");
}
}
?>

<html>
<head>
<title>####企业网站管理系统</title>
<link rel="Shortcut Icon" href="ico.ico">
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<style type="text/css">
<!--


.back_southidc{
	BACKGROUND-IMAGE:url('image/titlebg.gif');
	color:#048590;
	text-align:center;

}
.tang_southidc{
	color:#135294;
	text-align:center;
	font-weight: bold;
	background-color:#098f9b;

}
.table_southidc{BACKGROUND-COLOR:#098f9b; margin-bottom:5px;} /*表格的蓝色底线*/
.td_southidc{BACKGROUND-COLOR: F2F8FF;}
.tr_southidc{BACKGROUND-COLOR: ECF5FF;}

-->
</style>
<link href="css/content.css" rel="stylesheet" type="text/css">

<body>

<table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td align="center" valign="top"> <br> <strong><br>
      </strong> <br> <br>
      <table width="560" border="0" cellpadding="2" cellspacing="1" class="table_southidc">
        <tr>
          <td class="back_southidc" height="25"> <div align="center"><strong>发布网站公告 <br>
              </strong></div></td>
        </tr>
        <tr class="tr_southidc">
          <form method="POST" action="?mark=save">
            <input type=hidden readonly name="Name"   value="管理员">
            <td bgcolor="#A4B6D7">
<div align="center">
                <table width="100%" border="0" cellspacing="2" cellpadding="3">
                  <tr>
                    <td width="22%" height="25" bgcolor="#A4B6D7">
                      <div align="center">公告标题:</div></td>
                    <td width="78%">
<input name="title" type="text" size="45" maxlength="100">
                    </td>
                  </tr>
                  <tr>
                    <td height="22" bgcolor="#A4B6D7">
                      <div align="center">公告内容:</div></td>
                    <td>
<textarea rows="8" name="content" cols="45"></textarea>
                    </td>
                  </tr>
                  <tr>
                    <td height="25" colspan="2" bgcolor="#A4B6D7">
                      <div align="center">
                        <input type="submit" value="提交公告" name="B1">
                        <input type="reset" value="全部重写" name="B2">
                      </div></td>
                  </tr>
                </table>

              </div></td>
          </form>
        </tr>
      </table>
      <br> <br> </td>
  </tr>
</table>
