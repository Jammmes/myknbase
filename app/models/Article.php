<?php

class Article extends Model
{
    public function getData($user_id)
    {
        $sql = "SELECT
        a.id,a.title,a.text,s.title AS status,a.created_at,a.changed_at,
        GROUP_CONCAT(DISTINCT t.title SEPARATOR ', ') AS tags
        ,u.login FROM `articles` a
        JOIN `status` s ON s.id = a.status
        JOIN `link_tags` lt ON  a.id = lt.article_id
        JOIN `tags` t ON t.id = lt.tag_id
        JOIN `users` u ON u.id = a.user_id
        WHERE u.id = ?
        GROUP BY a.id";        
        
        return DB::getInstance()->Select($sql,[$user_id]);
    }
    
    public function addArticle($data)
    {
        $date = date('Y-m-d H:i:s');
        // Сделать транзацией, т.к. нужны будут таблицы ling_tags, link_images, link_files
        $query1="INSERT INTO `articles`(`id`, `title`, `text`, `created_at`,
        `status`, `user_id`) VALUES (NULL,'Вторая тестовая статья',
        'текстстатьитекстстатьи текст',?,1,1)";
        
        DB::getInstance()->Query($query1,[$date]);
        
    }
    
    
    public function openArticle($id)
    {
        return ;
    }
    
}