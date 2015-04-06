<?php

class SchemaForm extends BaseTemplate
{

    private $formArgs = array();

    public function __construct($formArgs)
    {
        if(is_array($formArgs))
        {
            $this->formArgs = $formArgs;
            parent::__construct(__DIR__);
        }
        else
        {
            throw new Exception("Error!");
        }
    }


    private function parseFields()
    {
        $fields_info = array();
        foreach($this->formArgs["fields"] as $index=>$field)
        {
            $fields_info[$index]=$field->getArgs();
        }
        $this->formArgs["fields"] = $fields_info;
    }

    public function render()
    {
        $this->parseFields();
        return $this->twig->render("form.html", $this->formArgs);
    }

}