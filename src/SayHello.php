<?php

namespace UniBen\ExampleComposerDockerCompose;

class SayHello
{
    protected $name = null;

    /**
     * SayHello constructor.
     *
     * @param string $name
     */
    public function __construct($name = null) {
        $this->name = $name;
    }

    public function call() : string
    {
        return "Hello" . ($this->name ? ", $this->name!" : "!");
    }
}
