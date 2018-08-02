<?php

class TagsController extends Controller
{
    public $view = 'v_tags';
    public $title = 'Категории';
    protected $tag;
    
    
    public function __construct()
    {
        $this->tag = new Tag();  
    }


    /**
     * Вывод категорий
     *
     * @param array $var
     *
     * @return void
     */
    public function index($var)
    {   
        return $this->tag->getData();
    }
    
    /**
     * Добавление новой категории
     *
     *
     * @return void
     */
    public function add()
    {
        $tagName = $_POST['tagName'];               
        return $this->tag->addTag($tagName);
    }
    
    /**
     * Удаление категории
     *
     *
     * @return void
     */
    public function delete()
    {
        $data = $_POST['id'];                
        return $this->tag->deleteTag($id);
    }
    
    /**
     * Изменение категории
     *
     *
     * @return void
     */
    public function edit()
    {
        $data = $_POST;                
        
        return $this->tag->editTag($data['id'],$data['tagName']);
    } 
}

