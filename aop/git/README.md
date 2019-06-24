# Gitについて
Gitは、ソースコードのバージョン管理ツールである。
Gitは各ファイルごとにバックアップが作成されるため、
- コードを前のバージョンに戻す
- 各バージョンごとの変更内容の確認
- 別のタイムライン(世界線)を作ることができる(これを、Gitではブランチと呼ぶ)
などの操作ができるようになる。
エラー発生時の原因特定、複数人での共同開発、機能のテストなど、様々な作業に応用できる。

# 実用例の説明
Gitの具体的な操作を、筆者が開発しているモバイルアプリ、Penmarkでの実用例を元に説明する

diffでローカルとの差分
addで変更対象として追加
commitで変更内容を記録
logでコミットログの確認
log -pで詳細なコミットログの確認
revertで変更内容

さらに、GUIでの操作方法を説明する。
ブランチの分け方については、まずタイムラインを書き、Penmarkのアプリバージョンごとのブランチ、
このリポジトリの分け方について
複数人作業時の、Gitでの戦略について(materブランチを元に機能追加ごとにブランチ生やしたり、
developブランチ作ったり)

# 実際に、git initからのデモを書いておく

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

git ignoreで書かれているもの以外、全てGitでの管理対象として追加

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

変更内容を見てみる
```bash
$ git diff
```

コンパイルして、再度コミットする
a.outの内容も当然変わっているが、git ignoreに追加した為
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
Githubのようにソースコードのホスティングができるサービスは、他にはGitlab, Bitbucket, 
Azure Repoなどがある。

# CI/CDについて
Gitの仕組みをうまく利用して、コミット時にソースコードのチェック(CI)や、コンパイル・デプロイを自動で行う(CD)を自動で行うことができる。
いくつかのCIサービス(Circle CI, Bitrise, Azure Pipeline)を紹介し、Penmarkでの活用例を説明する。
