<?php
require("../mysql.php");
$string = $reid == "" ? " 添加顶级分类 " : " 添加子分类 ";
if ( $action == "save" )
{
		if ( $reid == "" )
		{
				$addsql = "insert into pclass (name,reid) values('".$name."','0')";
		}
		else
		{
				$addsql = "insert into pclass (name,reid) values('".$name."','{$reid}')";

		}
		mysql_query($addsql);
echo "<script>alert('成功添加分类');location.href='ClassManage.php'</script>";

		exit();
}
?>
<script language="JavaScript" type="text/JavaScript">
function checkBig()
{
  if (document.form1.name.value=="")
  {
    alert("名称不能为空！");
    document.form1.name.focus();
    return false;
  }
}
</script>

<script language="javascript">
<!--
  if (window == top)top.location.href = "Default.asp";
// -->
</script>
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
    <td align="center" valign="top"> <br> <table width="386" border="0" cellpadding="0" cellspacing="1" class="table_southidc">
      <tr>
        <td class="back_southidc"><strong>产 品 类 别 设 置</strong></td>
      </tr>
    </table>

      <form name="form1" method="post" action="" onSubmit="return checkBig()">
        <table width="386" border="0" align="center" cellpadding="0" cellspacing="1" class="table_southidc">
          <tr bgcolor="#A4B6D7" class="title">
            <td height="25" colspan="2" align="center" class="back_southidc"><strong>添加分类</strong></td>
          </tr>
          <tr bgcolor="#E3E3E3" class="tdbg">
            <td width="126" height="22" bgcolor="#A4B6D7"> <div align="right"><strong>分类名称：</td>
            <td width="254" bgcolor="#ECF5FF"> <input name="name" type="text" size="30" maxlength="50">
            </td>
          </tr>

          <tr bgcolor="#C0C0C0" class="tdbg">
            <td height="22" align="center" bgcolor="#A4B6D7">&nbsp; </td>
            <td height="22" align="center" bgcolor="#ECF5FF"> <div align="left">
                <input name="action" type="hidden" id="action" value="save">
                <input name="Add" type="submit" value="<?php echo $string?> ">
              </div></td>
          </tr>
        </table>
      </form></td>
  </tr>
</table>

