<?php
require("header.php");
require("./mysql.php");

?>
<div id="Left">
    <div class="Product_List">
      <p class="Top"><a href="product.php">��Ʒ�б�</a></p>
      <ul>

<?php
//���ò�Ʒ�����
$sql="select * from pclass where reid=0";
$result=mysql_query($sql);
while($data=mysql_fetch_array($result))
	{
		?>

      <li><a href="product.php?dalei=<?php echo $data[id]?>"  title="<?php echo $data[name]?>"><?php echo $data[name]?></a></li>

<?php
}
	?>
      </ul>
    </div>
    <div class="Successful_Cases">
      <p class="Top"><a href="anli.php">�ɹ�����</a></p>
      <div id="demo">
        <ul id="demo1">
<?php
//���óɹ�������
$sql="select * from anli where pic!='' order by id DESc limit 0,3";
$result=mysql_query($sql);
while($data=mysql_fetch_array($result))
	{
		?>
                  <li><a href="anliview.php?id=<?php echo $data[id]?>"><img src="./upload/<?php echo $data[pic]?>" width="207" /><p><?php echo $data[title]?></p></a></li>

<?php
	}
	?>
        </ul>
        <ul id="demo2">
        </ul>
      </div>
    </div>
    <script type="text/javascript">
   var speed1=0;
   var MyMar1;
   function toleft(){
          speed1=30;//�����ٶ�
           document.getElementById("demo2").innerHTML=document.getElementById("demo1").innerHTML;
           function Marquee1(){
               if(document.getElementById("demo2").offsetHeight-document.getElementById("demo").scrollTop<=0){
                   document.getElementById("demo").scrollTop-=document.getElementById("demo2").offsetHeight;
               }
               else{
                 document.getElementById("demo").scrollTop++;
               }
           }
          MyMar1=setInterval(Marquee1,speed1);
           document.getElementById("demo").onmouseover=function(){
               clearInterval(MyMar1);
           }
           document.getElementById("demo").onmouseout=function()
           {
              MyMar1=setInterval(Marquee1,speed1);
           }

   }
   toleft();
</script>
  </div>
  <div id="Center">
    <div class="Product_Center">
      <p class="Top"><a href="product.php">��Ʒ����</a></p>
      <ul>
	  <?php
$sql="select * from product where pic!='' and shenhe=1 order by id DESC limit 0,8";
$result=mysql_query($sql);
$i=0;
while($data=mysql_fetch_array($result))
{
	  ?>
                  <li><a href="viewproduct.php?id=<?php echo $data[id]?>"><img src="./upload/<?php echo $data[pic]?>" height="100" width="100" /><p><?php echo cnsubstr($data[title],5)?></p></a></li>
<?php
}
		  ?>


      </ul>
      <div class="clear"></div>
    </div>
    <div class="Product_Platform">
      <p class="Top"><a href="news.php?type=��Ʒ����">��Ʒ����ƽ̨</a></p>
      <ul>
	  <?php
$sql="select * from news where type='��Ʒ����'  order by id DESC limit 0,12";
$result=mysql_query($sql);
$i=0;
while($data=mysql_fetch_array($result))
{
	  ?>
 <li><a href="view.php?id=<?php echo $data[id]?>"><?php echo $data[title]?></a></li>
<?php
		  }
		  ?>


      </ul>
      <div class="clear"></div>
    </div>
  </div>
  <div id="Right">
    <div class="Company_News">
      <p class="Top"><a href="/baiyida/class.php?id=3">��˾����</a></p>
      <ul>


 <?php
$sql="select * from news where type='��ҵ����'  order by id DESC limit 0,12";
$result=mysql_query($sql);
$i=0;
while($data=mysql_fetch_array($result))
{
	  ?>
 <li><a href="view.php?id=<?php echo $data[id]?>"><?php echo $data[title]?></a></li>
<?php
		  }
		  ?>

      </ul>
    </div>
    <div class="Technical_Support">
      <p class="Top"><a href="/baiyida/class.php?id=5">����֧��</a></p>
      <div class="Telephone">
        ��˾�绰��<b>0991-123456 </b><br />
        ��˾���棺<b>0991-654321</b><br />
        �����ʼ���<b>allv@yahoo.cn</b><br />
        ��˾��ַ��<b>�½���³ľ������·888��</b><br />
      </div>
    </div>
  </div>
<?php
require("footer.php");
?>