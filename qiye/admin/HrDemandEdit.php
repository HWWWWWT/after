<?php
require("../mysql.php");
//�޸�
if($mark=="save")
{
if($name=="" || $content=="")
{
echo "<script language=JavaScript>window.alert('��������ݶ�����Ϊ�գ�');history.back();</script>";
	exit;
}
$sql="update hr set name='$name' ,num='$num',address='$address' ,salary ='$salary',adddate='$adddate' ,content='$content' where id=$id";
$result=mysql_query($sql);

if($result)
{
	echo "<script language=JavaScript>{window.alert('�޸ĳɹ���');window.location.href='HrDemand.php'}</script>";
}
else
{
exit ("ʧ����");
}
}
//��ȡ�޸�����
$sql="select * from hr where id=$id";
$result=mysql_query($sql);
$data=mysql_fetch_array($result);
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
    <td align="center" valign="top"> <br>
      <table width="650" border="0" cellpadding="2" cellspacing="1" class="table_southidc">
        <tr>
          <td height="25" class="back_southidc">
            ������Ƹ��Ϣ</td>
        </tr>
        <tr>
          <form method="post" action="?mark=save&id=<?php echo $id?>">
            <td><div align="center">
                <table width="100%" border="0" cellpadding="0" cellspacing="1" class="table_southidc">
                  <tr bgcolor="#ECF5FF">
                    <td width="19%" height="25">
                      <div align="center">��Ƹ����:</div></td>
                    <td width="81%">
                      <input name="name" type="text" id="HrName" size="30" maxlength="30" value="<?php echo $data[name]?>"></td>
                  </tr>
                  <tr bgcolor="#ECF5FF">
                    <td height="22">
                      <div align="center">��Ƹ����:</div></td>
                    <td>
                      <input name="num" type="text" id="HrRequireNum" size="5" maxlength="30" value="<?php echo $data[num]?>">
                      ��</td>
                  </tr>
                  <tr bgcolor="#ECF5FF">
                    <td height="22">
                      <div align="center">�����ص�:</div></td>
                    <td height="-4">
                      <input name="address" type="text" id="HrAddress" size="50" maxlength="60" value="<?php echo $data[address]?>">
                    </td>
                  </tr>
                  <tr bgcolor="#ECF5FF">
                    <td height="22">
                      <div align="center">���ʴ���:</div></td>
                    <td height="-1" bgcolor="#ECF5FF">
                      <input name="salary" type="text" id="HrSalary" size="20" maxlength="50" value="<?php echo $data[salary]?>">
                    </td>
                  </tr>
                  <tr bgcolor="#ECF5FF">
                    <td height="22">
                      <div align="center">��������:</div></td>
                    <td>                    <input name="adddate" type="text" id="HrDate" value="<?php echo date("Y-m-d")?>" size="12" maxlength="50"></td>
                  </tr>

                  <tr bgcolor="#ECF5FF">
                    <td height="22">
                      <div align="center">��ƸҪ��:</div></td>
                    <td height="10">
                       <textarea name="content"  cols="70" rows="20"><?php echo $data[content]?></textarea>
 </td>
                  </tr>
                  <tr bgcolor="#ECF5FF">
                    <td height="25" colspan="2">
                      <div align="center">
                        <input type="submit" value="ȷ��">
                        &nbsp;
                        <input type="reset" value="ȡ��">
                      </div></td>
                  </tr>
                </table>
              </div></td>
          </form>
        </tr>
      </table>
      <br> <br> </td>
  </tr>
</table>
