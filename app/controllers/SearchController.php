<?php

class SearchController extends Controller
{
    public $view = 'v_search';
    public $title = 'Результаты поиска';


    /**
     * Вывод результатов поиска
     *
     * @param array $var
     *
     * @return void
     */
    public function index($var)
    {
        $search = new Search();
        
        return $search->getData();
    }
    
    
    
}

