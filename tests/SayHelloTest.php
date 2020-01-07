<?php

namespace UniBen\ExampleComposerDockerCompose\Tests;

use UniBen\ExampleComposerDockerCompose\SayHello;

class SayHelloTest extends TestCase
{
    public function testSayHello()
    {
        $this->assertEquals('Hello, Ben!', (new SayHello('Ben'))->call());
    }
}
