<?php
require("../mysql.php");
if($mark=="del")
{
	$sql="delete from affiche where id=$id";
$result=mysql_query($sql);

}
?>
<script language=javascript>
function ConfirmDel()
{
   if(confirm("ȷ��Ҫɾ���˼�¼��"))
     return true;
   else
     return false;
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

  <table width="100%" border="0" cellspacing="2" cellpadding="3">
                  <tr bgcolor="#ECF5FF">
                    <td width="63%" height="25" bgcolor="#ECF5FF"> <div align="center">�������</div>
                      <div align="center"></div></td>
                    <td width="18%"> <div align="center">����ʱ��</div></td>
                    <td width="9%"> <div align="center">����</div></td>
                    <td width="10%"> <div align="center">����</div></td>
                  </tr>
<?php
$sql="select * from affiche order by id DESC";
$result=mysql_query($sql);
while($data=mysql_fetch_array($result))
{
?>
                  <tr bgcolor="#ECF5FF">
                    <td height="22" bgcolor="#ECF5FF"> <div align="center"><?php echo $data[title]?> </div>
                      <div align="center"></div></td>
                    <td> <div align="center"><?php echo $data[addtime]?></div></td>
                    <td> <div align="center"><a href="editAffiche.php?id=<?php echo $data[id]?>">�޸�</a></div></td>
                    <td> <div align="center"><a href="?id=<?php echo $data[id]?>&mark=del" onClick="return ConfirmDel();">ɾ��</a></div></td>
                  </tr>
<?php
}
	?>
                </table>
              </div></td>
          </form>
        </tr>
      </table>