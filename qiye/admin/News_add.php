<?php
session_start();
require("../mysql.php");
//�������
if($action=="add")
{
$pic=upload_image('pic','');
$adddate=date("Y-m-d");
//print_r($_POST);
$sql="INSERT INTO `news` (`type` ,`title` ,`content` ,`pic` ,`adddate` ,`hits` ,`pname`) VALUES ('$type', '$title', '$content', '$pic', '$adddate', 0, '$pname')";
//echo $sql;
//echo $sql;
//exit;
$result=mysql_query($sql);
if($result)
{
	echo "<script language=JavaScript>{window.alert('��ӳɹ���');window.location.href='News_Manage.php'}</script>";
}
else
{
exit ("ʧ����");
}
}





?>
<script language = "JavaScript">


function CheckForm()
{
    if (editor.EditMode.checked==true)
	  document.myform.Content.value=editor.HtmlEdit.document.body.innerText;
    else
	  document.myform.Content.value=editor.HtmlEdit.document.body.innerHTML;

	if (document.myform.title.value.length == 0) {
		alert("���ű���û����д.");
		document.myform.title.focus();
		return false;
	}



	return true;
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

    <td align="center" valign="top">
	<table width="95%" border="0" cellpadding="2" cellspacing="1" class="table_southidc">
        <form method="POST" name="myform" onSubmit="return CheckForm();" action="?action=add" enctype="multipart/form-data">
          <tr>
            <td class="back_southidc" height="30" colspan="2" align="center">��������</td>
          </tr>
          <tr bgcolor="#ECF5FF">
            <td width="119" height="25">*���ű��⣺</td>
            <td width="476"> <input name="title" type="text" class="input" size="50" maxlength="200"></td>
          </tr>
          <tr bgcolor="#ECF5FF">
            <td height="25">*�������</td>
            <td>  <select name="type" >
                <option selected value="��ҵ����">��ҵ����</option>

                <option value="��ҵ��̬">��ҵ��̬</option>
				                <option value="��Ʒ����">��Ʒ����</option>


              </select></td>
          </tr> <tr>
                  <td bgcolor="#A4B6D7">��������ͼ�� </td>
                  <td width="214" height="21" bgcolor="#E3E3E3"> <input name="pic" type="file" id="pic" size="30" maxlength="50">
                  </td>

                </tr>
          <tr bgcolor="#ECF5FF">
            <td height="25" valign="top">*�������ݣ�</td>
            <td valign="top"> <textarea name="content"  cols="70" rows="20"></textarea>
</td>
          </tr>

          <tr bgcolor="#ECF5FF">
            <td height="25">*�����ˣ�</td>
            <td> <input name="pname" type="text" class="input" value="<?php echo $_SESSION[login_name]?>" size="30"></td>
          </tr>


          <tr>
            <td height="30" colspan="2" align="center" bgcolor="#ECF5FF"> <input type="submit" name="Submit" value="�ύ" class="input">

              <input type="reset" name="Submit" value="����" class="input"> </td>
          </tr>
        </form>
      </table></td>
  </tr>
</table>
