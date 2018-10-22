<?php

$menu=$_POST['menu'];
$item=$_POST['item'];
$price=$_POST['price'];

$filename="menu.xml";
$xml = new XMLWriter();
    $xml->openMemory();
    
    $xml->setIndent(true);
	if	(filesize("menu.xml")==0){
		$xml->startDocument('1.0', 'UTF-8');
		$xml->startElement('information');
	}
    
      $xml->startElement("userdata");
	  $xml->writeElement("menu",$menu);
	  
      $xml->writeElement("item",$item);
	  
      $xml->writeElement("price",$price);
      $xml->endElement();

    $xml->endElement();
    $xml->endDocument();

    
    $file = $xml->outputMemory();
    file_put_contents($filename,$file,FILE_APPEND);
    
   
echo "XML write successful! <a href='index.php'>go back</a>";
?>