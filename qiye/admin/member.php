<?php
require("../mysql.php");
//删除
if($mark=="del")
{
	$sql="delete from workers where id=$id";
$result=mysql_query($sql);

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
            公司员工管理</td>
        </tr>
        <tr>
          <td height="66">
            <div align="center">
              <table width="100%" height="62" border="0" align="center" cellpadding="0" cellspacing="1" class="tang_southidc">
                <tr bgcolor="#ECF5FF" class="title">
                  <td width="98" align="center"><strong>员工编号</strong></td>

                  <td width="105" height="29" align="center"><strong>员工姓名</strong></td>
				  				     <td width="105" height="29" align="center"><strong>所属部门</strong></td>

				     <td width="105" height="29" align="center"><strong>登录帐号</strong></td>
				  <td width="108" align="center"><strong> 员工电话</strong></td>
                  <td width="158" align="center"><strong> 操作</strong></td>
                </tr>
<?php
$sql="select * from workers  order by id DESC";
$result=mysql_query($sql);
$i=0;
while($data=mysql_fetch_array($result))
{
	$i++;
?>
                <tr class="tdbg">
                  <td align="center" bgcolor="#ECF5FF"><?php echo $data[bianhao];?></td>

                  <td height="28" align="center" bgcolor="#ECF5FF"><?php echo $data[realname];?></td>				                    <td height="28" align="center" bgcolor="#ECF5FF"><?php echo $data[bumen];?></td>

				                    <td height="28" align="center" bgcolor="#ECF5FF"><?php echo $data[username];?></td>
				     <td height="28" align="center" bgcolor="#ECF5FF"><?php echo $data[tel];?>
</td>
                  <td align="center" bgcolor="#ECF5FF">


                    &nbsp;<a href="memberadd.php?id=<?php echo $data[id]?>">修改</a>&nbsp;


                    &nbsp;<a href="?id=<?php echo $data[id]?>&mark=del" onClick="return ConfirmDel();">删除</a></td>
                </tr>


<?php
}
	?>

              </table>
            </div></td>
        </tr>
      </table>


