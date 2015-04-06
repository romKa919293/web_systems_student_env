<?php

class Button extends Field
{

    public function __construct($label, $name, $value = null)
    {
        parent::__construct("submit", $label, $name, $value);
    }

    public function correctTest()
    {
        return true;
    }

}