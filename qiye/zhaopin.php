<?php
require("header.php");
require("./mysql.php");
require("left.php");

?>
<div id="body_right">
  <div class="path"><a href="index.php" alt="">��ҳ</a></div>
    <ul class="list_hr">
	<?php
	$sql="select * from hr order by id DESC";
	$res=mysql_query($sql);
	while($data=mysql_fetch_array($res))
	{
	?>
        <li><a href="view_hr.php?id=<?php echo $data[id]?>"><?php echo $data[name]?></a><p><i>н�������</i><?php echo $data[salary]?>   <i>�����ص㣺</i><?php echo $data[address]?>  <i>��Ƹ������</i><?php echo $data[num]?> </p></li>

<?php
	}
	?>

  </ul>

</div>
<div class="clear"></div>
<?php
require("footer.php");
?>