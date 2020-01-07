<?php

include __DIR__ . "/vendor/autoload.php";

print_r((new UniBen\ExampleComposerDockerCompose\SayHello('Ben'))->call() . "\n");
