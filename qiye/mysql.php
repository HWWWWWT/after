<?php
error_reporting(E_ALL ^ E_NOTICE);
$mysql_server_name='localhost'; //数据库服务器
$mysql_username='root'; //数据库用户名
$mysql_password='123456'; //数据库密码
$mysql_database='qiye'; //数据库名
$conn=mysql_connect($mysql_server_name,$mysql_username,$mysql_password) or die("数据库连接失败");//连接mysql数据库服务器
mysql_query("set names gbk");//设置数据库编码
mysql_select_db($mysql_database,$conn);//选择数据库
//定义上传路径
define('SYS_ROOT', str_replace("\\", '/', dirname(__FILE__)));
define('IMG_ROOT', SYS_ROOT."/upload/");
@extract($_POST);
@extract($_GET);
function getfenlei($id,$reid,$table){

	$sql="select * from $table where reid=0";
	$result=mysql_query($sql);
	echo '<select name="dalei" onchange="changelocation(this.value)">';
	$i=1;
while($row=mysql_fetch_array($result))
{
	if($reid==''){
    	if($i==1)$initid=$row['id'];}
	else
		$initid=$id;
	if ($id==$row['id'])
	echo "<option value='".$row['id']."' selected>".$row['name']."</option>";
	else
	echo "<option value='".$row['id']."'>".$row['name']."</option>";
	$i++;
	}

	echo "</select>";
	//读取子分类

	 $sql1="select * from $table where reid='$initid'";
	 	$result1=mysql_query($sql1);

	 echo ' -> <select name="xiaolei">';
while($row1=mysql_fetch_array($result1))
	{
	  if($row1['id']==$reid)
	  echo "<option value='".$row1['id']."' selected>".$row1['name']."</option>";
	  else
	  echo "<option value='".$row1['id']."'>".$row1['name']."</option>";
	 }

 	 echo "</select>";


}
//创建上传目录
function RecursiveMkdir($path) {
	if (!file_exists($path)) {
		RecursiveMkdir(dirname($path));
		@mkdir($path, 0777);
	}
}
//上传图片
function upload_image($inputname, $image=null, $type='upimages', $width=440) {
	$year = date('Y'); $day = date('md'); $n = time().rand(1000,9999).'.jpg';
	$z = $_FILES[$inputname];
	if ($z && strpos($z['type'], 'image')===0 && $z['error']==0) {
		if (!$image) {
			RecursiveMkdir( IMG_ROOT . '/' . "{$type}/" );
			$image = "{$type}/{$n}";
			$path = IMG_ROOT . '/' . $image;

		} else {
			RecursiveMkdir( dirname(IMG_ROOT .'/' .$image) );
			$path = IMG_ROOT . '/' .$image;
		}
//echo $path ;


			move_uploaded_file($z['tmp_name'], $path);

		//echo $image;exit;
		return $image;
	}
	return $image;
}
//分页函数.
function get_pager($url, $param, $count, $page = 1, $size = 10)
{
    $size = intval($size);
    if($size < 1)$size = 10;
    $page = intval($page);
    if($page < 1)$page = 1;
    $count = intval($count);

    $page_count = $count > 0 ? intval(ceil($count / $size)) : 1;
    if ($page > $page_count)$page = $page_count;

    $page_prev  = ($page > 1) ? $page - 1 : 1;
    $page_next  = ($page < $page_count) ? $page + 1 : $page_count;

    $param_url = '?';
    foreach ($param as $key => $value)$param_url .= $key . '=' . $value . '&';

    $pager['url']        = $url;
    $pager['start']      = ($page-1) * $size;
    $pager['page']       = $page;
    $pager['size']       = $size;
    $pager['count']		 = $count;
    $pager['page_count'] = $page_count;

	if($page_count <= '1')
	{
	    $pager['first'] = $pager['prev']  = $pager['next']  = $pager['last']  = '';
	}
	else
	{
		if($page == $page_count)
		{
			$pager['first'] = $url . $param_url . 'page=1';
			$pager['prev']  = $url . $param_url . 'page=' . $page_prev;
			$pager['next']  = '';
			$pager['last']  = '';
		}
		elseif($page_prev == '1' && $page == '1')
		{
			$pager['first'] = '';
			$pager['prev']  = '';
			$pager['next']  = $url . $param_url . 'page=' . $page_next;
			$pager['last']  = $url . $param_url . 'page=' . $page_count;
		}
		else
		{
			$pager['first'] = $url . $param_url . 'page=1';
			$pager['prev']  = $url . $param_url . 'page=' . $page_prev;
			$pager['next']  = $url . $param_url . 'page=' . $page_next;
			$pager['last']  = $url . $param_url . 'page=' . $page_count;
		}
	}
    return $pager;
}
// 截取字符串的,支持中文
function cnsubstr($sourcestr,$cutlength)
{
   $returnstr='';
   $i=0;
   $n=0;
   $str_length=strlen($sourcestr);
   while (($n<$cutlength) and ($i<=$str_length))
   {
      $temp_str=substr($sourcestr,$i,1);
      $ascnum=Ord($temp_str);
      if ($ascnum>=224)
      {
         $returnstr=$returnstr.substr($sourcestr,$i,3);
         $i=$i+3;
         $n++;
      }
      elseif ($ascnum>=192)
      {
         $returnstr=$returnstr.substr($sourcestr,$i,2);
         $i=$i+2;
         $n++;
      }
      elseif ($ascnum>=65 && $ascnum<=90)
      {
         $returnstr=$returnstr.substr($sourcestr,$i,1);
         $i=$i+1;
         $n++;
      }
      else
      {
         $returnstr=$returnstr.substr($sourcestr,$i,1);
         $i=$i+1;
         $n=$n+0.5;
      }
   }
         if ($str_length/3>$cutlength){
          $returnstr = $returnstr . "...";
      }
    return $returnstr;
}
?>