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

if($nickname == "" || $email == "" || $goiken == ""){
  print "<form>";
  print "<input type='button' onclick='history.back()'  value='戻る' />";
  print "</form>";

}else{

  print "<form method='post' action='thanks.php'>";

  print '<input name="nickname" type="hidden" value="'. $nickname .'">';
  print '<input name="email" type="hidden" value="'. $email .'">';
  print '<input name="goiken" type="hidden" value="'. $goiken .'">';

  print "<input type='button' onclick='history.back()'  value='戻る' />";
  print "<input type='submit' value='OK' />";
  print "</form>";
}

?>

</body>
</html>