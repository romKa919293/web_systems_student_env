<?php

class Login extends Field
{

    public function __construct($label, $name, $value = null)
    {
        parent::__construct("text", $label, $name, $value);
    }

    public function correctTest()
    {
        if($this->getValue() == "")
        {
            $this->setError();
            return false;
        }
        return true;
    }

}