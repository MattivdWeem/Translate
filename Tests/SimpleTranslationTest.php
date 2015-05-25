<?php
/*
 * This file is part of Matrices.
 *
 * (c) Graham Campbell <graham@mineuk.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace MattivdWeem\Tests\Translate;
use PHPUnit_Framework_TestCase as TestCase;
/**
 * This is the abstract matrix test case class.
 *
 * @author Graham Campbell <graham@mineuk.com>
 */
abstract class SimpleTranslationTest extends TestCase
{
    /**
     * @dataProvider creationProvider
     */
    public function testCreation()
    {
       echo 'test';
        return true;
    }

}