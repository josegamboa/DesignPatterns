<!DOCTYPE html>
<?php 
  use JGSmartSystems\DesignPatterns\Behavioral\Iterator\Test\TestIterator;
  $loader = require __DIR__ . '/vendor/autoload.php';
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $test = new TestIterator();
        $test->runExample();
       
        ?>
    </body>
</html>
