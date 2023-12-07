<?php

namespace App;

// В интерфейсе описываются все свойства и методы класса для типизации,
// автокомплита и удобства разработки
interface WorkerInterface
{
    public function work();
}