<?php

class TagsController extends Controller
{
    public $view = 'v_tags';
    public $title = 'Категории';
    protected $tag;
    protected $userData;
    
    
    public function __construct()
    {
        $this->tag = new Tag(); 
        $this->userData = Auth::getInstance()->authorization();
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
        $user_id = $this->userData['user_id'];
        return $this->tag->getTags($user_id);
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
        $user_id = $this->userData['user_id'];
        $result = $this->tag->addTag($tagName,$user_id);
        $content = $this->tag->getTags($user_id);
        
        $content['error'] = $result['error'];
        return $content;
    }
    
    /**
     * Удаление категории
     *
     *
     * @return void
     */
    public function delete()
    {
        $id = $_POST['id'];                
        $result = $this->tag->deleteTag($id);
        $user_id = $this->userData['user_id'];
        $content = $this->tag->getTags($user_id);
        $content['error'] = $result['error'];
        return $content;
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
        $user_id = $this->userData['user_id'];
        $result = $this->tag->editTag($data['id'],$user_id ,$data['tagName']);
        $content = $this->tag->getTags($user_id);
        $content['error'] = $result['error'];
        return $content;
    } 
}

