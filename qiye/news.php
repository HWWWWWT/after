<?php
require("header.php");
require("./mysql.php");
require("left.php");
//默认调用所有新闻模块的标题
	   //分页
$page = empty($_REQUEST['page']) ? '1' : intval($_REQUEST['page']);
//根据参数传递更换sql语句
if($type=="")
$sql="select * from news order by id DESC";
else
$sql="select * from news  where type ='$type' order by id DESC";//根据条件查询
$result=mysql_query($sql);
//计算分页总数
 $count = mysql_num_rows($result);
$size =10;//每页显示几条新闻
//调用分页函数
$pager = get_pager('',array(),$count,$page,$size);
if($type=="")
$sql="select * from news order by id DESC limit $pager[start],$pager[size]";
else
$sql="select * from news where type ='$type' order by id DESC limit $pager[start],$pager[size]";

$result=mysql_query($sql);


?>

<div id="Body_Right">
  <div class="Path"><a href="index.php" alt="">首页</a>><a href=news.php >企业新闻</a></div>
    <p class="Channel">

    <a href="news.php?type=企业新闻" >公司新闻</a>


    <a href="news.php?type=行业动态">行业动态</a>

    <a href="news.php?type=产品交流">产品交流</a>

    </p>
    <ul class="List_Text">
	<?php
	//循环显示
while($data=mysql_fetch_array($result))
{
	  ?>
<li><a href="view.php?id=<?php echo $data[id]?>"><?php echo $data[title]?></a></li>
<?php
		  }
		  ?>

  </ul>
  <div class="Pagination"><?php

  //调用分页结果
  require("page.php");

  ?></div>
</div>
<?php
require("footer.php");
?>