<?php


<<__EntryPoint>>
function main_bug34306() {
$var = array('aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa12345678901234567890123456789012345678901234567890ba12345678901234567890123456789012345678901234567890ba12345678901234567890123456789012345678901234567890ba12345678901234567890123456789012345678901234567890b12345678901234567891234567890123123121231211111' => 1);
$buf = wddx_serialize_value($var, 'name');
echo "OK\n";
}
