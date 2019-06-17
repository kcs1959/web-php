# About
データベースについての説明をする。

データベースとは、検索や蓄積が容易にできるよう整理された情報の集まり。
データベースを使うと、高度なデータの保存、削除、検索ができるようになる

# まずはざっくり
Day3のデモを行ってから説明

データベースにはいろいろな種類があり、ここではMySQLというデータベースを使う。SQLという言語を用いて、データの操作を行う。
MySQLではデータはテーブルと呼ばれる表ごとに管理され、各テーブルはレコードの集まりから構成される。
図を用いて説明する。
[ここ](https://academy.gmocloud.com/know/20160425/2259)参考に説明

次のようなテーブルについて考えてみる

|code|nickname|email|goiken|
|-----------|------------|------------|------------|
|1|ogiwara|ogiwara@keio.jp|美味しかったです|
|2|kobayashi|kobayashi@keio.jp|また行きたい|

まず、このテーブルを作るには、以下のようなSQL文を用いる(説明の都合上、ちょっと省略)
```sql
CREATE TABLE `anketo` (
  `code` INT auto_increment,
  `nickname` varchar,
  `email` varchar,
  `goiken` varchar,
)
```

これで空のテーブルができる。次に、このテーブルにデータを入れていく

```sql
INSERT INTO anketo (nickname, email, goiken) VALUES (ogiwara, ogiwara@keio.jp, 美味しかったです)
```

これで、レコードを一行追加できる。
ここで、codeを指定していないことに気がつくと思うが、auto_incrementを指定しているので、
自動で+1された値が追加される。これはidなどの用途で利用される。
*また、テーブル作成時に登録したフィールド以外のフィールドは追加できない*

codeが1のレコードデータを取得するには、以下のようなSQL文を用いる
```sql
SELECT * FROM anketo WHERE code=1
```

## PHPMyAdminを用いたデータベース管理
MySQLには、PHPMyAdminというWebアプリを用いてデータベース管理ができる機能がある。
SQL文を直接打ち込むよりも直感的な操作ができるようになっている。
XAMMPを立ち上げて、http://localhost:8080にアクセスすると表示される。
データベースを作成し、テーブルを追加すると、Day3のコードが動かせる状態になる(前回の授業では、ここの説明を忘れている)

PHPMyAdminを用いたデータベース・テーブルの作成は[ここ](https://hackmd.io/@Gzb0Mvn9RwqSmYZkkXhEcA/ByW8SdNyB)が参考になる

# コードを用いて説明する
Day3のDB関連の処理をする部分にコメントを記述しておいたので、そこをもとに説明する

# ここから先はちょいむずい話

## なぜデータベースをつかうのか
自分で何かしらのファイルに書き込んで、自分なりのフォーマットを使うのももちろん可能
でも、
- アルゴリズムの問題
- 増え続けるデータに対するデータ構造の複雑化
- ログの管理
- 障害時のロールバック

など、大量の機能が必要になる。こういった大量の機能を備えたデータベース製品が、MySQL,SQLiteなどである

## データベースの種類

データベースの種類
### 構造
- 階層型データモデル
- ネットワーク型データモデル
- リレーショナルデータベース

### SQLについて
- DDL(Data Definition Language) create, drop, alter
- DML(Data Manipulation Language) SELECT/INSERT/UPDATE/DELETE
- DCL(Data Control Language) BEGIN、COMMIT、ROLLBACK
に分類される


