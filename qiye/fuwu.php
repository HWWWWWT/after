<?php
require("header.php");
require("./mysql.php");
require("left.php");
$sql="select * from qiyeinfo where title='������Ŀ'";
$result=mysql_query($sql);
$data=mysql_fetch_array($result);
?>

<div id="Body_Right">
  <div class="Path"><a href="index.php" alt="">��ҳ</a>><a href="fuwu.php" >������Ŀ</a>></div>
  <p class="Title">������Ŀ</p>
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