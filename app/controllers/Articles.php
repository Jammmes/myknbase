<?php

/**
 * Контроллер списка товаров
 */
class CatalogController extends Controller
{
    public $view = 'v_catalog';

    public $title = 'Каталог товаров';

    private $catalog = null;

    public function __construct()
    {
        $this->catalog = new Catalog();
    }

    /**
     * Отрисовка списка товаров
     *
     * @param array $var
     *
     * @return void
     */
    public function index($var)
    {
        return $this->catalog->getData(0);
    }

}
