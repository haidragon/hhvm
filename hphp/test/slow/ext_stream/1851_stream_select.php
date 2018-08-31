<?php

// Issue #1851.
<<__EntryPoint>>
function main_1851_stream_select() {
$stream = fopen("php://temp", "r");

$read_streams = array($stream);
$write_streams = array();
$except = null;

$result = stream_select($read_streams, $write_streams, $except, 0);

var_dump($write_streams);

fclose($stream);
}
