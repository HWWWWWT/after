<?php
require("../mysql.php");
if($mark=="del")
{
$sql="delete from hr where id=$id";
mysql_query($sql);
}
?>
<script language=javascript>
function ConfirmDel()
{
   if(confirm("ȷ��Ҫɾ���˼�¼��"))
     return true;
   else
     return false;
}
</script>



<html>
<head>
<title>####��ҵ��վ����ϵͳ</title>
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
.table_southidc{BACKGROUND-COLOR:#098f9b; margin-bottom:5px;} /*������ɫ����*/
.td_southidc{BACKGROUND-COLOR: F2F8FF;}
.tr_southidc{BACKGROUND-COLOR: ECF5FF;}

-->
</style>
<link href="css/content.css" rel="stylesheet" type="text/css">

<body>

<table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td align="center" valign="top"> <br> <br> <table width="560" border="0" cellpadding="2" cellspacing="1" class="table_southidc">
        <tr>
          <td height="25" class="back_southidc">
            �� Ƹ �� ��</td>
        </tr>
        <tr>
          <td><div align="center">
              <table width="100%" border="0" cellpadding="0" cellspacing="1" class="table_southidc">
                <tr bgcolor="#ECF5FF">
                  <td width="8%" height="25"> <div align="center">���</div></td>
                  <td width="25%"> <div align="center">��Ƹ����</div></td>
                  <td width="11%"> <div align="center">��Ƹ����</div></td>
	<td width="11%"> <div align="center">�����ص�</div></td>
	<td width="11%"> <div align="center">���ʴ���</div></td>

                  <td width="16%"> <div align="center">����ʱ��</div></td>
                  <td colspan="2" width="16%"> <div align="center"></div>
                    <div align="center">�١���</div></td>
                </tr>
<?php
$sql="select * from hr order by id DESC";
$result=mysql_query($sql);
$i=0;
while($data=mysql_fetch_array($result))
{
	$i++;
?>
                <tr bgcolor="#ECF5FF">
                  <td height="22"> <div align="center"><?php echo $i?></div></td>
                  <td bgcolor="#ECF5FF">&nbsp;&nbsp;<?php echo $data[name]?></td>
                  <td> <div align="center"><?php echo $data[num]?></div></td>
                  <td> <div align="center"><?php echo $data[address]?></div></td>
				                    <td> <div align="center"><?php echo $data[salary]?></div></td>
                  <td> <div align="center"><?php echo $data[adddate]?></div></td>

                  <td width="11%"> <div align="center"><a href="HrDemandEdit.php?id=<?php echo $data[id]?>">�޸�</a></div></td>
                  <td width="13%"> <div align="center"><a href="?id=<?php echo $data[id]?>&mark=del" onClick="return ConfirmDel();">ɾ��</a></div></td>
                </tr>


<?php
}
	?>

</table>

            </div></td>
        </tr>
      </table>
      <br> <br> </td>
  </tr>
</table>
