<?php

abstract class BaseForm//абстрактная форма - наследники лежат в папке Forms
{

    private $firstOpen = true;//флаг первого открытия
    protected $errors;//ошибки формы
    protected $my_content = array();//содержимое формы(поля и параметры)

    public function __construct()
    {
        $this->constructor();//инициализировать форму
    }

    abstract protected function constructor();//инициализатор формы - реализуется в наследниках

    abstract protected function currentTest();//проверка конкретного наследника формы

    private function correctTest()//общая проверка формы
    {
        $ret_val = true;
        foreach($this->my_content["fields"] as $field)//пробежаться по всем полям формы
        {
            if(!$field->correctTest())//и проверить их на ошибки
            {
                $ret_val = false;
            }
        }
        if(!$this->currentTest())//проверить конкретную форму на ошибки
        {
            $ret_val = false;
        }
        return $ret_val;//вернуть true если ошибок не найдено,, иначе false
    }

    abstract protected function submit();//redirect формы - реализуется в наследниках

    public function formProcess()//провцесс работы формы
    {
        $this->getData();//получить данные с формы
        if (!$this->firstOpen)// и если форма открыта не впервые
        {
            if ($this->correctTest()) {//и не найдено ошибок
                $this->submit();//redirect
                return;
            }
        }
        echo $this->render();//иначе отрисовать форму(заново)
    }

    private function getData()//счтиать данные из формы в поля
    {
        if(count($_POST)>0)//если ПОСТ не пустой, то форма открыта НЕ в первый раз
        {
            foreach($this->my_content["fields"] as $name=>$field)//пробежаться по полям формы
            {
                $field->setValue($_POST[$name]);//и считать в них нужные значния из ПОСТа
            }
            $this->firstOpen = false;//и установить флаг первого открытия в false
            return;
        }
        $this->firstOpen = true;//иначе форма открыта в первый раз.
    }

    private function render()//отрисовать форму
    {
        $view = ThemeComutator::getView("form");
        $drawer = new $view($this->my_content);
        return $drawer->render();
    }


}