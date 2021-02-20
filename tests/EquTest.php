<?php
use Simonov\Equ;
use PHPUnit\Framework\TestCase;

require __DIR__ . './../vendor/autoload.php';

class EquTest extends TestCase {
    /**
     * @dataProvider provider_equation
     */

    public function One_solve_test($a, $b, $c){
        $test = new Equ();
        $this->assertEquals([$c], $test->equ($a, $b));
    }

    public function provider_equation(){
        return array (
            array (-1, 3, -3),
            array (-5, 2, -0.5),
            array (1000, 22, 0.055)
        );
    }

    /**
     * @dataProvider provider_equationEx
     */
    public function EquationExTest($a, $b, $c) {
        $this->expectException(\Simonov\SimonovException::class);
        $test = new Equ();
        $this->assertEquals($c, $test->equ($a, $b));
    }
    public function provider_equationEx()
    {
        return array (
            array (5, 5, -5),
            array (0, 0, 0),
            array (null, null, 0),

        );
    }
}