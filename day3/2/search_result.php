<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Title</title>
</head>
<body>

<?php
$code = $_POST["code"];

$dsn = 'mysql:dbname=KCS;host=localhost';
$user = "root";
$password = "";
$dbh = new PDO($dsn, $user, $password);
$dbh->query("SET NAMES utf8");

$sql = "SELECT * FROM anketo WHERE code=?";
$data = [$code];

$stmt = $dbh->prepare($sql);
$stmt->execute($data);

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


?>

</body>
</html>