<div id="Left">
  <div class="Product_List">
    <p class="Top1"><a href="about.php"></a></p>
    <ul>
                  <?php
//���������ҵ��Ϣ
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
    <p class="Top"><a href="#">����֧��</a></p>
    <div class="Telephone">
      ��˾�绰��<b>0991-123456 </b><br />
      ��˾���棺<b>0991-654321</b><br />
      �����ʼ���<b>allv@yahoo.cn</b><br />
      ��˾��ַ��<b>�½���³ľ������·888��</b><br />
    </div>
  </div>
</div>