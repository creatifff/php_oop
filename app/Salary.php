<?php

namespace App;

class Salary
{
    static public int $totalHours;

    // Статический метод используется,
    // если не нужно создавать объект класса. Можно прямо вызвать метод у класса.
    static public function count(array $hours): int
    {
        // через self обращаемся напрямую к классу для получения свойств
        self::$totalHours = array_sum($hours);
        return  self::$totalHours * 2000;
    }
}