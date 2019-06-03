<html>
<center>
<?php
  $user_name = $_SESSION['user_name'];
  $fold_name = $_SESSION['fold_name'];
  $proj_name = $_SESSION['proj_name'];
  $id=$_POST['id'];



  echo "<form id=\"form1\" method=\"post\" action=\"mt1.php\" hidden>";
  echo "<input type=\"text\" value=\"$id\" name=\"id\">";
  echo "<input type=\"submit\">";
  echo "</form>";
  echo "<script type=\"text/javascript\">form1.submit();</script>";

?>
執行MT
<form action="mt1.php" method="post">
<input type="submit" value="執行mt">
</form><BR>
執行SMAIN
<form action="smain.php" method="post">
<input type="submit" value="執行smain">
</form>


<form action="staproject.php" method="post">
<input type="submit" value="回到主畫面">
</form>


</center>
</html>
