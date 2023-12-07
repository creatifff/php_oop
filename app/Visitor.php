<?php

namespace App;

class Visitor
{
    // Фиксированные значения
    // string, bool, number, null, array

    // Свойства
    public string $name;
    public int $age;
    public array $hours;




    // Динамические значения
    // Методы

    public function visit()
    {
        print_r('visiting');
    }
}
