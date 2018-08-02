<?php

/**
 * Класс для работы с базой данных, singleton
 */
class DB 
{
    private static $_instance = null;

    private $DB;

    /**
     * Функция возвращает ссылку на единственный экземпляр класса
     *
     * @return Db
     */
    public static function getInstance(){
        if(self::$_instance == null)
        {
            self::$_instance = new DB();
        }
        return self::$_instance;
    }

    // Защита от создания второго экземпляра класса
    private function __construct(){}
    private function __sleep(){}
    private function __wakeup(){}
    private function __clone(){}

    /**
     * Функция для установления соединения с базой данных
     *
     * @param string $user - логин
     * @param string $password - пароль
     * @param string $dbname - имя БД
     * @param string $host - имя сервера
     * @param integer $port - порт
     * @return void
     */
    public function Connect($user, $password, $dbname, $host='127.0.0.1',$port = 3306)
    {
       $connectString = 'mysql:host=' . $host . ';port= ' . $port . ';dbname=' . $dbname . ';charset=UTF8;';
       $this->DB = new PDO ($connectString, $user, $password,
            [
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, // возвращать ассоциативные массивы
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION // возвращать Exception в случае ошибки
                //,PDO::ATTR_EMULATE_PREPARES => false // отключить обрамление параметров в кавычки
            ]
        );
    }

    /**
     * Функция для выполнения запроса без возвращения выборки
     *
     * @param string $query - текст запроса
     * @param array $params - параметры

     * @return void
     */
    public function Query($query, $params = [])
    {     
        $res = $this->DB->prepare($query);

        $res->execute($params);

        return $res;
    }

    /**
     * Функция для выполнения запроса и возращения выборки
     *
     * @param  string $query - текст запроса
     * @param array $params - параметры
     *
     * @return array - результат выборки
     */
    public function Select($query, $params = [])
    {
        $assoc_array = [];
        $result = $this->Query($query, $params);

        if ($result) {
            while($row = $result->fetch())
            {
                $assoc_array[] = $row;
            }
            return $assoc_array;
        }
    }

    /**
     * Начать транзацию
     *
     * @return void
     */
    public function beginTransaction()
    {
      $this->DB->beginTransaction();
    }

    /**
     * Подтвердить транзацию
     *
     * @return void
     */
    public function commit()
    {
      $this->DB->commit();
    }

    /**
     * Откатить транзацию
     *
     * @return void
     */
    public function rollback()
    {
      $this->DB->rollback();
    }

    /**
     * Возвращает ИД последней записи
     *
     * @return int
     */
    public function lastInsertId()
    {
      return  $this->DB->lastInsertId();
    }

}