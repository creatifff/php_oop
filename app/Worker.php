<?php

namespace App;

// Абстрактный класс используется только для создания
// первичных свойств и методов для классов-наследников
// и пишется слово "abstract"

// Для типизации создается интерфейс и к классу добавляется
// слово "implements"
abstract class Worker implements WorkerInterface
{
    // Фиксированные значения: string, bool, number, null, array
    // Называются Свойства класса
    public string $name;
    public int $age;

    public function setAttributes(array $attributes): void
    {
        $this->attributes = $attributes;
    }
    public array $hours;

    // Уровни доступа к свойствам и методам

    // public - доступны везде
    // protected - доступны только классу и его классам-наследникам, не доступны объектам
    // private - доступны только в данном классе

    public string $position;
    public string $experience;

    public array $attributes;

    public function getAttributes(): array
    {
        return $this->attributes;
    }

    // Конструктор позволяет передать свойства класса в объект и использовать их там
    public function __construct($name, $age, $hours)
    {
        // this резервирует будущее название обьекта класса,
        // то есть, здесь обращаемся к $worker.
        $this->name = $name;
        $this->age = $age;
        $this->hours = $hours;
    }

    // Динамические значения: function...
    // Называются Методы класса



    // Геттеры и сеттеры
    // Используются для доступа к private свойствам класса из объекта
    // set{Имя свойства} - дает возможность изменить значение
    // get{Имя свойства} - получает это значение и выводится в объекте
    public function setPosition($value)
    {
        $this->position = $value;
    }

    /**
     * @return string
     */
    public function getPosition(): string
    {
        return $this->position;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getAge(): int
    {
        return $this->age;
    }

    public function setAge(int $age): void
    {
        $this->age = $age;
    }

    public function getHours(): array
    {
        return $this->hours;
    }

    public function setHours(array $hours): void
    {
        $this->hours = $hours;
    }

    public function getExperience(): string
    {
        return $this->experience;
    }

    public function setExperience(string $experience): void
    {
        $this->experience = $experience;
    }

}
