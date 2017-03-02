<?php
require("header.php");
require("./mysql.php");
require("left.php");

?>
<div id="body_right">
  <div class="path"><a href="index.php" alt="">首页</a></div>
    <ul class="list_hr">
	<?php
	$sql="select * from hr order by id DESC";
	$res=mysql_query($sql);
	while($data=mysql_fetch_array($res))
	{
	?>
        <li><a href="view_hr.php?id=<?php echo $data[id]?>"><?php echo $data[name]?></a><p><i>薪金待遇：</i><?php echo $data[salary]?>   <i>工作地点：</i><?php echo $data[address]?>  <i>招聘人数：</i><?php echo $data[num]?> </p></li>

<?php
	}
	?>

  </ul>

</div>
<div class="clear"></div>
<?php
require("footer.php");
?>