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

namespace Sharknado;

use Sharknado\Weapons\Weapon;

/**
 * This is the shark class.
 *
 * @author Vincent Klaiber <vincent.klaiber@educ.goteborg.se>
 */
class Shark
{
    /**
     * The shark's weapon.
     *
     * @var \Sharknado\Weapons\Weapon
     */
    protected $weapon;

    /**
     * Create a new shark instance.
     *
     * @param \Sharknado\Weapons\Weapon $weapon
     *
     * @return void
     */
    public function __construct(Weapon $weapon)
    {
        $this->weapon = $weapon;
    }

    /**
     * Get the shark's weapon.
     *
     * @return \Sharknado\Weapons\Weapon
     */
    public function getWeapon(): Weapon
    {
        return $this->weapon;
    }
}