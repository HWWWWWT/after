<?php
require("header.php");
require("./mysql.php");
require("left.php");
//Ĭ�ϵ������в�Ʒ
	   //��ҳ
$page = empty($_REQUEST['page']) ? '1' : intval($_REQUEST['page']);
//���ݲ������ݸ���sql���
if($dalei=="")
$sql="select * from product where shenhe=1 order by id DESC";
else
$sql="select * from product where dalei ='$dalei'  and shenhe=1 order by id DESC";//����������ѯ
$result=mysql_query($sql);
//�����ҳ����
 $count = mysql_num_rows($result);
$size =9;//ÿҳ��ʾ������Ʒ
//���÷�ҳ����
$pager = get_pager('',array(),$count,$page,$size);
if($dalei=="")
$sql="select * from product where shenhe=1 order by id DESC limit $pager[start],$pager[size]";
else
$sql="select * from product  where dalei ='$dalei' and shenhe=1 order by id DESC limit $pager[start],$pager[size]";

$result=mysql_query($sql);
?>
<div id="Body_Right">
  <div class="Path"><a href="index.php" alt="">��ҳ</a>><a href=product.php />��Ʒ����</a></div>
    <p class="Channel">  <?php
//���ò�Ʒ�����
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

  //���÷�ҳ���
  require("page.php");

  ?></div>
</div>
<?php
require("footer.php");
?>