<?php
// Load XML file
$xml = new DOMDocument;
$xml->load('bookstore.xml');

// Load XSL file
$xsl = new DOMDocument;
$xsl->load('bookstore.xsl');

// Configure the transformer
$proc = new XSLTProcessor;

// Attach the xsl rules
$proc->importStyleSheet($xsl);

echo $proc->transformToXML($xml);
?>