<?php
require("header.php");
require("./mysql.php");
require("left.php");
//Ĭ�ϵ������а���
	   //��ҳ
$page = empty($_REQUEST['page']) ? '1' : intval($_REQUEST['page']);

$sql="select * from anli where shenhe=1 order by id DESC";

$result=mysql_query($sql);
//�����ҳ����
 $count = mysql_num_rows($result);
$size =9;//ÿҳ��ʾ������Ʒ
//���÷�ҳ����
$pager = get_pager('',array(),$count,$page,$size);

$sql="select * from anli  where  shenhe=1 order by id DESC limit $pager[start],$pager[size]";

$result=mysql_query($sql);
?>
<div id="Body_Right">
  <div class="Path"><a href="index.php" alt="">��ҳ</a>><a href=anli.php />�ɹ���������</a></div>

    <ul class="Photo_Text">
	<?php
	while($data=mysql_fetch_array($result))
{
	  ?>
                  <li><a href="anliview.php?id=<?php echo $data[id]?>"><img src="./upload/<?php echo $data[pic]?>" height="150" width="150" /><br /><?php echo cnsubstr($data[title],5)?></a></li>
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