<?php
require("../mysql.php");
//读取修改数据
$sql="select * from product where id=$id";
$result=mysql_query($sql);
$data=mysql_fetch_array($result);
//修改
if($action=="add")
{
$pic=upload_image('pic',$data[pic]);
$addtime=date("Y-m-d");
//print_r($_POST);
$sql="update product set bianhao='$bianhao' ,title='$title' ,dalei='$dalei',xiaolei='$xiaolei',intro='$content' ,
pic='$pic',guige='$guige' ,price='$price' ,pubname='$pubname' where id=$id";
//echo $sql;
//exit;
$result=mysql_query($sql);
if($result)
{
	echo "<script language=JavaScript>{window.alert('修改成功！');window.location.href='ProductManage.php'}</script>";
}
else
{
exit ("失败了");
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
    //document.form1.xiaolei.options[0] = new Option('选择子分类','');
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
    alert("产品名称不能为空！");
	document.form1.title.focus();
	return false;
  }
  if (document.form1.bianhao.value=="")
  {
    alert("产品编号不能为空！");
	document.form1.bianhao.focus();
	return false;
  }

  if (document.form1.content.value=="")
  {
    alert("产品内容不能为空！");
	return false;
  }
  return true;
}

</script>


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
                  <td class="back_southidc" height="22" colspan="3" align="right" bgcolor="#A4B6D7"><div align="center"><b>添
                      加 产 品</b> </div></td>
                </tr>
                <tr>
                  <td width="159" height="22" align="right" bgcolor="#A4B6D7">所属类别：</td>
                  <td colspan="2" bgcolor="#E3E3E3">
				  <?php
    getfenlei(0,'',"pclass");
	?></td>
                </tr>
                <tr>
                  <td width="159" height="22" align="right" bgcolor="#A4B6D7">产品编号：</td>
                  <td colspan="2" bgcolor="#E3E3E3"> <strong>
                    <input name="bianhao" type="text"
           id="bianhao" value="<?php echo $data[bianhao]?>" size="25" maxlength="10">
                    *产品编号不可以相同，如你不能确定会重复，请勿改动他！</font></strong></td>
                </tr>
                <tr>
                  <td width="159" height="21" align="right" bgcolor="#A4B6D7">产品名称：</td>
                  <td colspan="2" bgcolor="#E3E3E3"> <strong>
                    <input name="title" type="text"
           id="title" size="50" maxlength="80" value="<?php echo $data[title]?>">
                    *</strong></td>
                </tr>

                <tr>
                  <td align="right" bgcolor="#A4B6D7">产品缩略图： </td>
                  <td width="214" height="21" bgcolor="#E3E3E3"> <input name="pic" type="file" id="pic" size="30" maxlength="50"><?php
if($data[pic]!="") echo "<font color=red><a href=../upload/$data[pic] target='_blank'>有图片,查看图片</a></font>";
else
	echo "无缩略图";?>
                  </td>

                </tr>

                <tr>
                  <td height="22" align="right" bgcolor="#A4B6D7">产品规格：</td>
                  <td colspan="2" bgcolor="#E3E3E3"><strong>
                    <input name="guige" type="text"
           id="guige" size="40" maxlength="80" value="<?php echo $data[guige]?>">
                    </strong></td>
                </tr>
                <tr>
                  <td height="22" align="right" bgcolor="#A4B6D7">产品价格：</td>
                  <td colspan="2" bgcolor="#E3E3E3"><input name="price" type="text"
           id="price" size="20" maxlength="80" value="<?php echo $data[price]?>">元</td>
                </tr>



                <tr>
                  <td bgcolor="#A4B6D7"><div align="right">产品说明：</div></td>
                  <td colspan="2" bgcolor="#E3E3E3"><textarea name="content"  cols="70" rows="20"><?php echo $data[intro]?></textarea>
</td>
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
