<?php

/**
 * Контроллер списка товаров
 */
class ArticlesController extends Controller
{
    public $view = 'v_articles';
    public $title = 'Статьи';
    protected $article;
    
    public function __construct()
    {
        $this->article = new Article();
    }

    /**
     * Вывод статей
     *
     * @param array $var
     *
     * @return void
     */
    public function index($var)
    {
        $authorization = Auth::getInstance()->authorization();
        $user_id = $authorization['user_id'];
        return $this->article->getData($user_id);
    }
    
    public function add()
    {
        $data = $_POST;                
        return $this->article->addArticle($data);
    }
    
    public function open()
    {
        $id = $_POST['id'];        
        return $this->article->openArticle($id);
    }
    

}
