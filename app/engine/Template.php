<?php
/** Класс для работы с шаблонами, singleton
 * 
 */
class Template
{
    private static $_instance = null;
    
    private $Template;
    
    private function __construct(){}
    private function __wakeup(){}
    private function __sleep(){}    
    private function __clone(){}
    
    public static function getInstance()
    {
        if(self::$_instance == null){
            
            self::$_instance = new Template();
            
        }
            return self::$_instance;         
    }
       
    public function render($view,$data)
    {
        ob_start();      
        extract($data, EXTR_OVERWRITE);
        include Config::get('path_templates').'/'.$view.'.php';
        return ob_get_clean();
    }
    
}
