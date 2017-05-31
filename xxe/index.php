<html>
	<body>
<?php
$xml = $_POST['xml'];
if ($xml){
	echo "input length: ".strlen($_POST['xml']);
	echo '<br>';
	$dom = new DOMDocument();
//	libxml_disable_entity_loader(false);
	
	$dom->loadXML($xml, LIBXML_NOENT | LIBXML_DTDLOAD);
//	$dom->loadXML($xml);
	$doc = simplexml_import_dom($dom);
	}
?>
	<h1> Vulnerable XML Parser</h1>
	<form action="index.php" method='post'>
		<textarea name="xml" rows="12" cols="100"></textarea>
		<br>
		<input type="submit" size="55">
		<br>
		<?php echo $doc->testing; ?>
	 </form>
	</body>
</html>