<?php
require("header.php");
require("./mysql.php");
require("left.php");
$sql="select * from news where id=$id";
$result=mysql_query($sql);
$data=mysql_fetch_array($result);
//�����������
$sql="update news set hits=hits+1 where id=$id";
$result=mysql_query($sql);

?>
<div id="Body_Right">
  <div class="Path"><a href="index.php" alt="">��ҳ</a>><a href=news.php />��������</a></div>
  <p class="Title"><?php echo $data[title]?></p>
  <p class="Info"><i>������<?php echo $data[pname]?></i> <i>�����<?php echo $data[hits]?></i> <i>�������ڣ�<?php echo $data[adddate]?></i></p>
  <div class="Article">
    <div class="Text">
    <p align=center>
	<img src="./upload/<?php echo $data[pic]?>">
</p>
<p >
	<?php echo $data[content]?></p>
    </div>
    <div class="clear"></div>
  </div>
  <div class="clear"></div>
</div>