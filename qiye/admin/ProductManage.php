<?php
require("../mysql.php");
//删除
if($mark=="del")
{
	$sql="delete from product where id=$id";
$result=mysql_query($sql);

}
if($mark=="delall")
{
	for($i=0;$i<count($ids);$i++)
		{
		$sql="delete from product where id=$ids[$i]";
//echo $sql;
$result=mysql_query($sql);
	}
//print_r($_POST);
}
//取消审核
if($act=="shenhe")
{
	$sql="update product set shenhe=0 where id=$id";
$result=mysql_query($sql);
if($result)
{
	echo "<script language=JavaScript>{window.alert('取消审核成功！');window.location.href='ProductManage.php'}</script>";
}
else
{
exit ("失败了");
}
}
?>
<SCRIPT language=javascript>
function unselectall()
{
    if(document.del.chkAll.checked){
	document.del.chkAll.checked = document.del.chkAll.checked&0;
    }
}

function CheckAll(form)
  {
  for (var i=0;i<form.elements.length;i++)
    {
    var e = form.elements[i];
    if (e.Name != "chkAll")
       e.checked = form.chkAll.checked;
    }
  }
function ConfirmDel()
{
   if(confirm("确定要删除选中的产品吗？一旦删除将不能恢复！"))
     return true;
   else
     return false;

}

</SCRIPT>

<script language="javascript">
<!--
  if (window == top)top.location.href = "Default.php";
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
    <td width="862" align="center" valign="top"> <br>

      <table width="720" border="0" cellpadding="0" cellspacing="1" class="table_southidc">
        <tr>
          <td class="back_southidc"><strong>产
        品 管 理</strong></td>
        </tr>
      </table>
<br> <table width="725" border="0" cellpadding="0" cellspacing="1" class="table_southidc">
        <tr class="tdbg">
          <form name="searchsoft" method="get" action="?act=search">
            <td height="30" align="left" valign="middle"> <strong>查找产品：</strong> <input name="title" type="text" class=smallInput id="Title" size="20" maxlength="50">
            <input name="Query" type="submit" id="Query" value="查 询"> &nbsp;&nbsp;请输入产品名称。如果为空，则查找所有产品。</td>
          </form>
        </tr>
      </table>
      <form style="margin-top:5px;" name="del" method="Post" action="?mark=delall" onSubmit="return ConfirmDel();">


        <table width="720" border="0" cellpadding="0" cellspacing="1" class="table_southidc" style="word-break:break-all">
          <tr bgcolor="A4B6D7" class="title">
            <td width="47" height="25" align="center"><strong>选中</strong></td>

            <td width="120" align="center"><strong>产品编号</strong></td>
            <td width="231" align="center" bgcolor="#A4B6D7" ><strong>产品名称</strong></td>
            <td width="68" align="center" ><strong>产品价格</strong></td>
            <td width="68" align="center" ><strong>审核情况</strong></td>
            <td width="80" align="center" ><strong>操作</strong></td>
          </tr>
<?php
	   //分页
$page = empty($_REQUEST['page']) ? '1' : intval($_REQUEST['page']);
$sql = "SELECT * FROM product where title like '%$title%' and shenhe=1";
 $result=mysql_query($sql);
 $count = mysql_num_rows($result);
$size =10;
$pager = get_pager('',array(),$count,$page,$size);
$sql="select * from product where title like '%$title%' and shenhe=1 order by id DESC limit $pager[start],$pager[size]";
$result=mysql_query($sql);
$i=0;
while($data=mysql_fetch_array($result))
{
	$i++;
?>
          <tr class="tdbg">
            <td width="47" height="22" align="center" bgcolor="#A4B6D7">
              <input name='ids[]' type='checkbox' onClick="unselectall()" id="ID" value='<?php echo $data[id]?>'>
            </td>
            <td width="120" align="center" bgcolor="#ECF5FF"><?php echo $data[bianhao]?></td>
            <td bgcolor="#ECF5FF">&nbsp;<a href="../ProductShow.php?id=<?php echo $data[id]?>" target="_blank"><?php echo $data[title]?></a></td>
            <td width="68" align="center" bgcolor="#ECF5FF"><?php echo $data[price]?>元</td>
            <td width="68" align="center" bgcolor="#ECF5FF">
<?php
	if($data[shenhe]==0) echo "未审核";
else
echo "已审核";
	?>

               </td>
            <td width="80" align="center" bgcolor="#ECF5FF"> <a href="ProductModify.php?id=<?php echo $data[id]?>">修改</a>
			 <a href="?id=<?php echo $data[id]?>&act=shenhe">取消审核</a>
              <a href="?id=<?php echo $data[id]?>&mark=del" onClick="return ConfirmDel();">删除</a>
            </td>
          </tr>
<?php
				  }
?>


        </table>
        <table width="720" border="0" cellpadding="0" cellspacing="0" class="table_southidc">
          <tr>
            <td width="250" height="30"><input name="chkAll" type="checkbox" id="chkAll" onclick=CheckAll(this.form) value="checkbox">
              选中本页显示的所有产品</td>
            <td><input name="submit" type='submit' value='删除选定的产品' >
              <input name="Action" type="hidden" id="Action" value="Del"></td>
          </tr>
        </table>
        <table align='center'><tr><td><?php require("../page.php") ?></td></tr></table>
      </form>
      </td>
  </tr>
</table>

