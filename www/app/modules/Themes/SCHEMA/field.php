<?php

class SchemaField extends BaseTemplate
{

    private $fieldArgs = array();

    public function __construct($fieldArgs)
    {
        if(is_array($fieldArgs))
        {
            $this->fieldArgs = $fieldArgs;
            parent::__construct(__DIR__);
        }
        else
        {
            throw new Exception("Error!");
        }
    }


    public function render()
    {
        return $this->twig->render("field.html", $this->fieldArgs);
    }

}