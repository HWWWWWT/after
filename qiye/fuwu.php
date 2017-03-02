<?php
require("header.php");
require("./mysql.php");
require("left.php");
$sql="select * from qiyeinfo where title='服务项目'";
$result=mysql_query($sql);
$data=mysql_fetch_array($result);
?>

<div id="Body_Right">
  <div class="Path"><a href="index.php" alt="">首页</a>><a href="fuwu.php" >服务项目</a>></div>
  <p class="Title">服务项目</p>
  <div class="Article">
  <div class="Text">


<p>
<?php echo $data[content]?>

	</p>
  </div>
  </div>

<?php
require("footer.php");
?>