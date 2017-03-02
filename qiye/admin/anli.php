<?php
require("../mysql.php");
//删除
if($mark=="del")
{
	$sql="delete from anli where id=$id";
$result=mysql_query($sql);

}
//取消审核
if($act=="shenhe")
{
	$sql="update anli set shenhe=0 where id=$id";
$result=mysql_query($sql);
if($result)
{
	echo "<script language=JavaScript>{window.alert('取消审核成功！');window.location.href='anli.php'}</script>";
}
else
{
exit ("失败了");
}
}
?>
<script language=javascript>
function ConfirmDel()
{
   if(confirm("确定要删除此记录吗？"))
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
    <td width="862" align="center" valign="top">
      <br>

      <table width="556" border="0" cellpadding="2" cellspacing="1" class="table_southidc">
        <tr>
          <td width="550" height="25" class="back_southidc">
            成功案例管理</td>
        </tr>
        <tr>
          <td height="66">
            <div align="center">
              <table width="100%" height="62" border="0" align="center" cellpadding="0" cellspacing="1" class="tang_southidc">
                <tr bgcolor="#ECF5FF" class="title">
                  <td width="78" align="center"><strong>序号</strong></td>

                  <td width="265" height="29" align="center"><strong>成功案例名称</strong></td>
				  <td width="108" align="center"><strong> 审核状态</strong></td>
                  <td width="158" align="center"><strong> 操作</strong></td>
                </tr>
<?php
$sql="select * from anli where shenhe=1 order by id DESC";
$result=mysql_query($sql);
$i=0;
while($data=mysql_fetch_array($result))
{
	$i++;
?>
                <tr class="tdbg">
                  <td align="center" bgcolor="#ECF5FF"><?php echo $i;?></td>

                  <td height="28" align="center" bgcolor="#ECF5FF"><?php echo $data[title];?></td>
				     <td height="28" align="center" bgcolor="#ECF5FF"><?php
	if($data[shenhe]==0) echo "未审核";
else
echo "已审核";
	?>
</td>
                  <td align="center" bgcolor="#ECF5FF">


                    &nbsp;<a href="anliModify.php?id=<?php echo $data[id]?>">修改</a>&nbsp;

 &nbsp;<a href="?id=<?php echo $data[id]?>&act=shenhe">取消审核</a>&nbsp;

                    &nbsp;<a href="?id=<?php echo $data[id]?>&mark=del" onClick="return ConfirmDel();">删除</a></td>
                </tr>


<?php
}
	?>

              </table>
            </div></td>
        </tr>
      </table>


