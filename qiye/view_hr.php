<?php
require("header.php");
require("./mysql.php");
require("left.php");
$sql="select * from hr where id=$id";

	$res=mysql_query($sql);
	$data=mysql_fetch_array($res);
?>

<div id="Body_Right">
  <div class="Path"><?php echo $data[name]?></div>
  <div class="Article">
  <div class="Text">



<?php echo $data[content]?>


  </div>
  </div>
</div>
<?php
require("footer.php");
?>