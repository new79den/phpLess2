<?php

class View
{
    protected $data = array();
    
    public function __set($name, $value)
    {
        $this->data[$name] = $value;
    }

    public function __get($name)
    {
       return $this->data[$name];
    }

    public function display($template)
    {
       foreach ($this->data as $key => $val){
           $$key = $val;
       }
        include __DIR__ . "/../view/" . $template;
    }
}