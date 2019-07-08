# About
JavaScriptの基本的な操作を説明する。以下JSと略す(女子小学生と混同しないように)
PHPがサーバー側で実行されるプログラミング言語だったのに対し、
JSはクライアント側のブラウザ上で実行されるプログラミング言語である。

サーバー側の言語の役割はデータベースからのデータの取得やその処理だったのに対し、
クライアント側の言語の役割はボタンなどのUIの構成や、アニメーションの再生処理を司る。

通常のWeb開発では、このようにサーバー側の言語とクライアント側の言語を使い分けて開発する。

PHP版の説明と比較して読んでみよう

# 基本データ型、組み込み関数

もっとも簡単な処理は、

```javascript
1+1;
```

でも、これだと人間からは処理結果は見えない。それを表示する為に

```javascript
console.log(1+1);
```

PHPでは`print`だったのに対し、JSでは`console` `.` `log` という表記になっている。
これは明らかに関数とは違うものだ。

JSには、「各値ごとに、その値専用の関数を付け足すことができる」という機能がある。
JSは「オブジェクト指向」という機能に対応しており、これはその機能の一部である。
なお、PHPもオブジェクト指向に対応している。

(オブジェクト指向の説明としては明らかに不十分だが、今はこの解釈でよい。)

例えば、文字列を特定の文字で区切る関数について。

```php
<?php
explode(",","1,2,3");
```

PHPだとこのように関数で表現するが、

```javascript
"1,2,3".split(",")
```

JSではこのように表現する。
`"1,2,3"`という文字列専用の関数が`split`であり、その関数は上記のようにして呼び出すことができる。

このように、「特定の値専用の関数」を「メソッド」と呼び、
メソッドが付いている値のことを「オブジェクト」と呼ぶ。

上のプログラムは「文字列1,2,3のsplitメソッドを呼び出す」と言える。

話を戻そう。

```javascript
console.log(1+1);
```
このプログラムは、`console`という名前が付いたオブジェクトの`log`メソッドを呼び出している。
これは、「文字を表示する」というよりは「コンソールにログを書き出す」という方が適切だろう。
ともあれ、JSで文字を表示するにはこの方法を使う必要がある。　

ちなみに、`console`オブジェクトは他にも次のようなメソッドを持っている。
```javascript
console.info("info");
```
```javascript
console.error("エラー");
```
それぞれ挙動を確認してみよう


四則演算

```javascript
console.log(1 + 2 * 3);
```

文字列

```javascript
console.log("Hello, world!");
```

文字列でも、+ 演算子は使える。

```javascript
console.log("Hello, " + "world!");
```

PHPでは文字列の結合には . 演算子を使う必要があり、+演算子が使えなかった。
これはPHPの方がより適切な言語設計をできていると言える。詳しくは授業で解説。

小数点

```javascript
console.log(114.514);
```

`lenght`メソッド。これは文字列の長さを得る事ができる。

```javascript
console.log("114514".length);
```


# 変数

PHPの変数と違い、変数名は`$`で始まらない。
代わりに、変数宣言時には`let`とつける必要がある。

```javascript
let a = 114514;

console.log(a);
```

```javascript
let food = 120;
let drink = 160;

let tax = 1.10;
let price = (food + drink ) * tax;

console.log(price);

```



# 関数

自分で関数を作ってみよう


```javascript
function taxApply(price, tax){
  return price * tax;
}

console.log(taxApply(100, 1.08));

```

メソッドも自分で作ることができるが、ここでは詳細は説明しない。
とりあえず、答えだけ置いておく。

```javascript
let myConsole = {
  log: function(message) {
    console.log(message);
  } 
};

myConsole.log("www");
```

## 演算子
演算子は、PHPとほぼ変わらない

算術演算子
- `=` 代入演算子
- `+` 和算
- `-` 引算
- `*` 乗算
- `/` 除算
- `%` 余算

比較演算子
- `<` 
- `>` 
- `<=` 
- `>=` 
- `==`
- `!==`
- `!=`  
- `!==`

# 制御構文

if文について
```javascript

let bool = true;

if(bool){
  // boolがtrueの時、ここの処理が実行される
}else{
  // boolがfalseの時、ここの処理が実行される
}
```

switchもPHPとほぼ変わらない

```javascript
switch (3) {
  case 1: console.log("1");
    break;
  case 3: console.log("3");
    break;
  default: console.log("1");

}
```

# 繰り返し構文

for

```javascript
for(let i = 0; i < 10; i++){
    console.log("ww");
}
```

while

```javascript
while(true){
    alert("兵庫県警ホイホイ");
}

```

## 配列
```javascript
let arr = [1,2,3];

for(let i = 0; i < arr.length; i++){
    console.log(arr[i]);
}

```