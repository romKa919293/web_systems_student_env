<?php

Class Router
{

    static private $_instance;//экземпляр класса
    private $routes = Array(
        "GET"=>Array(),
        "POST"=>Array(),
        "ANY"=>Array()
    );//роуты


    private function __construct()//запрет на конструктор
    {
    }

    private function __clone()//запрет на клонирование
    {
    }

    public static function getInstance()//реализуем синглтон(класс может иметь только оди лбъект)
    {//синглтон
        if(!isset(self::$_instance))
        {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    private function constructUrl($base,$params)
    {//построить url из base и params
        $base = str_replace('/', '\/', $base);
        preg_match_all("/(?<=:)[a-zA-Z0-9]++/", $base, $matches);
        foreach($matches[0] as $match)
        {
            if(array_key_exists($match, $params))
            {
                $base = str_replace(":$match", "($params[$match])", $base);
            }
        }
        return "^$base$";
    }


    public function get($base, $command, $params)//добавить роут гет
    {//добавить роут GET
        $this->set('GET', $base, $command, $params);
    }



    public function post($base, $command, $params)
    {//добавить роут POST(аналогично GET)
        $this->set('POST', $base, $command, $params);
    }


    public function any($base, $command, $params)
    {//добавить роут ANY(аналогично GET и POST)
        $this-> set('ANY', $base, $command, $params);
    }

    private function set($type, $base, $command, $params)
    {
        $base = $this->constructUrl($base, $params);
        if(!is_array($command)){
            throw new Exception("It's not array!");
        }
        if (!method_exists($command[0], $command[1])) {
            throw new Exception("Method $command[1] not exists");
        }
        $this->routes[$type][$base] = $command;
    }

    public function process($url,$method)
    {//функция маршрутизации
        if(!in_array($method , array('GET', 'POST')))//проверка массива роутов
        {
            throw new Exception("Error!!");
        }

        $routes = $this->routes[$method];//и выборка нужной части массива
     /*   if(count($this->routes["ANY"])>0)
        {
            $routes = $routes + $this->routes["ANY"];
        }*/
        foreach($routes as $index => $command)//перебрать нужную часть массива роутов
        {
            if(preg_match_all("/$index/", $url, $matches)!==0)//найти совпадение url одного из элементов массива с url в браузере
            {
                $attrs = array();
                foreach(array_slice($matches,1) as $value){
                    $attrs[] = array_pop($value);
                }
                $controller = new $command[0]();//создать эземпляр найденного по url класса
                return call_user_func_array(array($controller,$command[1]), $attrs);//и вызвать соответствующий найденому роуту метод класса
            }
        }
        return 0;
    }
}