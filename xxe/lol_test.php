<?php

$s0 = <<<XML
	<!DOCTYPE test
	[<!ENTITY lol "lollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollol">]>
	<test><testing>
	foo
	</testing></test>
XML;

$xml = $s0;
$until = 10000;
$acc = "";

for($i=0; $i < $until; $i++){
	$acc = $acc. "&lol;";
}
$xml = str_replace("foo", $acc, $s0);


// entity loading disabled
libxml_disable_entity_loader(true);

$dom = new DOMDocument();
$dom->loadXML($xml);
$doc = simplexml_import_dom($dom);
echo $doc->testing;


?>
