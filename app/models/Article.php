<?php

class Article extends Model
{
    public function getData()
    {
        return 'Статья из Модели';
    }
    
    public function addArticle($data)
    {
        $query="INSERT INTO `articles`(`id`, `title`, `text`, `created_at`,
        `changed_at`, `status`, `user_id`) VALUES (NULL,'Первая тестовая статья',
        'текстстатьитекстстатьи текст',NULL,NULL,1,1)";
    }
    
    
    public function getArticlesByTag($id)
    {
        return ;
    }
    
}


