<?php

class Tag extends Model
{
    public function getData()
    {
       $sql ="SELECT * FROM `tags`";
       
       return DB::getInstance()->Select($sql);
    }
    
    public function addTag($tagName)
    {
        //Сделать проверку на дубли
    }
    
    public function deleteTag($id)
    {
        
    }
    
    public function editTag($id,$tagName)
    {
        
    }
    
    
}

