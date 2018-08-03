<?php

class Tag extends Model
{
    public function getTags($user_id)
    {
       $sql ="SELECT * FROM `tags` WHERE `user_id` =?";
       
       return DB::getInstance()->Select($sql,[$user_id]);
    }
    
    /** Проверка нового тега
     * 
     * @param string $tagName - Имя тега
     * @param int $user_id - ИД пользователя
     * @return boolean
     */
    protected function checkNewTag($tagName,$user_id)
    {
        $result = false;
        
        $sql = "SELECT `id` FROM `tags` WHERE `title` = ? AND `user_id` = ?";
        
        $data = DB::getInstance()->Select($sql,[$tagName,$user_id]);
        
        $id = $data ? $data[0]['id']: 0;
        
        if($id > 0){// что она должна возвращать то? тру или фальш
            $result = true;
        }
        
        return $result;
    }
    
    /** Добавление нового тега
     * 
     * @param string $tagName - Имя тега
     * @param int $user_id - ИД пользователя
     * @return array
     */
    public function addTag($tagName,$user_id)
    {
        $result = [];
        $isCorrect = $this->checkNewTag($tagName, $user_id);
        
        if ($isCorrect){
            $query = "INSERT INTO `tags` (`id`,`title`,`user_id`)
            VALUES (NULL, ?,?)";
            $result = 
                    ['error'=>'none', 
                    DB::getInstance()->Query($query,[$tagName,$user_id])
                    ];
        }else{
            $result = ['error'=>'The tag checking is failure'];
        }
        
        return $result;
    }
    
    public function deleteTag($id)
    {
        
    }
    
    public function editTag($id,$tagName)
    {
        
    }
    
    
}

