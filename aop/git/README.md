# Gitについて
Gitは、ソースコードのバージョン管理ツールである。
Gitは各ファイルごとにバックアップが作成されるため、
- コードを前のバージョンに戻す
- 各バージョンごとの変更内容の確認
- 別のタイムライン(世界線)を作ることができる(これを、Gitではブランチと呼ぶ)
などの操作ができるようになる。
エラー発生時の原因特定、複数人での共同開発、機能のテストなど、様々な作業に応用できる。

# 実用例
Gitの具体的な操作を、筆者が開発しているモバイルアプリ、Penmarkでの実用例を元に説明する。
細かいコマンドについては後に説明する。

- diffでローカルとの差分
- addで変更対象として追加
- commitで変更内容を記録
- logでコミットログの確認
- log -pで詳細なコミットログの確認
- revertで変更内容

さらに、GUIでの操作方法を説明する。
ブランチの分け方については、まずタイムラインを書いて概要を説明し、実用例として
[Penmarkのアプリバージョンごとのブランチ](https://dev.azure.com/penmark-jp/_git/Penmark)、
[このリポジトリの分け方](https://github.com/kcs1959/web-php)
について説明する。

複数人作業時の、Gitでの戦略(materブランチを元に機能追加ごとにブランチ生やしたり、
developブランチ作ったり)について説明する。

# 実際に、git initからのデモ
Gitの各用語(ワークツリー、ステージングエリア、ローカルリポジトリ、リモートリポジトリ)とコマンド実行時の流れを説明する。

![概念図](https://camo.qiitausercontent.com/304d5a012dcb67e57295bd183086186f0570a98e/68747470733a2f2f71696974612d696d6167652d73746f72652e73332e616d617a6f6e6177732e636f6d2f302f3132393038382f35373232366638322d633534302d633264302d663563382d6261643362366536646661332e706e67)

[引用元](https://qiita.com/satoshi1335/items/ead109412430a078feaa)


まずはVimで簡単なコードを書く

```bash
$ vi hello.c
```

```hello.c
#include <stdio.h>

int main(void){
  printf("Hello world!\n");
  return 0;
}
```

コンパイルして、実行

```bash
$ gcc hello.c
$ ./a.out
```

gitの初期化

```bash
$ git init
$ ls -a  # .gitフォルダの生成を確認
```

Gitで管理しないものをgit ignoreに追加

```bash
$ vi .gitignore
```

```.gitignore
*.out
```

git ignoreで書かれているもの以外、全てステージング領域に追加　

```bash
$ git add .
```

バージョンの記録(コミット)
```bash
$ git commit -m "Initial commit"
```

コミットログの確認
```bash
$ git log
```

より細かいコミットログの確認
```bash
$ git log -p
```

hello.cを変えてみる

```hello.c
#include <stdio.h>

int main(void){
  printf("Hello Git!\n");
  return 0;
}
```

変更内容を見てみる(ワークツリーと、ステージングエリアの差分を表示する)
```bash
$ git diff
```

コンパイルして、再度コミットする。  
a.outの内容も当然変わっているが、git ignoreに追加した為、
無視されていることを確認する。
```bash
$ gcc hello.c 
$ git add .
$ git commit -m "update message"
```

変更内容を、元に戻す(Hello, Worldの状態に戻す)
```bash
$ git revert HEAD
$ cat hello.c
```

ブランチの分け方とかは、自分で確認してみてね

# Githubについて
Githubは、Gitで管理しているソースコードをホスティングすることができるサービス。
GitとGithubを混同している人が非常に多いので注意する。

Githubの各機能(issue, PRとか)について説明し、どういったところで使われているのか説明する
- [PHPのコード](https://github.com/php/php-src)
- [Ogiwaraのコード](https://github.com/Ogiwara-CostlierRain464)
- [Flutterのコード](https://github.com/flutter/flutter)

Githubのようにソースコードのホスティングができるサービスは、他にはGitlab, Bitbucket, 
Azure Repoなどがある。

# CI/CDについて
Gitの仕組みをうまく利用して、コミット時にソースコードのチェック(CI)や、コンパイル・デプロイを自動で行う(CD)を自動で行うことができる。
いくつかのCIサービス(Circle CI, Bitrise, Azure Pipeline)を紹介し、Penmarkでの活用例を説明する。

# 実習
実習は各自でやってね、下のリンクとかが参考になるかも？

- [Gitの本](https://www.amazon.co.jp/わかばちゃんと学ぶ-Git使い方入門%E3%80%88GitHub、Bitbucket、SourceTree〉-湊川-あい/dp/4863542178/ref=asc_df_4863542178/?tag=jpgo-22&linkCode=df0&hvadid=295686767484&hvpos=1o1&hvnetw=g&hvrand=12506259148326646793&hvpone=&hvptwo=&hvqmt=&hvdev=c&hvdvcmdl=&hvlocint=&hvlocphy=1009343&hvtargid=pla-526224398321&psc=1&th=1&psc=1)


- [Gitのコマンド一覧](https://git-scm.com/docs)  
- [Git公式のチュートリアル](https://git-scm.com/docs/gittutorial)
- [Githubへの鍵登録](https://qiita.com/katsukii/items/9fd5bbe822904d7cdd0a)