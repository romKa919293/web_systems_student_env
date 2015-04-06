<?php

Class Kube//тема куб
{
    private $my_view_collection = array(//колекция отображений
        "field" => "KubeField",
        "form" => "KubeForm"
    );

    public function getView($view_name)//получить нужное отображение
    {
        if(isset($this->my_view_collection[$view_name]))
        {
            return $this->my_view_collection[$view_name];
        }
        else
        {
            return null;
        }
    }


}
