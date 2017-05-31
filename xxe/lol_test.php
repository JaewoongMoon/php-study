<?php

$s0 = <<<XML
	<!DOCTYPE test
	[<!ENTITY lol "lollollollollollol">]>
	<test><testing>
	foo
	</testing></test>
XML;

$xml = $s0;
$until = 500;
$acc = "";

for($i=0; $i < $until; $i++){
	$acc = $acc. "&lol;";
}
$xml = str_replace("foo", $acc, $s0);

$dom = new DOMDocument();
$dom->loadXML($xml, LIBXML_NOENT | LIBXML_DTDLOAD);
$doc = simplexml_import_dom($dom);
echo $doc->testing;


?>
