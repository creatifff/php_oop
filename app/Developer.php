<?php

namespace App;

class Developer extends Worker
{
    use HasRest;

    public string $attr;
    public string $position = 'developer';

    public function work(): void
    {
        print_r('developing');
    }


    // Магические методы

    // __toString позволяет представить объект класса в виде строки
//    public function __toString(): string
//    {
//        return $this->getName();
//    }

    // __destruct срабатывает если к объекту класса удаляются все ссылки
    // или если скрипт оканчивается и даже не был начат
//    public function __destruct()
//    {
//        print_r(111111);
//    }

    // __call вызывается если происходит обращение к несуществующим методам объекта класса
//    public function __call(string $name, array $arguments)
//    {
//        print_r($arguments);
//    }

    // __callStatic вызывается если идет обращение к статическому методу класса
//    public static function __callStatic(string $name, array $arguments)
//    {
//        print_r($name);
//    }

    // __get выполняется при получении данных из недоступных или несуществующих свойств
//    public function __get(string $name)
//    {
//        // если в private массиве есть какой либо ключ, вернет его имя
//        if (isset($this->attributes[$name])) {
//            return $name;
//        }
//        // если нет элемента в массиве, вернется null
//        return null;
//    }

    // __set запускается при записи данных в недоступные или несуществующие свойства
//    public function __set(string $name, $value): void
//    {
//        $this->attributes[$name] = $value;
//    }

    // __isset позволяет переопределить проверку на наличие свойства или метода у класса
//    public function __isset(string $name): bool
//    {
//        return true;
//    }

    // __unset сработает при попытке удалить несуществующее или недоступное свойство или метод класса
//    public function __unset(string $name): void
//    {
//        print_r(111);
//    }


    // __serialize записывает аттрибуты, которые сохранятся в объект при serialize() объекта класса
//    public function __serialize(): array
//    {
//        return [
//            'abc' => '123',
//        ];
//    }

    // __unserialize обратно конвертирует сериализованную переменную в значение PHP
//    public function __unserialize(array $data): void
//    {
//        var_dump($data);
//    }


    // __sleep работает вместе с serialize() и позволяет выполнить
    // любые операции до того как обьект будет преобразован в строку, а также
    // привести обьект в читаемый вид
//    public function __sleep(): array
//    {
//        print_r(222);
//        return [];
//    }

    // __wakeup вместе с unserialize() выполняет код перед тем,
    // как преобразовать строку с объектом обратно в объект
//    public function __wakeup(): void
//    {
//        print_r(333);
//    }

    // __invoke срабатывает при попытке вызвать объект как функцию
//    public function __invoke($arg)
//    {
//        print_r($arg);
//    }

    // __clone срабатывает при операторе clone объекта
//    public function __clone(): void
//    {
//        print_r(321);
//    }

    // __debugInfo используется когда необходимо вывести свойства объекта
//    public function __debugInfo(): ?array
//    {
//        return [
//            'position' => $this->position,
//        ];
//    }
}


