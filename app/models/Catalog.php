<?php

/** Класс для работы со списком статей
 * 
 */
class Catalog extends Model
{
    /**Вывод статей пользователя
     * 
     * @param int $user_id - ИД пользователя
     * @param str $status - Статус статей
     * 
     * @return array
     */
    public function getArticles($user_id,$status = '')
    {
        $withStatus = "";
        $param = [$user_id];
        
        if($status){
            $withStatus = " AND s.id = ?";
            $param = [$user_id,$status];
        }
        
        $sql = "SELECT
        a.id,a.title,a.text,s.title AS status,a.created_at,a.changed_at,
        GROUP_CONCAT(DISTINCT t.title SEPARATOR ', ') AS tags
        ,u.login FROM `articles` a
        JOIN `status` s ON s.id = a.status
        JOIN `link_tags` lt ON  a.id = lt.article_id
        JOIN `tags` t ON t.id = lt.tag_id
        JOIN `users` u ON u.id = a.user_id
        WHERE u.id = ? ".$withStatus." GROUP BY a.id";        
        
        return  DB::getInstance()->Select($sql,$param);              
    }  
    
    public function getArticlesByTag($tag_id)
    {
        $sql = "SELECT
        a.id,a.title,a.text,s.title AS status,a.created_at,a.changed_at,
        GROUP_CONCAT(DISTINCT t.title SEPARATOR ', ') AS tags
        FROM `articles` a
        JOIN `status` s ON s.id = a.status
        JOIN `link_tags` lt ON  a.id = lt.article_id
        JOIN `tags` t ON t.id = lt.tag_id
        WHERE a.id in (SELECT `article_id` FROM `link_tags`
        WHERE `tag_id` = ?) GROUP BY a.id";  
        
        return DB::getInstance()->Select($sql,[$tag_id]);     
    }
    
}