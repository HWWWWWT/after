<div id="Left">
  <div class="Product_List">
    <p class="Top1"><a href="about.php"></a></p>
    <ul>
                  <?php
//分组调用企业信息
$sql="select title from qiyeinfo group by title";
$result=mysql_query($sql);
while($data=mysql_fetch_array($result))
	{
		?>

      <li><a href="about.php?title=<?php echo $data[title]?>"  ><?php echo $data[title]?></a></li>

<?php
}
	?>

    </ul>
  </div>

  <div class="Technical_Support">
    <p class="Top"><a href="#">技术支持</a></p>
    <div class="Telephone">
      公司电话：<b>0991-123456 </b><br />
      公司传真：<b>0991-654321</b><br />
      电子邮件：<b>allv@yahoo.cn</b><br />
      公司地址：<b>新疆乌鲁木齐人民路888号</b><br />
    </div>
  </div>
</div>