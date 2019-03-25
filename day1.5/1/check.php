<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Title</title>
</head>
<body>

<?php
$nickname =  $_POST["nickname"];
$email =  $_POST["email"];
$goiken =  $_POST["goiken"];

// string & int

if($nickname == ''){
  print "ニックネームが入力されてません！";
}else{
  print "ようこそ";
  print $nickname;
  print "様";
  print "<br />";
}

if($email == ""){
  print "メールアドレスが入力されていません";
}else{
  print "メールアドレス";
  print $email;
  print "<br />";
}

if($goiken == ""){
  print "ご意見が入力されていません";
}else{
  print "ご意見";
  print $goiken;
  print "<br />";
}

?>

</body>
</html>