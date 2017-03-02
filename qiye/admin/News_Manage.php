<?php
require("../mysql.php");
//删除
if($mark=="del")
{
	$sql="delete from news where id=$id";
$result=mysql_query($sql);

}
if($mark=="delall")
{
	for($i=0;$i<count($ids);$i++)
		{
		$sql="delete from news where id=$ids[$i]";
//echo $sql;
$result=mysql_query($sql);
	}
//print_r($_POST);
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
   if(confirm("确定要删除选中的新闻吗？一旦删除将不能恢复！"))
     return true;
   else
     return false;

}

</SCRIPT>


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
      <table width="620" border="0" cellpadding="0" cellspacing="1" class="table_southidc">
        <tr>
          <td class="back_southidc">新 闻 资 讯 管 理</td>
        </tr>
      </table>
  <br> <table width="620" border="0" cellpadding="0" cellspacing="1" class="table_southidc">
        <tr class="tdbg">
          <form name="searchsoft" method="get" action="News_Manage.php">
            <td height="30"> <strong>查找新闻：</strong> <input name="Title" type="text" class=smallInput id="Title3" size="20" maxlength="50">
              <input name="Query" type="submit" id="Query" value="查 询"> &nbsp;&nbsp;请输入新闻名称。如果为空，则查找所有新闻。</td>
          </form>
        </tr>
      </table>
      <form name="del" method="Post" action="?mark=delall" onSubmit="return ConfirmDel();">
        <table width="620" border="0" cellpadding="0" cellspacing="1" bgcolor="#000000" class="table_southidc">
          <tr bgcolor="#A4B6D7">
            <td height="25"><a href="News_Manage.php">&nbsp;新闻资讯管理</a> &gt;&gt;
              所有新闻 </td>

          </tr>
        </table>

        <table width="620" border="0" cellpadding="0" cellspacing="1" bgcolor="#000000" class="table_southidc" style="word-break:break-all">
          <tr bgcolor="#A4B6D7" class="title">
            <td width="36" height="25" align="center">选中</td>
            <td width="40"  height="25" align="center">序号</td>
            <td width="246" align="center" bgcolor="#A4B6D7" >新闻标题</td>
            <td width="100"  height="25" align="center">新闻分类</td>
            <td width="68" align="center" >缩略图</td>

            <td width="68" align="center" >操作</td>
          </tr>
<?php
	   //分页
$page = empty($_REQUEST['page']) ? '1' : intval($_REQUEST['page']);
$sql = "SELECT * FROM news where title like '%$title%'";
 $result=mysql_query($sql);
 $count = mysql_num_rows($result);
$size =10;
$pager = get_pager('',array(),$count,$page,$size);
$sql="select * from news where title like '%$title%'order by id DESC limit $pager[start],$pager[size]";
$result=mysql_query($sql);
$i=0;
while($data=mysql_fetch_array($result))
{
	$i++;
?>
          <tr class="tdbg">
            <td width="36" height="22" align="center" bgcolor="#A4B6D7">
              <input  name='ids[]' type='checkbox' onClick="unselectall()" id="ID" value='<?php echo $data[id]?>'>
            </td>
            <td width="40" align="center" bgcolor="#ECF5FF"><?php echo $i?></td>
            <td  bgcolor="#ECF5FF"><?php echo $data[title]?> <?php
if($data[pic]!="") echo "<font color=red>有图</font>";
?> </td>
			<td  bgcolor="#ECF5FF"><?php echo $data[type]?>   </td>

			            <td  bgcolor="#ECF5FF"><?php
if($data[pic]!="") echo "<font color=red><a href=../upload/$data[pic] target='_blank'>查看图片</a></font>";
else
	echo "无缩略图";
?> </td>

            <td width="68" align="center" bgcolor="#ECF5FF"> <a href="News_modi.php?id=<?php echo $data[id]?>">修改</a>
              <a href="?id=<?php echo $data[id]?>&mark=del" onClick="return ConfirmDel();">删除</a>
            </td>
          </tr>
<?php
}
?>





        </table>
        <table width="620" border="0" cellpadding="0" cellspacing="1" class="table_southidc">
          <tr>
            <td width="250" height="30"><input name="chkAll" type="checkbox" id="chkAll" onclick=CheckAll(this.form) value="checkbox">
              选中本页显示的所有新闻</td>
            <td><input name="submit" type='submit' value='删除选定的新闻'>
              <input name="Action" type="hidden" id="Action" value="Del"></td>
          </tr>
        </table>
        <table align='center'><tr><td>
<?php require("../page.php") ?>

		</td></tr></form></table>

    </td>
  </tr>
</table>

