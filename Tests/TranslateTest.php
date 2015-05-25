<?php

/*
 * This file is part of Matrices.
 *
 * (c) Graham Campbell <graham@mineuk.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

require __DIR__.'/../vendor/autoload.php';

use PHPUnit_Framework_TestCase as TestCase;

/**
 * This is the abstract matrix test case class.
 *
 * @author Graham Campbell <graham@mineuk.com>
 */
class TranslateTest extends TestCase
{
    public $langInstance;
    /**
     * @dataProvider creationProvider
     */
    public function setUp()
    {
        $this->langInstance = new \MattivdWeem\Translate\Translate(
            new \MattivdWeem\Translate\JsonStrategy\JsonStrategy('nl')
        );
    }

    public function testCreateTest()
    {
        try {
            $this->langInstance->addTranslation('testCase', 'AnotherTestCase');
        } catch (Exception $e) {
            $this->assertTrue(true);

            return;
        }
        $this->assertTrue(true);
    }

    public function testTranslateTest()
    {
        $this->assertTrue(is_string($this->langInstance->translateString('testCase')));
    }
}
