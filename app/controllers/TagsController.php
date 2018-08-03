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
        $tagList = $this->tag->getTags($user_id);
        
        if($result['error']=='none'){
            return $tagList;
        }else{
            return [$tagList,'error'=>$result['error']];
        } 
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

