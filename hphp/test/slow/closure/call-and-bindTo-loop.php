<?php

class FooBar {
  private $x = 3;
}

<<__EntryPoint>>
function main_call_and_bind_to_loop() {
$a = function ($add) {
  return $this->x + $add;
};

$fb = new FooBar();

$r1 = 0;
$st = microtime(true);
for ($i = 0; $i < 1000; $i++) {
  $x = $a->bindTo($fb, "FooBar");
  $r1 += $x(4);
}
$end = microtime(true);
var_dump($r1);
var_dump($end - $st);

$r2 = 0;
$st = microtime(true);
for ($i = 0; $i < 1000; $i++) {
  $r2 += $a->call($fb, 4);
}
$end = microtime(true);
var_dump($r2);
var_dump($end - $st);
}
