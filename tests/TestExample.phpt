<?php

namespace Tests;

use app\ExampleClass;
use Tester\Assert;

require '../run.php';

class TestExample extends \Tester\TestCase
{
    const TEST_STRING_OK = 'string';
    const TEST_STRING_KO = 'failure';

    public function testSimpleGetter()
    {
        $instance = new ExampleClass();
        $instance->setVariable(self::TEST_STRING_OK);

        Assert::same($instance->getVariable(), self::TEST_STRING_OK);
        Assert::notSame($instance->getVariable(), self::TEST_STRING_KO);
    }
}

$test = new TestExample();
$test->run();
