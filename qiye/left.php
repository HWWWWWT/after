<div id="Left">
  <div class="Product_List">
    <p class="Top"><a href="/baiyida/class.php?id=2">��Ʒ�б�</a></p>
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