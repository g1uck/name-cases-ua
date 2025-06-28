<?php

namespace G1uck\NameCasesUa\Helpers;

class MbStr
{
    const CHARSET = 'utf-8';

    /**
     * Получить подстроку из строки
     * @param string $str строка
     * @param int $start начало подстроки
     * @param int $length длина подстроки
     * @return string подстрока
     */
    public static function substr(string $str, int $start, $length=null): string
    {
        return mb_substr($str, $start, $length, self::CHARSET);
    }

    /**
     * Поиск подстроки в строке
     * @param string $haystack строка, в которой искать
     * @param string $needle подстрока, которую нужно найти
     * @param int $offset начало поиска
     * @return bool|int позиция подстроки в строке
     */
    public static function strpos(string $haystack, string $needle, int $offset = 0)
    {
        return mb_strpos($haystack, $needle, $offset, self::CHARSET);
    }

    /**
     * Определение длины строки
     * @param string $str строка
     * @return int длина строки
     */
    public static function strlen(string $str): int
    {
        return mb_strlen($str, self::CHARSET);
    }

    /**
     * Переводит строку в нижний регистр
     * @param string $str строка
     * @return string строка в нижнем регистре
     */
    public static function strtolower(string $str): string
    {
        return mb_strtolower($str, self::CHARSET);
    }

    /**
     * Переводит строку в верхний регистр
     * @param string $str строка
     * @return string строка в верхнем регистре
     */
    public static function strtoupper($str):string
    {
        return mb_strtoupper($str, self::CHARSET);
    }

    /**
     * Поиск подстроки в строке справа
     * @param string $haystack строка, в которой искать
     * @param string $needle подстрока, которую нужно найти
     * @param int $offset начало поиска
     * @return int позиция подстроки в строке
     */
    public static function strrpos(string $haystack, string $needle, int $offset=0): int
    {
        return mb_strrpos($haystack, $needle, $offset, self::CHARSET);
    }

    /**
     * Проверяет в нижнем ли регистре находится строка
     * @param string $phrase строка
     * @return bool в нижнем ли регистре строка
     */
    public static function isLowerCase(string $phrase): bool
    {
        return $phrase === self::strtolower($phrase);
    }

    /**
     * Проверяет в верхнем ли регистре находится строка
     * @param string $phrase строка
     * @return bool в верхнем ли регистре строка
     */
    public static function isUpperCase(string $phrase): bool
    {
        return $phrase === self::strtoupper($phrase);
    }

    /**
     * Превращает строку в массив букв
     * @param string $phrase строка
     * @return array массив букв
     */
    public static function splitLetters($phrase): array
    {
        $result = [];
        $stop = self::strlen($phrase);
        for ($idx = 0; $idx < $stop; $idx++) {
            $result[] = self::substr($phrase, $idx, 1);
        }

        return $result;
    }

    /**
     * Соединяет массив букв в строку
     * @param array $lettersArr массив букв
     * @return string строка
     */
    public static function connectLetters(array $lettersArr):string
    {
        return implode('', $lettersArr);
    }

    /**
     * Разбивает строку на части использую шаблон
     * @param string $pattern шаблон разбития
     * @param string $string строка, которую нужно разбить
     * @return array разбитый массив
     */
    public static function explode(string $pattern, string $string): array
    {
        return mb_split($pattern, $string);
    }
}