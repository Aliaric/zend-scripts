<?php
/**
 * Created by PhpStorm.
 * User: dmitrij.rebrov
 * Date: 09/07/2018
 * Time: 15:06
 */

$xmlFile = "<root>
<css>
    <element>
    <csstag>
    <title>background-color</title>
    <value>#FFF</value>
    </csstag>
    <csstag>
    <title>color</title>
    <value>#333</value>
    </csstag>
    <csstag>
    <title>font-family</title>
    <value>Verdana, Geneva, sans-serif</value>
    </csstag>
    </element>
    </css>
    </root>";
$xml = simplexml_load_string($xmlFile);
foreach($xml->css as $css) {
    echo (string) $css->element['id']."{";
    foreach($xml->css->element->csstag as $tag) {
        $temp = $tag->title.": ".$tag->value.";";
        echo $temp;
    }
    echo "}";
}