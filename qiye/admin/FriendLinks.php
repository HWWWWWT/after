<?php
include("../mysql.php");
if($mark=="del")
{
	$sql="delete from link where id=$id";
if(mysql_query($sql))
header("location:FriendLinks.php");
}
?>


<script language="javascript">


function ConfirmDel()
{
   if(confirm("确定要删吗！"))
     return true;
   else
     return false;
}

function form_onsubmit()
{
if(document.form_admin.title.value=="")
	{
alert ("  标题不能为空。");
return false;
}
if(document.form_admin.url.value=="")
	{
alert ("网址不能为空。");
return false;
}

}

</SCRIPT>


<table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td align="center" valign="top"> <br> <strong><br>
      </strong> <table width="820" border="0" cellpadding="2" cellspacing="1" class="table_southidc">
        <tr>
          <td class="back_southidc" width="798" height="25" >添加友情链接</td>
        </tr>
        <tr class="tr_southidc">
          <FORM name="form_admin" method="post"  onsubmit="return form_onsubmit()" action="link_save.php" >
            <td><table width="80%" border="0" align="center" cellpadding="0" cellspacing="1" class="table_southidc" >
                <tr>
                  <td height="25" colspan="2" class="back_southidc">&nbsp;</td>
                </tr>
                <tr>
                  <td width="29%" height="22"> 网站名称：</td>
                  <td width="71%"><input name="title" type="text" id="title" size="40" maxlength="200"></td>
                </tr>
                <tr>
                  <td height="22"> 网站地址：</td>
                  <td><input name="url" type="text" size="40" maxlength="220">以http://开头</td>
                </tr>

                <tr>
                  <td height="22" colspan="2" align="center" valign="middle">
                  <INPUT type=submit value='确认添加' name=Submit2></td>
                </tr>
              </table></td>
          </form>
        </tr>
      </table>
      <br>
      <table width="620" border="0" cellpadding="2" cellspacing="1" class="table_southidc">
        <tr>
          <td width="553" height="25" class="back_southidc">友情链接管理</td>
        </tr>
        <tr class="tr_southidc">
            <td><br>
              <table width="100%" border="0" align="center" cellpadding="0" cellspacing="1" class="table_southidc">
                <tr bgcolor="#A4B6D7">
                  <td width="28%" height="25" class="back_southidc">
                    <div align="center">网站标题</td>
                  <td width="28%" class="back_southidc">
                    <div align="center">网站地址</td>
                  <td width="24%" class="back_southidc">
                    <div align="center">修改</td>
                  <td width="20%" class="back_southidc">
                    <div align="center">删除</td>
                </tr>
<?php
$sql="select * from link";
$result=mysql_query($sql);
while($rs=mysql_fetch_array($result))
{
?>
                <tr bgcolor="#DFEBF2">
                  <td height="22">
                    <div align="center"><?php echo $rs["name"]?></td>
                  <td>
                    <div align="center"><?php echo $rs["url"]?></td>
                  <td>
                    <div align="center">
                      <?php
						echo "<a href='link_Edit.php?id=".$rs["id"]."'>修改</a>";
					?>
                  </td>
                  <td>
                    <div align="center">
					<a href="?id=<?php echo $rs["id"]?>&mark=del" onClick="return ConfirmDel();">删除</a>
                  </td>
                </tr>
<?php
}
?>
              </table></td>
        </tr>
      </table>
    </td>
  </tr>
</table>
