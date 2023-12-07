<?php

namespace App;

// Выносит метод в переиспользуемый хук (трейт) для любого класса, наследуемого от Worker
trait HasRest
{
    public function rest()
    {
        // this - потому что не имя конкретного класса
        print_r($this->getName() . ' has rest');
    }
}