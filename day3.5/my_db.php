<?php

file_put_contents("a.txt", "1,ogiwara,fun\n2,tarou,peace");

$str = file_get_contents("a.txt");

$rows = explode("\n", $str);

foreach ($rows as $row){
  $columns = explode(",", $row);

  echo "code: ". $columns[0] . " name: ". $columns[1] . " comment: " . $columns[2] . "<br/>";
}