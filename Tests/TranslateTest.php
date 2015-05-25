<?php

require __DIR__.'/../vendor/autoload.php';

class TranslateTest extends PHPUnit_Framework_TestCase
{
    public $langInstance;
    /**
     * @dataProvider creationProvider
     */
    public function setUp()
    {
        try {
            $this->langInstance = new \MattivdWeem\Translate\Translate(
                new \MattivdWeem\Translate\JsonStrategy\JsonStrategy('nl')
            );
        } catch (Exception $e) {
            $this->assertTrue(false);

            return;
        }
        $this->assertTrue(true);
    }

    public function testCreateTest()
    {
        try {
            $this->langInstance->addTranslation('testCase', 'AnotherTestCase');
        } catch (Exception $e) {
            $this->assertTrue(false);

            return;
        }
        $this->assertTrue(true);
    }

    public function testTranslateTest()
    {
        $this->assertTrue(is_string($this->langInstance->translateString('testCase')));
    }
}
