<?php

/**
 * Контроллер списка товаров
 */
class ArticlesController extends Controller
{
    public $view = 'v_articles';

    public $title = 'Статьи';


    /**
     * Вывод статей
     *
     * @param array $var
     *
     * @return void
     */
    public function index($var)
    {
        $article = new Article();
        
        return $article->getData();
    }

}
