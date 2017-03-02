<?php
require("header.php");
require("./mysql.php");
require("left.php");
//默认调用所有产品
	   //分页
$page = empty($_REQUEST['page']) ? '1' : intval($_REQUEST['page']);
//根据参数传递更换sql语句
if($dalei=="")
$sql="select * from product where shenhe=1 order by id DESC";
else
$sql="select * from product where dalei ='$dalei'  and shenhe=1 order by id DESC";//根据条件查询
$result=mysql_query($sql);
//计算分页总数
 $count = mysql_num_rows($result);
$size =9;//每页显示几个商品
//调用分页函数
$pager = get_pager('',array(),$count,$page,$size);
if($dalei=="")
$sql="select * from product where shenhe=1 order by id DESC limit $pager[start],$pager[size]";
else
$sql="select * from product  where dalei ='$dalei' and shenhe=1 order by id DESC limit $pager[start],$pager[size]";

$result=mysql_query($sql);
?>
<div id="Body_Right">
  <div class="Path"><a href="index.php" alt="">首页</a>><a href=product.php />产品中心</a></div>
    <p class="Channel">  <?php
//调用产品分类的
$sql="select * from pclass where reid=0";
$result1=mysql_query($sql);
while($data1=mysql_fetch_array($result1))
	{
		?>

   <a href="product.php?dalei=<?php echo $data1[id]?>"  title="<?php echo $data1[name]?>"><?php echo $data1[name]?></a>

<?php
}
	?>
 </p>
    <ul class="Photo_Text">
	<?php
	while($data=mysql_fetch_array($result))
{
	  ?>
                  <li><a href="viewproduct.php?id=<?php echo $data[id]?>"><img src="./upload/<?php echo $data[pic]?>" height="150" width="150" /><br /><?php echo cnsubstr($data[title],5)?></a></li>
<?php
}
		  ?>



  </ul>
  <div class="clear"></div>
   <div class="Pagination"><?php

  //调用分页结果
  require("page.php");

  ?></div>
</div>
<?php
require("footer.php");
?>