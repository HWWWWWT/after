<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>��վ����ϵͳ</title>
<SCRIPT LANGUAGE="JavaScript">
<!-- Hide
function killErrors() {
return true;
}
window.onerror = killErrors;
// -->
</SCRIPT>
<script src="./js/common.js"></script>
<link href="./css/admin.css" rel="stylesheet" type="text/css" />
<body style="margin-top:10px;">
<table style="width:170px; margin-left:10px !important; margin:0; background:url(./image/leftMenuBg_center.gif) left top repeat-y; " cellpadding="0" cellspacing="0" align="center">
<tr><td style="height:20px; vertical-align:top;"><img src="./image/leftMenuBg_top.gif" /></td></tr>
<tr><td>
<table style="width:135px; margin-left:17px !important; margin:0;" cellpadding="0" cellspacing="0" align="center">
<tr><td style="height:1px; background:#e1e1e1;"></td></tr>
<tr><td id="mname_m1" class="leftMenuOff" onclick="changeMenu('m1');">ϵͳ����</td></tr>
<tr style="display:none; height:0" id="menu_m1"><td>
<?php
if($_SESSION[login_type]=="����Ա")
{
?>
	<ul class="subleftMenu">
	<li><a href="Manage.php" target="main" >����Ա����</a></li>

		<li><a href="SiteConfig.php" target="main" >��վ����</a></li>
			<li><a href="memberadd.php" target="main" >���Ա��</a></li>

	<li><a href="member.php" target="main" >Ա������</a></li>

	</ul>
	<?php
		}
		?>
</td></tr>
<tr><td id="mname_m2" class="leftMenuOff" onclick="changeMenu('m2');">��˾��Ϣ����</td></tr>
<tr style="display:none; height:0" id="menu_m2"><td>
<?php
if($_SESSION[login_type]=="����Ա")
{
?>
	<ul class="subleftMenu">
	<li><a href="AboutusAdd.php" target="main" >������ҵ��Ϣ</a></li>
	<li><a href="Aboutus.php" target="main" >������ҵ��Ϣ</a></li>
	<li><a href="Culture.php" target="main" >������ҵ�Ļ�</a></li>
	<li><a href="CultureNewsAdd.php" target="main" >������ҵ�Ļ�</a></li>

   	</ul>
	<?php
		}
		?>
</td></tr>



<tr><td id="mname_m3" class="leftMenuOff" onclick="changeMenu('m3');">��Ʒ����</td></tr>
<tr style="display:none; height:0" id="menu_m3"><td>
	<ul class="subleftMenu">
	<li><a href="ClassManage.php" target="main" >��Ʒ���</a></li>
	<li><a href="ProductManage.php" target="main" >��Ʒ����</a></li>
	<li><a href="ProductAdd.php" target="main" >��Ӳ�Ʒ</a></li>
		<?php
if($_SESSION[login_type]=="����Ա")
{
?>
	<li><a href="ProductCheck.php" target="main" >��˲�Ʒ</a></li>
<?php
	}
	?>
   	</ul>
</td></tr>
<tr><td id="mname_m4" class="leftMenuOff" onclick="changeMenu('m4');">�ɹ���������</td></tr>
<tr style="display:none; height:0" id="menu_m4"><td>
	<ul class="subleftMenu">
	<li><a href="anli.php" target="main" >�ɹ���������</a></li>
	<li><a href="anliAdd.php" target="main" >��ӳɹ�����</a></li>
	<?php
if($_SESSION[login_type]=="����Ա")
{
?>
	<li><a href="anliCheck.php" target="main" >��˳ɹ�����</a></li>
	<?php
	}
	?>
	   	</ul>
</td></tr>

<tr><td id="mname_m5" class="leftMenuOff" onclick="changeMenu('m5');">���Ź���</td></tr>
<tr style="display:none; height:0" id="menu_m5"><td>
	<ul class="subleftMenu">
	<li><a href="News_add.php" target="main" >�����������</a></li>
	<li><a href="News_Manage.php" target="main" >����ȫ������</a></li>


   	</ul>
</td></tr>

</table>
</td></tr>
<tr><td style="height:20px; vertical-align:bottom;"><img src="./image/leftMenuBg_bottom.gif" /></td></tr>
</table>
</body>
</html>
