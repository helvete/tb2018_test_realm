<?php

namespace app;

class ExampleClass
{
    /** @var mixed */
    protected $variable;

    /**
     * Common setter...
     *
     * @param  string   $data
     */
    public function setVariable(string $data): ExampleClass
    {
        $this->variable = $data;

        return $this;
    }


    /**
     * Common setter...
     *
     * @param  string   $data
     */
    public function getVariable(): string
    {
        return $this->variable;
    }
}
