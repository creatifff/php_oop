<?php

namespace App;

class Designer extends Worker
{
    use HasRest;
    public string $position = 'designer';



    public function work()
    {
        print_r('designing');
    }
}