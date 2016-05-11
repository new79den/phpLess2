<?php

class View
{
    protected $data = array();

    public function assign($name, $value)
    {
        $this->data[$name] = $value;
    }

    public function display($template)
    {
       foreach ($this->data as $key => $val){
           $$key = $val;
           var_dump($val);
       }
        include __DIR__ . "/../view/" . $template;
    }
}