<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Title</title>
</head>
<body>

<?php
$code = $_POST["code"];

// DBの名前を指定
$dsn = 'mysql:dbname=KCS;host=localhost';
// ユーザー名はroot、パスワードは空でログインする
$user = "root";
$password = "";
$dbh = new PDO($dsn, $user, $password);
$dbh->query("SET NAMES utf8");

// クエリを実行
$sql = "SELECT * FROM anketo WHERE code=?";
$data = [$code];

// プリペアードステートメントを用いてクエリを実行する
// プリペアードステートメントは、簡単なセキュリティー対策の為に用いられる　
$stmt = $dbh->prepare($sql);
$stmt->execute($data);

while (true){
  // データを配列として返すように指定する
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