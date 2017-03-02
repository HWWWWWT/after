<div id="Left">
  <div class="Product_List">
    <p class="Top"><a href="/baiyida/class.php?id=2">产品列表</a></p>
    <ul>
                  <?php
//调用产品分类的
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

  <div class="Technical_Support">
    <p class="Top"><a href="/baiyida/class.php?id=5">技术支持</a></p>
    <div class="Telephone">
      公司电话：<b>0991-123456 </b><br />
      公司传真：<b>0991-654321</b><br />
      电子邮件：<b>allv@yahoo.cn</b><br />
      公司地址：<b>新疆乌鲁木齐人民路888号</b><br />
    </div>
  </div>
</div>