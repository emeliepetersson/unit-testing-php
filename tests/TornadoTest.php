<?php

declare(strict_types=1);

namespace Sharknado\Tests;

use PHPUnit\Framework\TestCase;
use Sharknado\Tornado;
use Sharknado\Weapons\Laser;
use Sharknado\Shark;

class TornadoTest extends TestCase
{
    public function testGetSharks()
    {
        $shark1 = new Shark(new Laser());
        $shark2 = new Shark(new Laser());
        $sharks = [$shark1, $shark2];
        $tornado = new Tornado($sharks);

        $this->assertIsArray($tornado->getSharks());
        $this->assertCount(2, $tornado->getSharks());
    }
}
