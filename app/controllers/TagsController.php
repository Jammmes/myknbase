<?php

class TagsController extends Controller
{
    public $view = 'v_tags';
    public $title = 'Категории';


    /**
     * Вывод категорий
     *
     * @param array $var
     *
     * @return void
     */
    public function index($var)
    {
        $tag = new Tag();
        
        return $tag->getData();
    }
    
    
    
}

