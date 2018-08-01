<?php

class Template extends Model
{

    protected $view;
    
    public function __construct($view)
    {
        $this->view = $view;
    }

    public function render($data)
    {
        ob_start();      
        extract($data, EXTR_OVERWRITE);
        include Config::get('path_templates').'/'.$this->view.'.php';
        return ob_get_clean();
    }
    
}
