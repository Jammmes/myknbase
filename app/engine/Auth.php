<?php

/**
 * Класс для авторизации (singleton)
 */
class Auth
{

  private static $_instance = null;

  private $Auth;


  public static function getInstance()
  {
      if (self::$_instance == null)
      {
          self::$_instance = new Auth();
      }
      return self::$_instance;
  }
    

  private function __counstruct(){}
  private function __sleep(){}
  private function __wakeup(){}
  private function __clone(){}


  /**
   * Получение роли пользователя по ID
   *
   * @param int $id - ИД пользователя
   *
   * @return string - роль
   */
  protected static function getUserRole ($id)
  {
    $role = '0';
  
    $sql = 'SELECT `role` FROM `users` WHERE `id` = :id';
  
    $result = Db::getInstance()->Select($sql,['id'=> $id]); 
  
    if ($result)
    {
      $role = $result[0]['role'];
    }

    return $role;
  }

  /**
   * Получение ИД пользователя по логину и паролю
   *
   * @param string $login
   * 
   * @param string $password
   * 
   * @return int
   */
  protected static function getUserID ($login,$password)
  {
    $id = '0';

    $sql = "SELECT `id` FROM `users` WHERE (`login` = :login) and (`password` = :password )";

    $result = Db::getInstance()-> Select($sql,['login' => $login, 'password' => $password]); 

    if ($result)
    {   
      return $result[0]['id'];
    }

    return $id;
  }

  /**
   * Авторизация пользователя
   *
   * @return array [user_id,role,login]
   */
  public static function authorization()
  {
    $role = "none";

      $login = isset($_SESSION['login']) ? $_SESSION['login'] : 'not authorized';

      $password =  isset($_SESSION['password']) ? $_SESSION['password'] : '-';
      
      $user_id = self:: getUserID($login,$password);
      
      $result = self:: getUserRole($user_id);
      
      if ($result)
    {
      $role = $result;
    }
    
//    return
//    [
//      'user_id'=> $user_id,
//      'role'=> $role,
//      'login' => $login
//    ];
    
    return
    [
      'user_id'=> 1,
      'role'=> 1,
      'login' => 'eugen'
    ];
  }

}
