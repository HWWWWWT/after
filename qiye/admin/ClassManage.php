<?php
require("../mysql.php");
//删除分类
if($mark=="del")
{
	$sql="delete from pclass where id=$id";
$result=mysql_query($sql);

}
?>
<script language="JavaScript" type="text/JavaScript">

function ConfirmDelBig()
{
   if(confirm("确定要删除此大类吗？删除此大类同时将删除所包含的小类，并且不能恢复！"))
     return true;
   else
     return false;

}

function ConfirmDelSmall()
{
   if(confirm("确定要删除此小类吗？一旦删除将不能恢复！"))
     return true;
   else
     return false;

}
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
    <td align="center" valign="top"><table width="620" border="0" cellpadding="0" cellspacing="1" class="table_southidc">
      <tr>
        <td class="back_southidc"><strong>产 品 类 别 设 置</strong></td>
      </tr>
    </table>
    <table width="620" border="0" cellpadding="0" cellspacing="1" class="table_southidc">
        <tr bgcolor="A4B6D7" >
          <td height="25" align="center" class="back_southidc">分类名称</td>
          <td height="20" align="center" class="back_southidc">操作选项</td>
        </tr>
        <tr bgcolor="A4B6D7" class="tr_southidc">
          <td width="192" height="25" align="center">&nbsp;</td>
          <td width="513" height="20" align="center"><a href="ClassAdd.php">添加产品大类</a></td>
        </tr>
		<?php
$sql="select * from pclass where reid=0";
$result=mysql_query($sql);
while($data=mysql_fetch_array($result))
	{
		?>
        <tr bgcolor="ECF5FF" class="tdbg">
          <td width="192" height="22"><font color=blue><?php echo $data[name]?></font></td>
          <td align="center"><a href="ClassAdd.php?reid=<?php echo $data[id]?>">添加子分类</a>
            | <a href="class_edit.php?id=<?php echo $data[id]?>">修改</a>
            | <a href="?mark=del&id=<?php echo $data[id]?>" onClick="return ConfirmDelBig();">删除</a></td>
        </tr>
<?php
		  //根据顶级分类id取子分类
 $sql2="select * from pclass where reid=$data[id]";

	  $result2=mysql_query($sql2);
	  while($data2=mysql_fetch_array($result2))
		{

?>
        <tr bgcolor="#E3E3E3" class="tdbg">
          <td width="192" height="22">&nbsp;&nbsp;--<?php echo $data2[name]?></td>
          <td align="center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="class_edit.php?id=<?php echo $data2[id]?>">修改</a>
            | <a href="?mark=del&id=<?php echo $data2[id]?>" onClick="return ConfirmDelSmall();">删除</a></td>
        </tr>


<?php
		}}
	?>



      </table></td>
  </tr>
</table>


