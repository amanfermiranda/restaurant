<?php

namespace App;
class Request
{
    private $controller;
    private $method;
    private $id;

    public function getController()
    {
        return $this -> controller;
    }

    public function setController($controller)
    {
        $this->controller = $controller;
    }

    public function getMethod()
    {
        return $this -> method;
    }

    public function setMethod($method)
    {
        $this->method = $method;
    }

    public function getId()
    {
        return $this -> id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

public function __construct() 
{
var_dump($_server['request_uri'])
}
     
public function send()
{
    
}


}