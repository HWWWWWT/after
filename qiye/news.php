<?php
require("header.php");
require("./mysql.php");
require("left.php");
//Ĭ�ϵ�����������ģ��ı���
	   //��ҳ
$page = empty($_REQUEST['page']) ? '1' : intval($_REQUEST['page']);
//���ݲ������ݸ���sql���
if($type=="")
$sql="select * from news order by id DESC";
else
$sql="select * from news  where type ='$type' order by id DESC";//����������ѯ
$result=mysql_query($sql);
//�����ҳ����
 $count = mysql_num_rows($result);
$size =10;//ÿҳ��ʾ��������
//���÷�ҳ����
$pager = get_pager('',array(),$count,$page,$size);
if($type=="")
$sql="select * from news order by id DESC limit $pager[start],$pager[size]";
else
$sql="select * from news where type ='$type' order by id DESC limit $pager[start],$pager[size]";

$result=mysql_query($sql);


?>

<div id="Body_Right">
  <div class="Path"><a href="index.php" alt="">��ҳ</a>><a href=news.php >��ҵ����</a></div>
    <p class="Channel">

    <a href="news.php?type=��ҵ����" >��˾����</a>


    <a href="news.php?type=��ҵ��̬">��ҵ��̬</a>

    <a href="news.php?type=��Ʒ����">��Ʒ����</a>

    </p>
    <ul class="List_Text">
	<?php
	//ѭ����ʾ
while($data=mysql_fetch_array($result))
{
	  ?>
<li><a href="view.php?id=<?php echo $data[id]?>"><?php echo $data[title]?></a></li>
<?php
		  }
		  ?>

  </ul>
  <div class="Pagination"><?php

  //���÷�ҳ���
  require("page.php");

  ?></div>
</div>
<?php
require("footer.php");
?>