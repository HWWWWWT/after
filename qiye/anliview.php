<?php
require("header.php");
require("./mysql.php");
require("left.php");
$sql="select * from anli where id=$id";
$result=mysql_query($sql);
$data=mysql_fetch_array($result);
//更新浏览次数
$sql="update anli set hits=hits+1 where id=$id";
$result=mysql_query($sql);

?>
<div id="Body_Right">
  <div class="Path"><a href="/baiyida/" alt="">首页</a>><a href=anli.php />成功案例</a></div>
  <p class="Title"><?php echo $data[title]?></p>
  <p class="Info"> <i>浏览：<?php echo $data[hits]?></i> <i>更新日期：<?php echo $data[addtime]?></i></p>
  <div class="Article">
    <div class="Left_Photo" style="text-align:center"> <img src="./upload/<?php echo $data[pic]?>"  width="500" style="float:none" />
      <div class="clear"></div>
    </div>
    <div class="Text">
    <p class="Tit">案例介绍</p>
    <p>
	<?php echo $data[content]?>
	</p>    </div>
    <div class="clear"></div>
  </div>
  <div class="clear"></div>
</div>
<?php
require("footer.php");
?>