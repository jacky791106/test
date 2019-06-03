<!DOCTYPE html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<html>
<center>
<head>
  <title>上傳至資料庫</title>
  <link rel="stylesheet" type="text/css" href="css/upload_style.css"></link>
  <link rel="stylesheet" type="text/css" href="css/font-awesome.css"></link>
</head>
<body>
  <div class="container">
    <form action="result.php" method="post">
      <p class="p">上傳成功</p>
      <div>
        <input type="submit" name="backresult" value="回到下載頁" class="btn_backresult"></BR></BR>
      </div>
    </form>
    <form action="staproject.php" method="post">
      <div>
        <input type="submit" name="backhome" value="回到主畫面" class="btn_backhome"></BR></BR>
      </div>
    </form>
  </div>
</body>
</center>
</html>

<?php
session_start();
$fold_name=$_SESSION['fold_name'];
$user_name=$_SESSION['user_name'];
$proj_name=$_SESSION['proj_name'];
$filename_v=$_SESSION['filename_v'];
$filename2_sta1=$_SESSION['filename2_sta1'];
$filename2_sta2=$_SESSION['filename2_sta2'];

mysql_connect('localhost','root','A3141121');
mysql_select_db('result');
mysql_set_charset('utf8');

include_once"include/tool.inc.php";

if(!($database = mysql_connect("localhost","root","A3141121"))){
	die("Can not connect database! <br />");
}

if(!mysql_select_db("result",$database)){
	die("Can not open course database! <br />");
}

$v_File = fopen("./cloudstasim/$fold_name/$proj_name/result/$filename_v","r");
if ($v_File){
	while (!feof($v_File)){
		$info_v = fgets($v_File);
		// $str="SELECT info FROM upload WHERE info = '$info'";
		// $res = mysql_query($str);
		$str="INSERT INTO upload_v (user_name, proj_name, info) values ('$user_name','$proj_name','$info_v')";
		$res=mysql_query($str);
	}
	fclose($v_File);
}else{
	echo "error";
}

$sta1_File = fopen("./cloudstasim/$fold_name/$proj_name/result/$filename2_sta1","r");
if ($sta1_File){
	while (!feof($sta1_File)){
		$info_sta1 = fgets($sta1_File);
		// $str="SELECT info FROM upload WHERE info = '$info'";
		// $res = mysql_query($str);
		$str="INSERT INTO upload_sta1 (user_name, proj_name, info) values ('$user_name','$proj_name','$info_sta1')";
		$res=mysql_query($str);
	}
	fclose($sta1_File);
}else{
	echo "error";
}

$sta2_File = fopen("./cloudstasim/$fold_name/$proj_name/result/$filename2_sta2","r");
if ($sta2_File){
	while (!feof($sta2_File)){
		$info_sta2 = fgets($sta2_File);
		// $str="SELECT info FROM upload WHERE info = '$info'";
		// $res = mysql_query($str);
		$str="INSERT INTO upload_sta2 (user_name, proj_name, info) values ('$user_name','$proj_name','$info_sta2')";
		$res=mysql_query($str);
	}
	fclose($sta2_File);
}else{
	echo "error";
}




/*$v_file = fopen("C:/AppServ/www/cloudstasim/$fold_name/$proj_name/result/$filename_v","r");
$str_v = "SELECT info FROM upload_v WHERE info = '$v_file'";
$res_v = mysql_query($str_v);
$str_v = "INSERT INTO upload_v(".
         "info".
         ")values(".
         "'$v_file'".
         ")";
$res = mysql_query($str_v);

$sta1_file = fopen("C:/AppServ/www/cloudstasim/$fold_name/$proj_name/result/$filename2_sta1","r");
$str_sta1 = "SELECT info FROM upload_sta1 WHERE info = '$sta1_file'";
$res_sta1 = mysql_query($str_sta1);
$str_sta1 = "INSERT INTO upload_sta1(".
         "info".
         ")values(".
         "'$sta1_file'".
         ")";
$res = mysql_query($str_sta1);

$sta2_file = fopen("C:/AppServ/www/cloudstasim/$fold_name/$proj_name/result/$filename2_sta2","r");
$str_sta2 = "SELECT info FROM upload_sta2 WHERE info = '$sta2_file'";
$res_sta2 = mysql_query($str_sta2);
$str_sta2 = "INSERT INTO upload_sta2(".
         "info".
         ")values(".
         "'$sta2_file'".
         ")";
$res = mysql_query($str_sta2);



/*$info=$_POST['info'];

$txtFile = fopen("C:/cloud/alu1_mt/alu1.v","r");
if ($txtFile)
{
  while (!feof($txtFile))
  {
      $info = fgets($txtFile);
      //echo $info;
      //echo "<br />";
  }

  fclose($txtFile);

  if(!($database = mysql_connect("localhost","root","A3141121")))
  {
    die("Can not connect database! <br />");
  }

  if(!mysql_select_db("test3",$database))
  {
    die("Can not open course database! <br />");
  }

  $str=
     "SELECT info FROM upload".
     "WHERE info = '$info'";
  $res = mysql_query($str);

  $str=
     "INSERT INTO upload(".
     "info".
     ")values(".
     "'$info'".
     ")";
  $res=mysql_query($str);

}

else
{
echo "error";
}*/


?>
