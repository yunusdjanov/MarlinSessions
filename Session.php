<?php
class Session
{

   // Проверка существует ли сессия

    public static function exists($name)
    {
        return isset($_SESSION[$name]) ? true : false;
    }

    // Создания сессии

    public static function put($name, $value)
    {
        return $_SESSION[$name] = $value;
    }

    // Получения сессии

    public static function get($name)
    {
        return $_SESSION[$name];
    }

    // Удаления сессии

    public static function delete($name)
    {
        if (self::exists($name)) {
            unset($_SESSION[$name]);
        }
    }

    // Получения и удаления сессии

    public static function flash($name, $string = '')
    {
        if (self::exists($name)) {
            $session = self::get($name);
            self::delete($name);
            return $session;
        } else {
            self::put($name, $string);
        }
    }
}
