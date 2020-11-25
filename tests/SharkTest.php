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

namespace Sharknado\Tests;

use PHPUnit\Framework\TestCase;
use Sharknado\Shark;
use Sharknado\Weapons\Weapon;
use Sharknado\Weapons\Laser;

/**
 * This is the shark test class.
 *
 * @author Vincent Klaiber <vincent.klaiber@educ.goteborg.se>
 */
class SharkTest extends TestCase
{
    public function testGetWeapon()
    {
        $laser = new Laser();
        $shark = new Shark($laser);

        // getWeapon === weapon
        $this->assertEquals(Laser::class, $shark->getWeapon());
    }
}
