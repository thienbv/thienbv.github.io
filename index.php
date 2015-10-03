<?php
require_once 'HamlPHP/HamlPHP.php';
require_once 'HamlPHP/Storage/FileStorage.php';

// Make sure that a directory _tmp_ exists in your application and it is writable.
$parser = new HamlPHP(new FileStorage(dirname(__FILE__) . '/tmp/'));

$content = $parser->parseFile('index.haml');

echo $parser->evaluate($content);