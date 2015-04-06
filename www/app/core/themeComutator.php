<?php

class ThemeComutator
{

    static private $theme = null;//активная тема

    static public function setupTheme($new_theme_name)//установить активную тему
    {
        self::$theme = new $new_theme_name();
    }

    static public function getView($view_name)//получить название ативной темы
    {
        return self::$theme->getView($view_name);
    }

}