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

namespace Sharknado\Weapons;

use ReflectionClass;

/**
 * This is the abstract weapon class.
 *
 * @author Vincent Klaiber <vincent.klaiber@educ.goteborg.se>
 */
abstract class Weapon
{
    /**
     * Get the weapon's name.
     *
     * @return string
     */
    public function getName(): string
    {
        $reflect = new ReflectionClass($this);

        // This will fetch the current class name
        // and return it in lowercase letters.
        return strtolower($reflect->getShortName());
    }
}
