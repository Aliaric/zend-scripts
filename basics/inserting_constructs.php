<?php
/**
 * Created by PhpStorm.
 * User: dmitrij.rebrov
 * Date: 15/06/2018
 * Time: 14:35
 */

// Inserting PHP
$bankBalance = 1;
if ($bankBalance > 0): ?>
Black
  <?php else: ?>
RED
    <?php endif; ?>
    <?= $bankBalance ?>

<?php
// one parameter, no brackets
echo "hello\r\n";
// two parameters, brackets (syntax error)
//echo('hello', 'world');
// two parameters, no brackets
echo 'hello', 'world';