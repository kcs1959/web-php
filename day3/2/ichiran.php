<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Title</title>
</head>
<body>

<?php
// DBの名前を指定
$dsn = 'mysql:dbname=KCS;host=localhost';
// ユーザー名はroot、パスワードは空でログインする
$user = "root";
$password = "";
// DBオブジェクトの作成
// オブジェクト指向についての説明はそのうち…
$dbh = new PDO($dsn, $user, $password);
$dbh->query("SET NAMES utf8");

// クエリの指定
$sql = "SELECT * FROM anketo WHERE 1";
$stmt = $dbh->prepare($sql);
// クエリを実行
$stmt->execute();

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

//$dbh = null;

?>

</body>
</html>