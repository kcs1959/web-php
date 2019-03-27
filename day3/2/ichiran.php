<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Title</title>
</head>
<body>

<?php

$dsn = 'mysql:dbname=KCS;host=localhost';
$user = "root";
$password = "";
$dbh = new PDO($dsn, $user, $password);
$dbh->query("SET NAMES utf8");

$sql = "SELECT * FROM anketo WHERE 1";
$stmt = $dbh->prepare($sql);
$stmt->execute();

while (true){
  $rec = $stmt->fetch(PDO::FETCH_ASSOC);
  if(!$rec){
    break;
  }

  print $rec["code"];
  print $rec["nickname"];
  print $rec["email"];
  print $rec["goiken"];
  print "<br />";
}

//$dbh = null;

?>

</body>
</html>