<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Title</title>
</head>
<body>

<?php
$nickname =  $_POST["nickname"];

// string & int

if($nickname == ''){
  print "ニックネームが入力されてません！";
}else{
  print "ようこそ";
  print $nickname;
  print "様";
}
?>

</body>
</html>