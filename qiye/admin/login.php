<?php
session_start();
require("../mysql.php");
if($act=="login")
{
	if($type=="����Ա")
	{
		$admin_pass=md5($password);
		$sql="select * from manage where UserName='$name' and Password='$admin_pass'";

		$re=mysql_query($sql);
		$num=@mysql_num_rows($re);
		if($num==0)
		{
			echo "<script>alert('����Ա�ʺŻ����������'),history.back()</script>";
		exit;
		}
		else
			{
				$_SESSION[login_type]=$type;
				$_SESSION[login_name]=$name;
		echo "<script>alert('����Ա��¼�ɹ�');location.href='index.php';</script>";


		}
	}
	if($type=="Ա��")
		{
		$sql="select * from workers where username='$name' and pwd='$password'";

		$re=mysql_query($sql);
		$num=@mysql_num_rows($re);
		if($num==0)
		{
			echo "<script>alert('Ա���ʺŻ����������'),history.back()</script>";
		exit;
		}
		else
			{
				$_SESSION[login_type]=$type;
				$_SESSION[login_name]=$name;
		echo "<script>alert('Ա����¼�ɹ�');location.href='index.php';</script>";


		}
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta content=�����������޹�˾ name=keywords>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<title>�����������޹�˾ </title>
<link href="style/default.css" rel="stylesheet" type="text/css" />
<script language="javascript">
    function delcfm() {
        if (!confirm("ȷ��Ҫɾ����")) {
            window.event.returnValue = false;
        }
   }
</script></head><style type="text/css">
<!--
body {
	background:url(images/idmax_bg1.gif) top repeat-x;
	margin:0px;
	}
td {
	color:#666; font-size:12px;
}
.table {
	border: 0px;background:#fff;
}
.input {border:1px solid #82b2c7;background-color:#FFFFFF;line-height:19px;padding-left:10px;height:19px;width:138px;font-size: 12px;background-image: url(images/input_bg_29.gif);
}
-->
</style>
<script language=javascript>
function isok(theform)
{

if (theform.name.value=="")
  {
	alert(" �û�������Ϊ�գ�");
	theform.name.focus();
	return (false);
  }
if (theform.password.value=="")
  {
	alert("�Բ���!���벻��Ϊ�գ�");
	theform.password.focus();
	return (false);
  }
return (true);
}
</script>
  <table width="700" border="0" align="center" cellpadding="0" cellspacing="0" border="0" >
    <tr>
      <td><table width="100%"  height="500" border="0" cellpadding="0" cellspacing="0">
        <tr>
            <td><table width="100%" border="0" cellpadding="0" cellspacing="0">
				<form action="?act=login" method="post" name="theform" onSubmit="return isok(this)">
                <tr>

                  <td width="290" height="300" style="background:url('images/idmax_bg4.gif')  right no-repeat;padding-right:20px;"><img src="image/logo.jpg" alt="��ҵ��վ����ϵͳ" /><br/>
</td>
                  <td width="350"><table width="300"height="160"  align="center" cellpadding="0" cellspacing="0"style="background:#f6fbff;border:1px solid #cce4f0;text-align:center">
                      <tr>
                        <td><table width="100%" border="0" cellpadding="0" cellspacing="0">
                            <tr>
                              <td height="30" align="right">�û���:</td>
                              <td height="30" align="left"><input name="name" type="text" class="input" id="name" size="20" /></td>
                        </tr>
                            <tr>
                              <td height="30" align="right">����:</td>
                                  <td height="30" align="left">
                              <input name="password" type="password" class="input" id="password" size="20" /></td>
                            </tr>
                             <tr>
                              <td height="30" align="right" > ѡ�����:</td>
                               <td height="30" align="left">
                                <select name="type" id="select" class="input">
                                  <option value="����Ա">����Ա</option>
                                  <option value="Ա��">Ա��</option>
                               </select></td>
                            </tr>

                      <tr>
                              <td height="30" colspan="2" align="center"><input name="Submit_Login" type="Submit" id="Submit_Login" value="��  ¼" style="border:0;padding:0 15px;cursor:pointer;height:1.8em;color:#fff;background:#40b6f6;overflow:visible;"/></td>
                            </tr>
                        </table></td>

                      </tr>
                  </table></td>
                  <td width="1" bgcolor="#FFFFFF"></td>
                </tr>
			</form>
            </table></td>
          </tr>
      </table></td>
    </tr>
    <tr>
      <td height="33" align="center"><hr color="#CCE4EE"></td>
    </tr>
  </table>
