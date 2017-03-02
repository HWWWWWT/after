<?php
session_start();
require("../mysql.php");
if($act=="login")
{
	if($type=="管理员")
	{
		$admin_pass=md5($password);
		$sql="select * from manage where UserName='$name' and Password='$admin_pass'";

		$re=mysql_query($sql);
		$num=@mysql_num_rows($re);
		if($num==0)
		{
			echo "<script>alert('管理员帐号或者密码错误'),history.back()</script>";
		exit;
		}
		else
			{
				$_SESSION[login_type]=$type;
				$_SESSION[login_name]=$name;
		echo "<script>alert('管理员登录成功');location.href='index.php';</script>";


		}
	}
	if($type=="员工")
		{
		$sql="select * from workers where username='$name' and pwd='$password'";

		$re=mysql_query($sql);
		$num=@mysql_num_rows($re);
		if($num==0)
		{
			echo "<script>alert('员工帐号或者密码错误'),history.back()</script>";
		exit;
		}
		else
			{
				$_SESSION[login_type]=$type;
				$_SESSION[login_name]=$name;
		echo "<script>alert('员工登录成功');location.href='index.php';</script>";


		}
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta content=百名网络有限公司 name=keywords>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<title>百名网络有限公司 </title>
<link href="style/default.css" rel="stylesheet" type="text/css" />
<script language="javascript">
    function delcfm() {
        if (!confirm("确认要删除？")) {
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
	alert(" 用户名不能为空！");
	theform.name.focus();
	return (false);
  }
if (theform.password.value=="")
  {
	alert("对不起!密码不能为空！");
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

                  <td width="290" height="300" style="background:url('images/idmax_bg4.gif')  right no-repeat;padding-right:20px;"><img src="image/logo.jpg" alt="企业网站管理系统" /><br/>
</td>
                  <td width="350"><table width="300"height="160"  align="center" cellpadding="0" cellspacing="0"style="background:#f6fbff;border:1px solid #cce4f0;text-align:center">
                      <tr>
                        <td><table width="100%" border="0" cellpadding="0" cellspacing="0">
                            <tr>
                              <td height="30" align="right">用户名:</td>
                              <td height="30" align="left"><input name="name" type="text" class="input" id="name" size="20" /></td>
                        </tr>
                            <tr>
                              <td height="30" align="right">密码:</td>
                                  <td height="30" align="left">
                              <input name="password" type="password" class="input" id="password" size="20" /></td>
                            </tr>
                             <tr>
                              <td height="30" align="right" > 选择身份:</td>
                               <td height="30" align="left">
                                <select name="type" id="select" class="input">
                                  <option value="管理员">管理员</option>
                                  <option value="员工">员工</option>
                               </select></td>
                            </tr>

                      <tr>
                              <td height="30" colspan="2" align="center"><input name="Submit_Login" type="Submit" id="Submit_Login" value="登  录" style="border:0;padding:0 15px;cursor:pointer;height:1.8em;color:#fff;background:#40b6f6;overflow:visible;"/></td>
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
