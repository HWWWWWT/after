<?php
require("../mysql.php");
$sql="select * from config where id=1";
$result=mysql_query($sql);
$data=mysql_fetch_array($result);
if($Action=="SaveConfig")
{
	$sql="update config set name='$name',qq='$qq',url='$url',tel='$tel' ,fax='$fax',copyright='$copyright',email='$email' where id=1";
$result=mysql_query($sql);
echo "<script language=JavaScript>{window.alert('����ɹ���');window.location.href='siteConfig.php'}</script>";

}
?>
<html>
<head>
<title>��ҵ��վ����ϵͳ</title>
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

<html>
<head>
<title>��վ����</title>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<body leftmargin="2" topmargin="0" marginwidth="0" marginheight="0">

<form method="POST" action="" id="form" name="form">
  <table width="750" border="0" align="center" cellpadding="2" cellspacing="1" class="table_southidc" >
    <tr>
      <td height="24" colspan="4" class="back_southidc"> ��
          վ �� ��</td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td colspan="4" class="topbg"> <strong>��վ��Ϣ����</strong></td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td width="207" class="tdbg"><strong>��վ���ƣ�</strong></td>
      <td colspan="3" class="tdbg"> <input name="name" type="text" id="SiteName" value="<?php echo $data[name]?>" size="40" maxlength="50">
      </td>
    </tr>

		  <tr bgcolor="#FFFFFF">
      <td class="tdbg"><strong>��վQQ�ͷ���</strong></td>
      <td colspan="3" class="tdbg"><input name="qq" type="text" id="qq" value="<?php echo $data[qq]?>" size="40" maxlength="50">
     </td>
    </tr>
		  <tr bgcolor="#FFFFFF">
      <td class="tdbg"><strong>��վ�ͷ��绰��</strong></td>
      <td colspan="3" class="tdbg"><input name="tel" type="text" id="kefu1003" value="<?php echo $data[tel]?>" size="40" maxlength="50">
       </td>
    </tr>
		  <tr bgcolor="#FFFFFF">
      <td class="tdbg"><strong>��˾���棺</strong></td>
      <td colspan="3" class="tdbg"><input name="fax" type="text" id="kefu1004" value="<?php echo $data[fax]?>" size="40" maxlength="50">
        </td>
    </tr>



    <tr bgcolor="#FFFFFF">
      <td width="207" class="tdbg"><strong>��վ��ַ��</strong><br>
      </td>
      <td colspan="3" class="tdbg"> <input name="url" type="text" id="url" value="<?php echo $data[url]?>" size="40" maxlength="255">
      </td>
    </tr>

    <tr bgcolor="#FFFFFF">
      <td width="207" class="tdbg"><strong>��ҵ���䣺</strong><br> </td>
      <td colspan="3" class="tdbg"> <input name="email" type="text" id="email"  value="<?php echo $data[email]?>" size="40" maxlength="255">
      </td>
    </tr>

    <tr bgcolor="#FFFFFF">
      <td class="tdbg"><strong>��Ȩ��Ϣ��</strong><br>
      </td>
      <td colspan="3" class="tdbg"><textarea name="copyright" cols="50" rows="8" id="Copyright"><?php echo $data[copyright]?></textarea></td>
    </tr>


    <tr bgcolor="#FFFFFF">
      <td colspan="4" align="center" class="tdbg"> <input name="Action" type="hidden" id="Action" value="SaveConfig">
        <input name="cmdSave" type="submit" id="cmdSave" value=" �������� " >
      </td>
    </tr>

  </table>

</form>
</body>
</html>
