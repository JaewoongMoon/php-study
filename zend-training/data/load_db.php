<?php
if (function_exists('sqlite_open')){
	echo 'SQLite PHP extension loaded';
}
if (extension_loaded('sqlite3')){
	echo 'Sqlite3 extention loaded..';
}

$db_path = 'sqlite:' . realpath(__DIR__) . '/zftutorial_php.db';

echo $db_path;
										 echo "\n";
										 
$db = new PDO($db_path);
$ph = fopen(__DIR__ . '/schema.sql', 'r');
while($line = fread($fh, 4096)){
	$db->exec($line);
}
fclose($fh);

?>