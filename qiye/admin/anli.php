<?php
require("../mysql.php");
//ɾ��
if($mark=="del")
{
	$sql="delete from anli where id=$id";
$result=mysql_query($sql);

}
//ȡ�����
if($act=="shenhe")
{
	$sql="update anli set shenhe=0 where id=$id";
$result=mysql_query($sql);
if($result)
{
	echo "<script language=JavaScript>{window.alert('ȡ����˳ɹ���');window.location.href='anli.php'}</script>";
}
else
{
exit ("ʧ����");
}
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
    <td width="862" align="center" valign="top">
      <br>

      <table width="556" border="0" cellpadding="2" cellspacing="1" class="table_southidc">
        <tr>
          <td width="550" height="25" class="back_southidc">
            �ɹ���������</td>
        </tr>
        <tr>
          <td height="66">
            <div align="center">
              <table width="100%" height="62" border="0" align="center" cellpadding="0" cellspacing="1" class="tang_southidc">
                <tr bgcolor="#ECF5FF" class="title">
                  <td width="78" align="center"><strong>���</strong></td>

                  <td width="265" height="29" align="center"><strong>�ɹ���������</strong></td>
				  <td width="108" align="center"><strong> ���״̬</strong></td>
                  <td width="158" align="center"><strong> ����</strong></td>
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
	if($data[shenhe]==0) echo "δ���";
else
echo "�����";
	?>
</td>
                  <td align="center" bgcolor="#ECF5FF">


                    &nbsp;<a href="anliModify.php?id=<?php echo $data[id]?>">�޸�</a>&nbsp;

 &nbsp;<a href="?id=<?php echo $data[id]?>&act=shenhe">ȡ�����</a>&nbsp;

                    &nbsp;<a href="?id=<?php echo $data[id]?>&mark=del" onClick="return ConfirmDel();">ɾ��</a></td>
                </tr>


<?php
}
	?>

              </table>
            </div></td>
        </tr>
      </table>


