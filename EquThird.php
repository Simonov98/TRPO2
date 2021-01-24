<?php

namespace Simonov;

use core\EquationInterface;

class EquThird extends Equ implements EquationInterface
{
    protected function dis($a, $b, $c)
    {
        if($a == null){ $a = 0; }
        if($b == null){ $b = 0; }
        if($c == null){ $c = 0; }
        $d = ($b ** 2) - 4 * $a * $c;
        return $d;
    }

    public function solve($a, $b, $c)
    {
        $x = $this->dis($a, $b, $c);
        if ($a == 0) {
            return $this->equ($b, $c);
        }
        \Simonov\MyLog::log("Это квадратное уравнение");
        if ($x > 0) {
            return $this->x = array(
                ((-$b + sqrt($x)) / (2 * $a)),
                ((-$b - sqrt($x)) / (2 * $a))
            );
        }
        if ($x < 0) {
            throw new SimonovException("\nУравнение не имеет корней!");
        }
        return $this->x = (-$b) / 2 * $a;
    }
}

?>