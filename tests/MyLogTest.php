<?php 
    use Simonov\MyLog;
    use PHPUnit\Framework\TestCase;
    
    require __DIR__ . './../vendor/autoload.php';
    
    class MyLogTest extends TestCase
    {
        /**
         * @dataProvider providerEqu
         */
        public function testLog($str)
        {
            $this->assertEquals('',  \Simonov\MyLog::log($str));
        }
        public function providerEqu ()
        {
            return array (
                array ("TestFirst"),
                array ("TestSecond"),
                array (313131),
                array (true),
            );
        }
        public function testLogTex()
        {
            $this->expectException(TypeError::class);
            $this->assertEquals('',  \Simonov\MyLog::log(null));
            $this->assertEquals('',  \Simonov\MyLog::log());
        }
        public function testWrite()
        {
            $this->assertEquals('',   \Simonov\MyLog::write(135));
            $this->assertEquals('',   \Simonov\MyLog::write("test"));
            $this->assertEquals('',   \Simonov\MyLog::write());
        }
    }
?>