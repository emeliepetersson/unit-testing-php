<?php

/*
 * This file is part of Yrgo.
 *
 * (c) Yrgo, högre yrkesutbildning.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Sharknado\Tests\Weapons;

use PHPUnit\Framework\TestCase;
use Sharknado\Weapons\Laser;

/**
 * This is the laser weapon test class.
 *
 * @author Vincent Klaiber <vincent.klaiber@educ.goteborg.se>
 */
class LaserTest extends TestCase
{
    public function testGetName()
    {
        $laser = new Laser();
        $ExpectedName = "laser";

        $this->assertSame($ExpectedName, $laser->getName());
    }

    public function testGetColorIsNullByDefault()
    {
        $laser = new Laser();
        $this->assertEquals(null, $laser->getColor());
    }

    public function testGetColor()
    {
        $laser = new Laser();
        $laser->setColor('lime');

        $this->assertEquals('lime', $laser->getColor());
    }

    public function testSetColor()
    {
        $laser = new Laser();
        $laser->setColor('lime');

        $this->assertEquals('lime', $laser->getColor());
    }

    public function testSetInvalidColor()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Invalid laser color [pink].');

        $laser = new Laser();
        $laser->setColor('pink');
    }
}
