<?php
require("../mysql.php");
//��ȡ�޸�����
$sql="select * from anli where id=$id";
$result=mysql_query($sql);
$data=mysql_fetch_array($result);
//�޸ĳɹ�����
if($mark=="save")
{
if($title=="" || $content=="")
{
echo "<script language=JavaScript>window.alert('��������ݶ�����Ϊ�գ�');history.back();</script>";
	exit;
}
$sql="update anli set title='$title',content='$content' where id=$id";
$result=mysql_query($sql);
if($result)
{
	echo "<script language=JavaScript>{window.alert('�޸ĳɹ���');window.location.href='anli.php'}</script>";
}
else
{
exit ("ʧ����");
}
}
?>
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
    <td align="center" valign="top"> <br> <table width="560" border="0" cellpadding="2" cellspacing="1" class="table_southidc">
        <tr>
          <td height="25" class="back_southidc">
            ��ӳɹ�����</td>
        </tr>
        <tr>
          <form method="post" name="myform" action="?mark=save&id=<?php echo $id?>">
            <td><div align="center">
                <table width="100%" border="0" cellspacing="1" cellpadding="0">
                  <tr bgcolor="#ECF5FF">
                    <td width="16%" height="23" bgcolor="#ECF5FF"> <div align="center">�ɹ���������:</div></td>
                    <td width="34%" height="25"> <input type="text" name="title" class="inputtext" maxlength="100" size="45" value=<?php echo $data[title]?>>
                    </td>

                  </tr>
                  <tr bgcolor="#ECF5FF">
                    <td height="25" colspan="6"><div align="left">�ɹ���������</div></td>
                  </tr>
                  <tr bgcolor="#ECF5FF">
                    <td height="300" colspan="6"> <textarea name="content"  cols="70" rows="20"> <?php echo $data[content]?></textarea>
                    </td>
                  </tr>
                  <tr bgcolor="#ECF5FF">
                    <td colspan="6"> <div align="center">
                        <input name="submit" type="submit" value="ȷ��">
                        &nbsp;
                        <input name="reset" type="reset" value="ȡ��">
                      </div></td>
                  </tr>
                </table>
              </div></td>
          </form>
        </tr>
      </table>
      <br> </td>
  </tr>
</table>
