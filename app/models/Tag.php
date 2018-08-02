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
        
    }
    
    public function deleteTag($id)
    {
        
    }
    
    public function editTag($id,$tagName)
    {
        
    }
    
    
}

