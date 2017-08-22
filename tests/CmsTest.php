<?php
/**
 * @author Alexandr Voronoy <servermed@gmail.com>
 * @copyright Copyright (c) 2017, Alexandr Voronoy
 */

use Engine\Cms;
use Engine\DI\DI;
use PHPUnit\Framework\TestCase;

/**
 * @coversDefaultClass Cms
 *
 */
class CmsTest extends TestCase
{
    /**
     * @var Cms;
     */
    protected $cms;

    public function setUp()
    {
        $di = new DI();
        $this->cms = new Cms($di);

    }

    /**
     * @covers Engine\Cms::run
     */
    public function testRun(){
//        $this->assertSame('Hello', $this->cms->run());
//        $this->assertNotContains('Hello1', $this->cms->run());
    }

}
