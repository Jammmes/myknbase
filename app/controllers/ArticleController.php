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
    
    public function edit()
    {
     
        $result = null;
        
        $data = $_POST;
        
        $result = $this->article->edit($data);
  
        if ($result){
            
            return $result;
        }else{
            return ['Error'=>'Ошибка при сохранении статьи'];
        }
        
    }

}
