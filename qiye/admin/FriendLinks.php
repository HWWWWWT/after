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
   if(confirm("ȷ��Ҫɾ��"))
     return true;
   else
     return false;
}

function form_onsubmit()
{
if(document.form_admin.title.value=="")
	{
alert ("  ���ⲻ��Ϊ�ա�");
return false;
}
if(document.form_admin.url.value=="")
	{
alert ("��ַ����Ϊ�ա�");
return false;
}

}

</SCRIPT>


<table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td align="center" valign="top"> <br> <strong><br>
      </strong> <table width="820" border="0" cellpadding="2" cellspacing="1" class="table_southidc">
        <tr>
          <td class="back_southidc" width="798" height="25" >�����������</td>
        </tr>
        <tr class="tr_southidc">
          <FORM name="form_admin" method="post"  onsubmit="return form_onsubmit()" action="link_save.php" >
            <td><table width="80%" border="0" align="center" cellpadding="0" cellspacing="1" class="table_southidc" >
                <tr>
                  <td height="25" colspan="2" class="back_southidc">&nbsp;</td>
                </tr>
                <tr>
                  <td width="29%" height="22"> ��վ���ƣ�</td>
                  <td width="71%"><input name="title" type="text" id="title" size="40" maxlength="200"></td>
                </tr>
                <tr>
                  <td height="22"> ��վ��ַ��</td>
                  <td><input name="url" type="text" size="40" maxlength="220">��http://��ͷ</td>
                </tr>

                <tr>
                  <td height="22" colspan="2" align="center" valign="middle">
                  <INPUT type=submit value='ȷ�����' name=Submit2></td>
                </tr>
              </table></td>
          </form>
        </tr>
      </table>
      <br>
      <table width="620" border="0" cellpadding="2" cellspacing="1" class="table_southidc">
        <tr>
          <td width="553" height="25" class="back_southidc">�������ӹ���</td>
        </tr>
        <tr class="tr_southidc">
            <td><br>
              <table width="100%" border="0" align="center" cellpadding="0" cellspacing="1" class="table_southidc">
                <tr bgcolor="#A4B6D7">
                  <td width="28%" height="25" class="back_southidc">
                    <div align="center">��վ����</td>
                  <td width="28%" class="back_southidc">
                    <div align="center">��վ��ַ</td>
                  <td width="24%" class="back_southidc">
                    <div align="center">�޸�</td>
                  <td width="20%" class="back_southidc">
                    <div align="center">ɾ��</td>
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
						echo "<a href='link_Edit.php?id=".$rs["id"]."'>�޸�</a>";
					?>
                  </td>
                  <td>
                    <div align="center">
					<a href="?id=<?php echo $rs["id"]?>&mark=del" onClick="return ConfirmDel();">ɾ��</a>
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
