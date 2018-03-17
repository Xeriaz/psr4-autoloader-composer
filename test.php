<?php

use Nfq\Academy\Homework\ClassA;
use Nfq\Academy\Homework\Subpackage\ClassB;

require_once __DIR__.'/vendor/autoload.php';

$a = new ClassA();
$a->doSomething();

$b = new ClassB();	
$b->doSomething();
