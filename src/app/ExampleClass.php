<?php

namespace app;

class ExampleClass
{
    /** @var string */
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
     * Common getter...
     *
     * @return  string
     */
    public function getVariable(): string
    {
        return $this->variable;
    }
}
