<?php
/**
 * Created by PhpStorm.
 * User: dmitrij.rebrov
 * Date: 29/06/2018
 * Time: 14:46
 */

$xmlString = <<<XML
<root>
<teams>
<team>Silverbacks</team>
<team foo="winner">Golden Eyes</team>
</teams>
</root>
XML;
$domDoc = new DOMDocument();
$domDoc->loadXML($xmlString);
$xpath = new DomXPath($domDoc);
$team2 = $xpath->query('teams/team[2]');
var_dump($team2) ;
$team2_entry = $xpath->evaluate('teams/team[2]');
var_dump($team2_entry);
$parent = $xpath->query('teams');
$textElement = $domDoc->createElement('team', 'Bearhides');
$parent->item(0)->insertBefore($textElement, $team2->item(0));
echo PHP_EOL;

/*
Method
appendChild - Adds a new child node at the end of the children.
insertBefore - Adds a new child before a reference node.
parentNode - The parent of the node, or null if there is no parent.
cloneNode - Clones a node and optionally all of its descendent nodes.
setAttributeNS - Sets an attribute with namespace namespaceURI and name name to
 the given value. If the attribute does not exist, it will be created.
 */


$books = <<<XML
<books>
<book id="1">Silverbacks</book>
<book id="2">Golden Eyes</book>
</books>
XML;

$xml = simplexml_load_string($books);
echo $xml->book[1];
//echo $xml->xpath("/books/book[@id=2]");
echo PHP_EOL;
$c= $xml->children(); echo $c[1];
