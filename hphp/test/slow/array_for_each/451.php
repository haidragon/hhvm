<?php

function f3() {
  $i = 0;
  $foo = array('a'=>1, 'b'=>2, 'c'=>3, 'd'=>4, 'e'=>5, 'f'=>6);
  $bar = array();
  $a = 0;
  foreach ($foo as $key => &$val) {
    echo "key=$key val=$val\n";
    if ($key == 'b' && $a == 0) {
      $a = 1;
      unset($foo['c']);
      $foo['c'] = 333;
    }
    ++$i;
    if ($i >= 20)
      break;
  }
  var_dump($foo);
}

<<__EntryPoint>>
function main_451() {
f3();
}
