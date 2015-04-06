<?php

class Name extends Field
{

    public function __construct($label, $name, $value = null)
    {
        parent::__construct("text", $label, $name, $value);
    }

    public function correctTest()
    {
        $matches = array();
        if($this->getValue() == "" || preg_match("/[^A-я]+/",$this->getValue()))
        {
            $this->setError();
            return false;
        }
        return true;
    }

}