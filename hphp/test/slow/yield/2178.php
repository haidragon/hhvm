<?php

class X {
  public static function gen() {
    static $x;
    yield ++$x;
    yield 2;
    yield ++$x;
  }
}
class Y extends X {
}

<<__EntryPoint>>
function main_2178() {
$g = X::gen();
foreach ($g as $i) var_dump($i);
}
