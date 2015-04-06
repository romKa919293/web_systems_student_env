<?php

Class AutoIncluder
{

    private $patterns = Array(//шаблоны путей для автозагрузки
        "app/core/*.php",
        "app/modules/*/*.php",
        "app/modules/*/*/*.php",
        "app/modules/*.php"
    );

    public function __construct()
    {
        $this->loadAll();//загрузить все файлы проекта
    }

    private function loadAll()
    {
        foreach ($this->patterns as $way)//перебирая шаблоны автозагрузки
        {
            foreach (glob($way) as $locWay)//находим пути ко всем файлам проекта
            {
                include_once $locWay;//и подключаем их
            }
        }
    }

}