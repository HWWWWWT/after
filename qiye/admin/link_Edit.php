<?php
include("../mysql.php");
$sql="select * from link where id=$id";
$res=mysql_query($sql);
$row=mysql_fetch_array($res);
if($action=="save")
{
	$sql="update link set url='$url',name='$title' where id=$id";
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

<?php
include("top.php");
?>
<table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td align="center" valign="top"> <br> <strong><br>
      </strong> <table width="820" border="0" cellpadding="2" cellspacing="1" class="table_southidc">
        <tr>
          <td class="back_southidc" width="798" height="25" >添加友情链接</td>
        </tr>
        <tr class="tr_southidc">
          <FORM name="form_admin" method="post"  onsubmit="return form_onsubmit()" action="?action=save&id=<?php echo $id;?>" >
            <td><table width="80%" border="0" align="center" cellpadding="0" cellspacing="1" class="table_southidc" >
                <tr>
                  <td height="25" colspan="2" class="back_southidc">&nbsp;</td>
                </tr>
                <tr>
                  <td width="29%" height="22"> 网站名称：</td>
                  <td width="71%"><input name="title" type="text" id="title" size="40" maxlength="200" value="<?php echo $row[name]?>"></td>
                </tr>
                <tr>
                  <td height="22"> 网站地址：</td>
                  <td><input name="url" type="text" size="40" maxlength="220" value="<?php echo $row[url]?>">以http://开头</td>
                </tr>

                <tr>
                  <td height="22" colspan="2" align="center" valign="middle">
                  <INPUT type=submit value='确认修改' name=Submit2></td>
                </tr>
              </table></td>
          </form>
        </tr>
      </table>
