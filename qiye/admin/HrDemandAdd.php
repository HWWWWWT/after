<?php
require("../mysql.php");
//添加企业文化
if($mark=="save")
{
if($name=="" || $content=="")
{
echo "<script language=JavaScript>window.alert('标题和内容都不能为空！');history.back();</script>";
	exit;
}
$addtime=date("Y-m-d");
$sql="INSERT INTO hr (name ,num ,address ,salary ,adddate ,content ) VALUES ('$name','$num','$address','$salary','$adddate','$content')";
$result=mysql_query($sql);

if($result)
{
	echo "<script language=JavaScript>{window.alert('添加成功！');window.location.href='HrDemand.php'}</script>";
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
    <td align="center" valign="top"> <br>
      <table width="650" border="0" cellpadding="2" cellspacing="1" class="table_southidc">
        <tr>
          <td height="25" class="back_southidc">
            发布招聘信息</td>
        </tr>
        <tr>
          <form method="post" action="?mark=save">
            <td><div align="center">
                <table width="100%" border="0" cellpadding="0" cellspacing="1" class="table_southidc">
                  <tr bgcolor="#ECF5FF">
                    <td width="19%" height="25">
                      <div align="center">招聘对象:</div></td>
                    <td width="81%">
                      <input name="name" type="text" id="HrName" size="30" maxlength="30"></td>
                  </tr>
                  <tr bgcolor="#ECF5FF">
                    <td height="22">
                      <div align="center">招聘人数:</div></td>
                    <td>
                      <input name="num" type="text" id="HrRequireNum" size="5" maxlength="30">
                      人</td>
                  </tr>
                  <tr bgcolor="#ECF5FF">
                    <td height="22">
                      <div align="center">工作地点:</div></td>
                    <td height="-4">
                      <input name="address" type="text" id="HrAddress" size="50" maxlength="60">
                    </td>
                  </tr>
                  <tr bgcolor="#ECF5FF">
                    <td height="22">
                      <div align="center">工资待遇:</div></td>
                    <td height="-1" bgcolor="#ECF5FF">
                      <input name="salary" type="text" id="HrSalary" size="20" maxlength="50">
                    </td>
                  </tr>
                  <tr bgcolor="#ECF5FF">
                    <td height="22">
                      <div align="center">发布日期:</div></td>
                    <td>                    <input name="adddate" type="text" id="HrDate" value="<?php echo date("Y-m-d")?>" size="12" maxlength="50"></td>
                  </tr>

                  <tr bgcolor="#ECF5FF">
                    <td height="22">
                      <div align="center">招聘要求:</div></td>
                    <td height="10">
                       <textarea name="content" cols="50" rows="20"></textarea>
 </td>
                  </tr>
                  <tr bgcolor="#ECF5FF">
                    <td height="25" colspan="2">
                      <div align="center">
                        <input type="submit" value="确定">
                        &nbsp;
                        <input type="reset" value="取消">
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
