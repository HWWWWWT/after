<?php
require("header.php");
require("./mysql.php");
require("left.php");
$sql="select * from product where id=$id";
$result=mysql_query($sql);
$data=mysql_fetch_array($result);
//更新浏览次数
$sql="update product set hits=hits+1 where id=$id";
$result=mysql_query($sql);

?>
<div id="Body_Right">
  <div class="Path"><a href="index.php" alt="">首页</a>><a href=product.php  alt=产品中心/>产品中心</a></div>
  <p class="Title"><?php echo $data[title]?></p>
  <div class="Article">
    <div class="Left_Photo"> <img src="./upload/<?php echo $data[pic]?>"  width="300" />
    <div class="Photo_Right">
      <p>产品编号：<?php echo $data[bianhao]?> </p>
      <p>产品规格：<b><?php echo $data[guige]?></b></p>
	        <p>产品价格：<b><?php echo $data[price]?></b>元</p>

      <p>浏览：<?php echo $data[hits]?></p>
      <p>发布时间：<?php echo $data[addtime]?></p>

      </div>
      <div class="clear"></div>
    </div>
    <div class="Text">
    <p class="Tit">产品详情</p>
    <p>
<?php echo $data[intro]?>
	</p>    </div>
    <div class="clear"></div>
  </div>
  <div class="clear"></div>
</div>

<?php
require("footer.php");
?>