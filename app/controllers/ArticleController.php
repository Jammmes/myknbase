<?php

/**
 * Контроллер статьи
 */
class ArticleController extends Controller
{
    public $view = 'v_article_Card';
    public $title = 'Статья';
    protected $article;
    
    public function __construct()
    {
        $this->article = new Article();
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
