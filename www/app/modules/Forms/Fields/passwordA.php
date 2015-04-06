<?php

class Password extends Field
{

    public function __construct($label, $name, $value = null)
    {
        parent::__construct("password", $label, $name, $value);
    }

    public function correctTest()
    {
        if($this->getValue() == "" || iconv_strlen($this->getValue())<6)
        {
            $this->setError();
            return false;
        }
        return true;
    }

}