<?php

/**
 * Контроллер списка товаров
 */
class CatalogController extends Controller
{
    public $view = 'v_articles';
    public $title = 'Каталог статей';
    protected $catalog;
    protected $userData;
    
    /**Конструктор класса
     * 
     */
    public function __construct()
    {
        $this->catalog = new Catalog();
        $this->userData = Auth::getInstance()->authorization();
    }

    /**
     * Вывод всех статей
     *
     * @param array $var
     *
     * @return array
     */
    public function index($var)
    {
        $user_id = $this->userData['user_id'];
        return $this->catalog->getArticles($user_id);
    } 
    
    /** Вывод статей со статусом ? (status.id = 1)
     * 
     * @return array
     */
    public function showQuestions()
    {
        $user_id = $this->userData['user_id']; 
        return $this->catalog->getArticles($user_id,'1'); 
    }
}
