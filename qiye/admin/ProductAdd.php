<?php
session_start();
require("../mysql.php");
if($_SESSION[login_type]=="����Ա")
$shenhe=1;
else
$shenhe=0;
$pubname=$_SESSION[login_name];
//��Ӳ�Ʒ
if($action=="add")
{
$pic=upload_image('pic','');
$addtime=date("Y-m-d");
//print_r($_POST);
$sql="INSERT INTO product (bianhao ,title ,dalei ,xiaolei ,intro ,
pic ,guige ,price ,hits ,pubname ,addtime,shenhe) VALUES ('$bianhao','$title','$dalei','$xiaolei','$content','$pic','$guige','$price',0,'$pubname','$addtime','$shenhe')";
//echo $sql;
//exit;
$result=mysql_query($sql);
if($result)
{
	echo "<script language=JavaScript>{window.alert('��ӳɹ���');window.location.href='ProductManage.php'}</script>";
}
else
{
exit ("ʧ����");
}
}




$bianhao=date("ymdhis").rand(0,10);

?>
<script language = "JavaScript">
var onecount;
subcat = new Array();
<?php
$count=0;
$sql="select * from pclass where reid!=0";
$result=mysql_query($sql);
  while($rs=mysql_fetch_array($result))
  {
?>
subcat[<?php echo $count;?>] = new Array("<?php echo $rs['name'];?>","<?php echo $rs['reid'];?>","<?php echo $rs['id'];?>");
<?php
    $count++;
}
?>
onecount=<?php echo $count?>;
function changelocation(locationid)
{
    document.form1.xiaolei.length = 0;

    var locationid=locationid;

    var i;
    //document.form1.xiaolei.options[0] = new Option('ѡ���ӷ���','');
    for (i=0;i < onecount; i++)
    {
        if (subcat[i][1] == locationid)
        {
        document.form1.xiaolei.options[document.form1.xiaolei.length] = new Option(subcat[i][0], subcat[i][2]);
        }
    }

}



function CheckForm()
{

  if (document.form1.title.value=="")
  {
    alert("��Ʒ���Ʋ���Ϊ�գ�");
	document.form1.title.focus();
	return false;
  }
  if (document.form1.bianhao.value=="")
  {
    alert("��Ʒ��Ų���Ϊ�գ�");
	document.form1.bianhao.focus();
	return false;
  }

  if (document.form1.content.value=="")
  {
    alert("��Ʒ���ݲ���Ϊ�գ�");
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
    <td width="862" align="center" valign="top"> <b><br>
      </b>
<form method="POST" name="form1" action="?action=add" enctype="multipart/form-data">
        <table width="650" border="0" align="center" cellpadding="0" cellspacing="0" class="border">
          <tr align="center">
            <td class="tdbg"> <table width="100%" border="0" cellpadding="2" cellspacing="1" class="table_southidc">
                <tr>
                  <td class="back_southidc" height="22" colspan="3" align="right" bgcolor="#A4B6D7"><div align="center"><b>��
                      �� �� Ʒ</b> </div></td>
                </tr>
                <tr>
                  <td width="159" height="22" align="right" bgcolor="#A4B6D7">�������</td>
                  <td colspan="2" bgcolor="#E3E3E3">
				  <?php
    getfenlei(0,'',"pclass");
	?></td>
                </tr>
                <tr>
                  <td width="159" height="22" align="right" bgcolor="#A4B6D7">��Ʒ��ţ�</td>
                  <td colspan="2" bgcolor="#E3E3E3"> <strong>
                    <input name="bianhao" type="text"
           id="bianhao" value="<?php echo $bianhao?>" size="25" maxlength="10">
                    *��Ʒ��Ų�������ͬ�����㲻��ȷ�����ظ�������Ķ�����</font></strong></td>
                </tr>
                <tr>
                  <td width="159" height="21" align="right" bgcolor="#A4B6D7">��Ʒ���ƣ�</td>
                  <td colspan="2" bgcolor="#E3E3E3"> <strong>
                    <input name="title" type="text"
           id="title" size="50" maxlength="80">
                    *</strong></td>
                </tr>

                <tr>
                  <td align="right" bgcolor="#A4B6D7">��Ʒ����ͼ�� </td>
                  <td width="214" height="21" bgcolor="#E3E3E3"> <input name="pic" type="file" id="pic" size="30" maxlength="50">
                  </td>

                </tr>

                <tr>
                  <td height="22" align="right" bgcolor="#A4B6D7">��Ʒ���</td>
                  <td colspan="2" bgcolor="#E3E3E3"><strong>
                    <input name="guige" type="text"
           id="guige" size="40" maxlength="80">
                    </strong></td>
                </tr>
                <tr>
                  <td height="22" align="right" bgcolor="#A4B6D7">��Ʒ�۸�</td>
                  <td colspan="2" bgcolor="#E3E3E3"><input name="price" type="text"
           id="price" size="20" maxlength="80">Ԫ</td>
                </tr>



                <tr>
                  <td bgcolor="#A4B6D7"><div align="right">��Ʒ˵����</div></td>
                  <td colspan="2" bgcolor="#E3E3E3"><textarea name="content"  cols="70" rows="20"></textarea>
</td>
                </tr>



                <tr bgcolor="#E3E3E3">
                  <td height="22" colspan="3" align="right"> <div align="center">
                      <input
  name="Add" type="submit"  id="Add2" value=" �� �� " >
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
