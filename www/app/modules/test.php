<?php

$Router = Router::getInstance();

$commandT = Array("Test","testFunc");
$command1 = Array("AuthorForm","formProcess");
$command2 = Array("RegForm","formProcess");
$commandW = Array("Test","winFunction");
$paramsCol = Array("login"=>"login","reg"=>"reg","win"=>"win", "id" => "\d+");

$Router->get("/:login",$command1,$paramsCol);
$Router->get("/",$commandT,$paramsCol);
$Router->get("/:reg",$command2,$paramsCol);
$Router->post("/:login",$command1,$paramsCol);
$Router->get("/user/:id",$commandT,$paramsCol);

$Router->get("/:win",$commandW,$paramsCol);

Class Test
{

    function testFunc($id)
    {
        print "Hello, $id!!";
    }

    function winFunction()
    {
        var_dump("Это победа!!");
    }
}
