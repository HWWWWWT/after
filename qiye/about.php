<?php
require("header.php");
require("./mysql.php");
require("left_about.php");
if($title=="")//���Ϊ��,Ĭ�ϵ�����ϵ����
{
$title="��ϵ����";
}

$sql="select * from qiyeinfo where title='$title'";
$result=mysql_query($sql);
$data=mysql_fetch_array($result);
?>

<div id="Body_Right">
  <div class="Path"><a href="index.php" alt="">��ҳ</a>><a href="about.php?title=<?php echo $title?>" ><?php echo $title?></a></div>
  <p class="Title"><?php echo $title?></p>
  <div class="Article">
  <div class="Text">


<p>
<?php echo $data[content]?>

	</p>
  </div>
  </div></div>
  <div style="clear:both"></div>

<?php
require("footer.php");
?>