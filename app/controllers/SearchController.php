<?php

class SearchController extends Controller
{
    public $view = 'v_search';
    public $title = 'Результаты поиска:';


    /**
     * Вывод результатов поиска
     *
     * @param array $var
     *
     * @return void
     */
    public function index($var)
    {
        $data = $_POST;
        $search_str = $_POST['search_str'];
        
        if ($search_str ){
            $search = new Search();
            return $search->searchData($data);
        }
    }
    
    
    
}

