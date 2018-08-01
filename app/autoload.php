<?php
// Запускаем автоподлкючение классов
spl_autoload_register("standardAutoload");

/**
 * Callback Функция для подключения классов 
 *
 * @param [string] $className - Имя класса

 * @return bool true - при успешном подлкючении
 */
function standardAutoload($className)
{
    $dirs = [
        'controllers',
        'engine',
        'models'
    ];
    $found = false;
    foreach ($dirs as $dir) {
        $fileName = __DIR__ . '/' . $dir . '/' . $className . '.php';
        if (is_file($fileName)) {
            require_once($fileName);
            $found = true;
        }
    }
    if (!$found) {
        throw new Exception('Unable to load ' . $className);
    }
    return true;
}