<?php

namespace Simonov;
class Equ
{
    protected $x;

    public function equ($a, $b)
    {
        if ($a == 0) {
            throw new SimonovException ('Уравнения не существует.');
        }
        MyLog::log('Это линейное уравнение');
        $x = array(-($b/$a));
        $this->x = $x;
        return $x;
    }
}