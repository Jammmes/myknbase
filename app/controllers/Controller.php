<?php
/**
 * Абстрактный класс для описания контроллера
 */
abstract class Controller
{
    public $view = '';
    public $title = 'Заголовок страницы';

    public function index($var)
    {
        return [];
    }

}