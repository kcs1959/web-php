# クライアント・サーバー
Webはクライアント・サーバーというアーキテクチャを利用しています。このアーキテクチャはクライアントとサーバーがHTTPなどのプロトコルを通してHTMLなどを送り合うものです。クライアント（Webブラウザなど）がサーバーにリクエストを送り、サーバーがクライアントにレスポンスを返します。
# HTTP
HTTPとは、簡単にいえばクライアント・サーバー間でデータを受け渡し合うために作られた手段の一つです。（実際には[いろいろな手段]()があります）HTTPでは数少ないメソッドしか用意されていません。このメソッドをリクエストに盛り込むことで様々なデータの操作を可能にしています。

---
| メソッド名 | 意味    | 
|-----------|-------- |
| GET       | データの取得   |
| POST      | データの作成   |
| PUT       | データの更新   |
| DELETE    | データの削除   |
| HEAD      | ヘッダの取得   |
---

day0.5では、実際にPHPのプログラムを書いたと思います。

``` html
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Title</title>
</head>
<body>

<?php
$nickname =  $_POST["nickname"];

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
```

```html
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Hello, World</title>
</head>
<body>

<form method="post" action="check.php">
  ニックネームを入力してね<br/>
  <input name="nickname" type="text" style="width: 100px" />
  <br />
  <input type="submit" value="送信" />
</form>

</body>
</html>
```
`index.html`では、`form`タグ内で


`$nickname = $_POST["nickname"]`

