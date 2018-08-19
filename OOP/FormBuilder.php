<?php
/**
 * Created by PhpStorm.
 * User: dmitrij.rebrov
 * Date: 10/07/2018
 * Time: 12:47
 */

class FormBuilder
{
    private $elements = array();
    public function label($text) {
        $this->elements[] = "<label>$text</label>";
return $this;
}
    public function input($type, $name, $value = '') {
        $this->elements[] = "<input type=\"$type\" name=\"$name\" value=\"$value\" />";
return $this;
}
    public function textarea($name, $value = '') {
        $this->elements[] = "<textarea name=\"$name\">$value</textarea>";
return $this;
}
    public function __toString() {
        return join("\n", $this->elements);
    }
}
$b = new FormBuilder();
echo $b->label('Name')->input('text', 'name')->textarea('message', 'My message');
