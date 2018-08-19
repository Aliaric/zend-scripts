<?php
/**
 * Created by PhpStorm.
 * User: dmitrij.rebrov
 * Date: 02/07/2018
 * Time: 22:03
 */

$xmlString = <<<XML
<root>
<teams>
<team>Silverbacks</team>
<team>Golden Eyes</team>
</teams>
</root>
XML;
$xml = new SimpleXMLElement($xmlString);
$result = $xml->xpath('teams/team[1]');
var_dump($result);
echo $result[0] . PHP_EOL; // silverbacks


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
$textElement = $domDoc->createElement('team', 'Bearhides');
$result = $domDoc->xpath('teams/team[2]');
$result[1]->insertBefore($textElement);
echo $domDoc->saveXML();  // this will produce a fatal error
