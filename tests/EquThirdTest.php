 <?php

use Simonov\EquThird;
use PHPUnit\Framework\TestCase;

require __DIR__ . './../vendor/autoload.php';

class EquThirdTest extends TestCase {

    /**
     * @dataProvider provider_solve
     */
    public function SolveTest($a, $b, $c, $d) {
        $test = new EquThird();
        $this->assertEquals($d, $test->solve($a, $b, $c));
    }
    public function provider_solve()
    {
        return array (
            array (15, 9, 0,[0, -0.6]),
            array (1, 6, -20, [2.3851648071345037, -8.385164807134505]),
            array (0, 1, 1,[-1]),
            array (0, 1, 2, [2]),

        );
    }
    /**
     * @dataProvider providerEquThirdEx
     */
    public function EquThirdExTest($a, $b, $c, $d) {
        $this->expectException(\Simonov\SimonovException::class);
        $test = new EquThird();
        $this->assertEquals($d, $test->solve($a, $b, $c));
    }
    public function provider_equThirdEx (): array
    {
        return array (
            array (0, 0, 0, 0),
            array (2, 4, 3, 0),
            array ('a', 'b', 'c', 0),
        );
    }
}
?>