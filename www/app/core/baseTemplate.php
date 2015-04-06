<?php

abstract class BaseTemplate
{

    protected $twig = null;//шаблонизатор

    public function __construct($dir)//инициализация шаблонизатора по выбранной теме
    {
        include_once "lib/Twig/Autoloader.php";
        Twig_Autoloader::register();
        $templateCol = new Twig_Loader_Filesystem($dir.'/templateCollection');
        $this->twig = new Twig_Environment($templateCol, array(
            'cache'       => 'compilation_cache',
            'auto_reload' => true
        ));

    }

    abstract public function render();


}