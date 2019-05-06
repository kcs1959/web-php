# About 
PHPの手続き型の部分までの基本文法の説明をする。
**プログラミング言語の習得はたった一回の講義では絶対に身につかないので、自分でコードを書きまくったり調べたりして身につけてください。
プログラミング言語既習者向けの説明にするので、基本的な部分はぶっ飛ばすよ！**

PHPは、"PHP: Hypertext Preprocessor"の略で、
再帰的頭字語(その正式名称の中にそれ自身が含まれている頭字語)となっている。
「PHPはHTMLのプリプロセッサである」とPHP自身を再帰的に説明している。

プログラムは結局のところ、データとそれを操作するプログラムで構成される
データには型があり、操作には演算子や関数を用いる.


# 基本データ型
PHPで扱うデータは、「型」によって種類分けされる。

- int: 整数型
- float, double: 浮動小数点数型
- string: 文字列型
- bool: 真偽値型
- array: 配列


## 配列について、ちょいとだけ
複数のデータにラベル付けして、それらをまとめて管理できるようにするデータ。

```php
$a = [];
$a[0] = 1;
$a[1] = 2;
$a[2] = 3;
// 今までとは、別のデータ型も入れられるよ
$a[3] = "str";

// これで初期化することもできる
// $a = [1,2,3, "str"]; 

print($a[0]); // 1
print($a[1]); // 2
print($a[2]); // 3
print($a[3]); // str

$a[2] = "www";
print($a[2]); // www


// 連想配列
$b = [
  "apple" => "りんご",
  "banana" => "バナナ",
  "合計金額" => 1200
];

print($b["apple"]); // りんご
print($b["banan"]); // バナナ
print($b["合計金額"]); // 1200

```

# 演算子

## 代数演算子
- `+`
- `-`
- `*`
- `/`
- `%`
- `**`

```php
print(5 / 2); // 2.5 
print(5 % 2); // 1
print(5 ** 2); // 25
```


## 代入演算子
- `=`
- `+=, -=, *= ...`

```php
$a = 1;
$a += 3;
print($a); // 4
```


## 比較演算子
- `<`
- `>`
- `<=`
- `>=`
- `==`
- `===`
- `!=`
- `!==`
- `?  :`


```php
var_dump(3 == "3"); // true
var_dump(3 === "3"); // false
var_dump(3 === 3); // true

print(true ? "a" : "b"); // "a"
print(1 == 2 ? "c" : "d" ) // "d"
```


## 論理演算子
- `&&, and`
- `||, or`
- `!`

```php
var_dump(true and ture); // ture
```

## 加算子/減算子
- `++`
- `--`

```php
$a = 1;
$b = 10;

$a++;
print($a); // 2
$b--;
print($b); // 9
```

## その他
文字列演算子としての、`.`と`.=`

```php
print("Hello" . "world");
$a = "Hello";
$a .= "World";
print($a);
```


## N項演算子
1,2,3項演算子

1項演算子は、
`!, ++, --` とか  
2項演算子は、
`=, ==, +` とか  
3項演算子は、
`? :` だけ？


## 暗黙の型変換
通常、演算子に渡すデータの型が合わないと、プログラムのエラーと認識される
```php
print("aaa"++); // エラー！
print(true + "aaa"); // エラー！(正確には警告)
```

ところが、PHPでは一部データ型が食い違っていても、型をいい感じに変換して処理される。

```php
print("3" + 3); // 6
print(1.2 + "3"); // 6
```

これを暗黙の型変換という。



# 関数
最初から定義されている組み込み関数と、ユーザーが自由に定義できるユーザー定義関数がある。
演算子と違い、関数は自分で定義できる！

## 組み込み関数の例

```php
print(floor(3.14)); // 3
print(strlen("114514")); // 6
```

## ユーザー定義関数

```php
function taxApply($price){
  return $price * 1.08;
}

print(taxApply(100)); // 108
```

```php
function taxApply($price, $tax){
  $result = $price * $tax;
  
  return $result;
}


print(taxApply(100, 1.08)); // 108
```


# 制御構文

## 条件分岐

ifとswitch

```php
$a = 1;

if($a == 1){
  print("a は 1です");
}else{
  print("a は 1ではないです");  
}
```


```php
$a = 1;

switch($a){
  case 1:
     print("a は 1です");
     break;
  case 2:
     print("a は 2です");     
     break;
  default:
     print("a は 1でも2でもないです");     
}
```


## 反復処理

whileとfor




# ちょいと応用
型付けとか。時間があったら


# 問題

## 階乗
整数を渡したら、その階乗を返す関数を作ろう！

```php
// 完成形のイメージ
function factorial($num){
  ...
}

print(factorial(3)); // 3! => 6
print(factorial(5)); // 5! => 120
```

## FizzBuzz
整数を渡したら、1からその整数まで表示する。ただし、3の倍数は"Fizz", 5の倍数は"Buzz", 15の倍数は"FizzBuzz"に書き換えて表示する。

```php
function fizz_buzz($num){
  ...
}

fizz_buzz(20); // 1,2, Fizz, 4, Buzz, Fizz, 7, 8, Fizz, Buzz, ...    FizzBuzz, 16, 17, Fizz, 19, Buzz
```


