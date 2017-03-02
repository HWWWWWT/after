<?php
require("../mysql.php");
if($id=="")
{
//添加
if($action=="add")
{
	//验证数据
if($realname=="" || $username==""|| $pwd=="" ||$bianhao=="" )
	{
echo "<script language=JavaScript>window.alert('员工真实姓名,登录帐号,密码,编号都不能为空！');history.back();</script>";
	exit;
}
$addtime=date("Y-m-d");
//print_r($_POST);
$sql="INSERT INTO `workers` (`bianhao` ,`realname` ,`bumen` ,`username` ,`pwd` ,`tel` ,`adddate`) VALUES ( '$bianhao', '$realname', '$bumen', '$username', '$pwd', '$tel', '$addtime')";
//echo $sql;
//exit;
$result=mysql_query($sql);
if($result)
{
	echo "<script language=JavaScript>{window.alert('添加成功！');window.location.href='member.php'}</script>";
}
else
{
exit ("失败了");
}
}
}

if($id!="")
{
//读取修改数据
$sql="select * from workers where id=$id";
//echo $sql;
$result=mysql_query($sql);
$data=mysql_fetch_array($result);
//修改
if($action=="add")
{
$sql="update `workers` set `bianhao='$bianhao' ,`realname`='$realname' ,`bumen`='$bumen' ,`username`='$username' ,`pwd`='$pwd' ,`tel`= '$tel' where id=$id";
if($result)
{
	echo "<script language=JavaScript>{window.alert('修改成功！');window.location.href='member.php'}</script>";
}
else
{
exit ("失败了");
}
	}
}





?>


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
    <td width="862" align="center" valign="top"> <b><br>
      </b>
<form method="POST" name="form1" action="?action=add&id=<?php echo $id?>" enctype="multipart/form-data">
        <table width="650" border="0" align="center" cellpadding="0" cellspacing="0" class="border">
          <tr align="center">
            <td class="tdbg"> <table width="100%" border="0" cellpadding="2" cellspacing="1" class="table_southidc">
                <tr>
                  <td class="back_southidc" height="22" colspan="3" align="right" bgcolor="#A4B6D7"><div align="center"><b>添加/修改员工</b> </div></td>
                </tr>

                <tr>
                  <td width="159" height="22" align="right" bgcolor="#A4B6D7">员工编号：</td>
                  <td colspan="2" bgcolor="#E3E3E3"> <strong>
                    <input name="bianhao" type="text"
           id="bianhao" value="<?php echo $data[bianhao]?>" size="25" maxlength="10" <?php if($id!="") echo "readonly"?>> 不可更改
                    </font></strong></td>
                </tr>
                <tr>
                  <td width="159" height="21" align="right" bgcolor="#A4B6D7">真实姓名：</td>
                  <td colspan="2" bgcolor="#E3E3E3"> <strong>
                    <input name="realname" type="text"
           id="title" size="20" maxlength="80" value="<?php echo $data[realname]?>">
                    </strong></td>
                </tr>
    <tr>
                  <td height="22" align="right" bgcolor="#A4B6D7">所属部门：</td>
                  <td colspan="2" bgcolor="#E3E3E3"><input name="bumen" type="text"
           id="price" size="20" maxlength="80" value="<?php echo $data[bumen]?>"></td>
                </tr>
<tr>
                  <td height="22" align="right" bgcolor="#A4B6D7">员工电话：</td>
                  <td colspan="2" bgcolor="#E3E3E3"><input name="tel" type="text"
           id="price" size="20" maxlength="80" value="<?php echo $data[tel]?>"></td>
                </tr>
                <tr>
                  <td height="22" align="right" bgcolor="#A4B6D7">登录帐号：</td>
                  <td colspan="2" bgcolor="#E3E3E3"><strong>
                    <input name="username" type="text"
           id="guige" size="20" maxlength="80" value="<?php echo $data[username]?>">
                    </strong></td>
                </tr>
                <tr>
                  <td height="22" align="right" bgcolor="#A4B6D7">登录密码：</td>
                  <td colspan="2" bgcolor="#E3E3E3"><input name="pwd" type="text"
           id="price" size="20" maxlength="80" value="<?php echo $data[pwd]?>"></td>
                </tr>







                <tr bgcolor="#E3E3E3">
                  <td height="22" colspan="3" align="right"> <div align="center">
                      <input
  name="Add" type="submit"  id="Add2" value=" 添 加 " >
                    </div></td>
                </tr>
              </table></td>
          </tr>
        </table>

        <div align="center">
          <p>&nbsp;  </p>
        </div>
      </form></td>
  </tr>
</table>
