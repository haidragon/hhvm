<?hh
function test($v, $m, $s) {
  if ($v instanceof MutableVector) var_dump($v == 1);
  if ($m instanceof MutableMap) var_dump($m == 1);
  if ($s instanceof MutableSet) var_dump($s == 1);
}

<<__EntryPoint>>
function main_instanceof() {
$vector = Vector {};
$map = Map {};
$set = Set {};
$pair = Pair {null, null};
echo "==== Vector ====\n";
var_dump($vector instanceof Container);
var_dump($vector instanceof KeyedContainer);
var_dump($vector instanceof Traversable);
var_dump($vector instanceof KeyedTraversable);
var_dump($vector instanceof Indexish);
var_dump($vector instanceof ConstSetAccess);
var_dump($vector instanceof ConstIndexAccess);
var_dump($vector instanceof ConstMapAccess);
var_dump($vector instanceof ConstVector);
var_dump($vector instanceof ConstMap);
var_dump($vector instanceof ConstSet);
echo "==== Map ====\n";
var_dump($map instanceof Traversable);
var_dump($map instanceof KeyedTraversable);
var_dump($map instanceof Container);
var_dump($map instanceof KeyedContainer);
var_dump($map instanceof Indexish);
var_dump($map instanceof ConstSetAccess);
var_dump($map instanceof ConstIndexAccess);
var_dump($map instanceof ConstMapAccess);
var_dump($map instanceof ConstVector);
var_dump($map instanceof ConstMap);
var_dump($map instanceof ConstSet);
echo "==== Set ====\n";
var_dump($set instanceof Traversable);
var_dump($set instanceof KeyedTraversable);
var_dump($set instanceof Container);
var_dump($set instanceof KeyedContainer);
var_dump($set instanceof Indexish);
var_dump($set instanceof ConstSetAccess);
var_dump($set instanceof ConstIndexAccess);
var_dump($set instanceof ConstMapAccess);
var_dump($set instanceof ConstVector);
var_dump($set instanceof ConstMap);
var_dump($set instanceof ConstSet);
echo "==== Pair ====\n";
var_dump($pair instanceof Traversable);
var_dump($pair instanceof KeyedTraversable);
var_dump($pair instanceof Container);
var_dump($pair instanceof KeyedContainer);
var_dump($pair instanceof Indexish);
var_dump($pair instanceof ConstSetAccess);
var_dump($pair instanceof ConstIndexAccess);
var_dump($pair instanceof ConstMapAccess);
var_dump($pair instanceof ConstVector);
var_dump($pair instanceof ConstMap);
var_dump($pair instanceof ConstSet);
echo "==== Jit tests ====\n";
test($vector, $map, $set);
}
