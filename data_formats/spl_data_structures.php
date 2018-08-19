<?php
/**
 * Created by PhpStorm.
 * User: dmitrij.rebrov
 * Date: 02/07/2018
 * Time: 20:56
 */

class BadCount implements Countable
{
    public function count()
    {
        return 42; }
}
$a = new BadCount;
echo count($a);  // 42

$stack = new SplStack();
$stack->push(5); // 5
$stack[] = 4; // 5, 4
$stack->push(3); // 5, 4, 3
$stack->add(1, 100); // $stack->add(1, 100);
echo "Pop: " . $stack->pop() . PHP_EOL; //0, 100, 4, returns 3
foreach ($stack as $key => $value) {
    echo "$key => $value" . PHP_EOL;
}

class MyHeap extends SplHeap
{
    function compare($a, $b)
    {
        return $a <=> $b;
    }
}
$heapExample = new MyHeap;
$heapExample->insert(10);
$heapExample->insert(5);
$heapExample->insert(15);
while ($heapExample->valid()) {
    echo $heapExample->current() . PHP_EOL;
    $heapExample->next();
}

// If we were to amend the code and extend SplMinHeap or SplMaxHeap instead of
// SplHeap, the output is the same as the previous code!