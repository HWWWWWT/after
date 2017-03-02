<?php
require("header.php");
require("./mysql.php");
require("left.php");
if($act=="save")
{
	if($title=="" || $content=="")
	{
	echo "<script>alert('留言标题,内容,不能为空');history.back();</script>";
	exit;
	}
$sql="insert into guest(title,content) values ('$title','$content')";
$res=mysql_query($sql);
if($res)
	{
	echo "<script>alert('留言成功');location.href='liuyan.php';</script>";
	exit;
	}
	else

	exit("添加失败了");

	}
?>

<div id="Body_Right">
  <div class="Path"><a href="index.php" alt="">首页</a>><a href="liuyan.php" >留言本</a>></div>
  <p class="Title">留言本</p>
  <div class="Article">
  <div class="Text">
<form id="form1" method="post" action="?act=save">
				<table width="100%" border="1" align="center" cellpadding="0" cellspacing="0">
				  <tr>
				    <td height="30" colspan="2" align="center" bgcolor="#AD0D09" style="color:#fff"><strong>我要留言</strong></td>
			      </tr>
				  <tr>
				    <td width="34%" align="right">留言标题</td>
				    <td width="66%" align="left">

				        <label for="title"></label>
				        <input type="text" name="title" id="title" />

			        </td>
			      </tr>
				  <tr>
				    <td align="right">留言内容</td>
				    <td align="left"><label for="content1"></label>
			        <textarea name="content" id="content1" cols="45" rows="5" ></textarea></td>
			      </tr>
				  <tr>
				    <td colspan="2" align="center"><input type="submit" name="button" id="button" value="留言提交" /></td>
			      </tr>
		      </table>
			</form><br>
				<table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#AD0D09" style="border-collapse:collapse;">
				  <tr>
				    <td height="30" colspan="2" align="center" bgcolor="#AD0D09" style="color:#fff">留言列表</td>
			      </tr>
                  <?php
				  $sql="select * from guest order by id DESC";
				  $res=mysql_query($sql);
				  while($d=mysql_fetch_array($res))
				  {
				  ?>
				  <tr>
				    <td width="35%" height="30" align="center">留言标题:</td>
				    <td width="65%" align="left"> <font color="blue" size="4"><?php echo $d[title]?></td>
			      </tr>
				  <tr>
				    <td height="50" align="center">留言内容:</td>
				    <td height="50" align="left"> <?php echo $d[content]?><br><br>时间:<?php echo $d[addtime]?></td>
			      </tr>
                  <?php
				  if($d[replay]!="")
				  {
				  ?>
				  <tr bgcolor="#FFFFFF">
				    <td align="right">管理回复:</td>
				    <td align="left"><font color="red" size="3"><br><?php echo $d[replay]?><br><br><?php echo $d[rtime]?></font></td>
			      </tr>
                  <?php
				  }
				  ?>
				  <tr>
				    <td colspan="2" align="right">&nbsp;</td>
			      </tr>
                  <?php
                  }
				  ?>
	          </table>

<p>


	</p>
  </div>
  </div>

<?php
require("footer.php");
?>