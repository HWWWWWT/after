<?php
require("header.php");
require("./mysql.php");
require("left.php");
$sql="select * from product where id=$id";
$result=mysql_query($sql);
$data=mysql_fetch_array($result);
//�����������
$sql="update product set hits=hits+1 where id=$id";
$result=mysql_query($sql);

?>
<div id="Body_Right">
  <div class="Path"><a href="index.php" alt="">��ҳ</a>><a href=product.php  alt=��Ʒ����/>��Ʒ����</a></div>
  <p class="Title"><?php echo $data[title]?></p>
  <div class="Article">
    <div class="Left_Photo"> <img src="./upload/<?php echo $data[pic]?>"  width="300" />
    <div class="Photo_Right">
      <p>��Ʒ��ţ�<?php echo $data[bianhao]?> </p>
      <p>��Ʒ���<b><?php echo $data[guige]?></b></p>
	        <p>��Ʒ�۸�<b><?php echo $data[price]?></b>Ԫ</p>

      <p>�����<?php echo $data[hits]?></p>
      <p>����ʱ�䣺<?php echo $data[addtime]?></p>

      </div>
      <div class="clear"></div>
    </div>
    <div class="Text">
    <p class="Tit">��Ʒ����</p>
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