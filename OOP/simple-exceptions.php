<?php
/**
 * Created by PhpStorm.
 * User: dmitrij.rebrov
 * Date: 16/05/2018
 * Time: 17:59
 */

class LiarException extends Exception
{
    public function __construct(
      string $message = "Fuck you!" . PHP_EOL,
      int $code = 0,
      \Throwable $previous = null
    ) {
        echo $message;
        parent::__construct($message, $code, $previous);
    }
}

class Dog {
    public $word;
    public function talk(){
        return 'Doggie likes broccoli.';
    }
}
$doggy = new Dog();
try {
    if($doggy->talk() == 'Doggie likes broccoli.')
    {
        throw new LiarException(
          'Doggie is a big fat liar. He only likes cookies.' . PHP_EOL
        );
    }
    else
    {
        throw new Exception('Just because we can.');
    }
    echo 'An exception was thrown, so this will never print...'; // never print
}
catch(LiarException $e)
{
    echo "Somebody lied about something: {$e->getMessage()}" . PHP_EOL;
}
catch(Exception $e)
{
    echo "Somebody threw an exception: {$e->getMessage()}";
}