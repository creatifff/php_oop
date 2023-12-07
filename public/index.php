<?php

// Абстракция - создание класса с общими для других классов свойствами и методами
// Инкапсуляция - свойства класса заранее созданы и не могут быть динамически добавлены новые
// Наследование - классы-наследники наследуют все свойства и методы родительского (абстракт) класса
// Полиморфизм - один метод, прописанный в интерфейсе абстрактного класса,
// можно использовать в разных классах-наследниках с разной логикой и рез-ом

use App\Designer; // типа import
use App\Developer;

require_once('../vendor/autoload.php');

$developer = new Developer('Roman', 21, [4,6,8]);
$designer = new Designer('Elena', 18, [4,6,8]);

// Проверка на существование класса
//var_dump(class_exists('App\Developer'));

// Получение всех методов класса
//var_dump(get_class_methods('App\Developer'));

// Получение всех свойств класса
//var_dump(get_class_vars('App\Developer'));

// Получение имени класса
//var_dump(get_class($developer));

// Получение свойств класса через объект
//var_dump(get_object_vars($developer));

// Проверка на существование метода в классе или объекте
//var_dump(method_exists('App\Developer', 'work'));

// Проверка на существование свойства в классе или объекте
//var_dump(property_exists($developer, 'notprop'));


// Магические методы
// __callStatic
// \App\Developer::pringles();

// __call
// $developer->getCoke('give me coke');

// __destruct
// $developer = null;

// __toString
// var_dump( (string) $developer);

// __get
// print_r($developer->wat);

// __set
//$developer->someProp = 'abcde';
//$developer->someProp1 = 'no';
//$developer->someProp2 = 'prop';
//$value = $developer->someProp1;
//var_dump($developer->getAttributes());
//var_dump($value);


// __isset
//var_dump( isset($developer->watprop) );

// __unset
//unset($developer->noneProp);

// __serialize
//$str = serialize($developer);

// __unserialize
//$obj = unserialize($str);

// __sleep
//$str = serialize($developer);

// __wakeup
//$obj = unserialize($str);
//var_dump($obj);

// __invoke
//$developer('someArg');

// __clone
//$developer2 = clone $developer;



