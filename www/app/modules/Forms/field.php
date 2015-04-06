<?php

abstract class Field//абстрактное поле - наследники лежат в папке fields
{

    private $fieldArgs = Array();//параметры поля

    public function __construct($type, $label, $name, $value = null)//инициализировать поле и его параметры
    {
        $this->fieldArgs["type"] = $type;
        $this->fieldArgs["label"] = $label;
        $this->fieldArgs["name"] = $name;
        $this->fieldArgs["error"] = false;
        if(isset($value))
        {
            $this->fieldArgs["value"] = $value;
        }
    }

    public function getValue()//получить значение поля
    {
        return $this->fieldArgs["value"];
    }

    public function setValue($new_value)//установить значение поля
    {
        if(isset($new_value))
        {
            $this->fieldArgs["value"] = $new_value;
        }
    }

    public function getArgs()//получить аргументы поля
    {
        return $this->fieldArgs;
    }

    public function setError()//установить флаг ошибки в true
    {
        $this->fieldArgs["error"] = true;
    }

    abstract  public function correctTest();//проверка на правильность реализуется в наследниках

    public function render()//отрисовка поля
    {
        $view = ThemeComutator::getView("field");//получение отображения поля через тимизацию
        $drawer = new $view($this->getArgs());
        return $drawer->render();//и его отрисовка
    }

}
