<?php
require("../mysql.php");
$string = $reid == "" ? " �޸Ķ������� " : " �޸��ӷ��� ";
if ( $action == "save" )
{
$sql = "update pclass set name='$name' where id=$id";
	mysql_query($sql);
echo "<script>alert('�ɹ��޸ķ���');location.href='ClassManage.php'</script>";

		exit();
}
//��ȡ�޸�����
$sql="select * from pclass where id=$id";
$result=mysql_query($sql);
$data=mysql_fetch_array($result);
?>
<script language="JavaScript" type="text/JavaScript">
function checkBig()
{
  if (document.form1.name.value=="")
  {
    alert("���Ʋ���Ϊ�գ�");
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
    <td align="center" valign="top"> <br> <table width="386" border="0" cellpadding="0" cellspacing="1" class="table_southidc">
      <tr>
        <td class="back_southidc"><strong>�� Ʒ �� �� �� ��</strong></td>
      </tr>
    </table>

      <form name="form1" method="post" action="?id=<?php echo $id?>" onSubmit="return checkBig()">
        <table width="386" border="0" align="center" cellpadding="0" cellspacing="1" class="table_southidc">
          <tr bgcolor="#A4B6D7" class="title">
            <td height="25" colspan="2" align="center" class="back_southidc"><strong>�޸ķ���</strong></td>
          </tr>
          <tr bgcolor="#E3E3E3" class="tdbg">
            <td width="126" height="22" bgcolor="#A4B6D7"> <div align="right"><strong>�������ƣ�</td>
            <td width="254" bgcolor="#ECF5FF"> <input name="name" type="text" size="30" maxlength="50" value="<?php echo $data[name]?>">
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

