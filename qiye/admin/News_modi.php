<?php
require("../mysql.php");
//读取修改数据
$sql="select * from news where id=$id";
$result=mysql_query($sql);
$data=mysql_fetch_array($result);
//修改
if($action=="add")
{
$pic=upload_image('pic',$data[pic]);
$adddate=date("Y-m-d");
//print_r($_POST);
$sql="update `news` set `type`='$type' ,`title`='$title' ,`content` ='$content',`pic`='$pic',`adddate`='$adddate' ,`pname`='$pname' where id=$id";
//echo $sql;
//exit;
$result=mysql_query($sql);
if($result)
{
	echo "<script language=JavaScript>{window.alert('修改成功！');window.location.href='News_Manage.php'}</script>";
}
else
{
exit ("失败了");
}
}





?>
<script language = "JavaScript">


function CheckForm()
{
    if (editor.EditMode.checked==true)
	  document.myform.Content.value=editor.HtmlEdit.document.body.innerText;
    else
	  document.myform.Content.value=editor.HtmlEdit.document.body.innerHTML;

	if (document.myform.title.value.length == 0) {
		alert("新闻标题没有填写.");
		document.myform.title.focus();
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

    <td align="center" valign="top">
	<table width="95%" border="0" cellpadding="2" cellspacing="1" class="table_southidc">
        <form method="POST" name="myform" onSubmit="return CheckForm();" action="?action=add&id=<?php echo $id?>" enctype="multipart/form-data">
          <tr>
            <td class="back_southidc" height="30" colspan="2" align="center">修改新闻</td>
          </tr>
          <tr bgcolor="#ECF5FF">
            <td width="119" height="25">*新闻标题：</td>
            <td width="476"> <input name="title" type="text" class="input" size="50" maxlength="200" value="<?php echo $data[title]?>"></td>
          </tr>
          <tr bgcolor="#ECF5FF">
            <td height="25">*新闻类别：</td>
            <td>  <select name="type" >
                <option selected value="企业新闻">企业新闻</option>

                <option value="行业动态">行业动态</option>

              </select></td>
          </tr> <tr>
                  <td bgcolor="#A4B6D7">新闻缩略图： </td>
                  <td width="214" height="21" bgcolor="#E3E3E3"> <input name="pic" type="file" id="pic" size="30" maxlength="50">
<?php
if($data[pic]!="") echo "<font color=red><a href=../upload/$data[pic] target='_blank'>有图片,查看图片</a></font>";
else
	echo "无缩略图";?>
                  </td>

                </tr>
          <tr bgcolor="#ECF5FF">
            <td height="25" valign="top">*新闻内容：</td>
            <td valign="top"> <textarea name="content"  cols="70" rows="20"><?php echo $data[content]?></textarea>
</td>
          </tr>

          <tr bgcolor="#ECF5FF">
            <td height="25">*发布人：</td>
            <td> <input name="pname" type="text" class="input" value="admin" size="30" value="<?php echo $data[pname]?>"></td>
          </tr>


          <tr>
            <td height="30" colspan="2" align="center" bgcolor="#ECF5FF"> <input type="submit" name="Submit" value="提交" class="input">

              <input type="reset" name="Submit" value="重置" class="input"> </td>
          </tr>
        </form>
      </table></td>
  </tr>
</table>
