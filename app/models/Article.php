<?php

class Article extends Model
{
    
    public function addArticle($data)
    {
        $date = date('Y-m-d H:i:s');
        // Сделать транзацией, т.к. нужны будут таблицы ling_tags, link_images, link_files
        
        $query1="INSERT INTO `articles`(`id`, `title`, `text`, `created_at`,
        `status`, `user_id`) VALUES (NULL,'Вторая тестовая статья',
        'текстстатьитекстстатьи текст',?,1,1)";
        
        return DB::getInstance()->Query($query1,[$date]);
      
        
         // Начинаем транзацию 
        //    Db::getInstance()->beginTransaction();
        //    $sql = "INSERT INTO `orders`(`user_id`,`date`,`status`) 
        //    VALUES(?,'".date('Y-m-d H:i:s')."',1);";
        //    // 1 Добавляем запись в таблицу с заказами
        //    Db::getInstance()->Query($sql,[$user_id]);
        //    // Получим ИД только что добавленного заказа 
        //    $id_order = Db::getInstance()->lastInsertId();
        //    $cart = Cart::getCartContent($user_id);
        //    // 2 Заполняем содержимое заказа в таблицу orders_rows
        //    foreach ($cart as $good => $value)
        //    {
        //      $sql =  "INSERT INTO `orders_rows`
        //      (`id`,`good_id`,`quantity`, `id_order`)
        //      VALUES
        //      ( NULL,:good_id,:quantity,:id_order)" ;
        //
        //      Db::getInstance()->Query($sql,
        //      [
        //        'good_id' => $value['good_id'],
        //        'quantity'=> $value['quantity'],
        //        'id_order'=> $id_order
        //      ]);
        //    }
        //        $sql = "UPDATE `cart` SET `status` = 2 
        //    WHERE (`status` = 1) AND (`user_id` = ?)"; 
        //    // 3 Меняем статус товаров в корзине 
        //    Db::getInstance()->Query($sql,[$user_id]);
        //    // Завершаем транзакцию
        //    Db::getInstance()->commit();               
    }
    
    
    public function openArticle($id)
    {
        $sql = "SELECT
        a.id,a.title,a.text,s.title AS status,a.created_at,a.changed_at,
        GROUP_CONCAT(DISTINCT t.title SEPARATOR ', ') AS tags
        ,u.login FROM `articles` a
        JOIN `status` s ON s.id = a.status
        JOIN `link_tags` lt ON  a.id = lt.article_id
        JOIN `tags` t ON t.id = lt.tag_id
        JOIN `users` u ON u.id = a.user_id
        WHERE a.id = ? GROUP BY a.id";           
        
        return DB::getInstance()->Select($sql,[$id]);  
    }
    
    public function edit($data)
    {
        return '';
    }
    
}