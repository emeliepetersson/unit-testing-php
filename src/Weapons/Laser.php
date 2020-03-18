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

use InvalidArgumentException;

/**
 * This is the laser weapon class.
 *
 * @author Vincent Klaiber <vincent.klaiber@educ.goteborg.se>
 */
class Laser extends Weapon
{
    /**
     * The laser's color.
     *
     * @var string
     */
    protected $color;

    /**
     * Get the laser's color.
     *
     * @return string|null
     */
    public function getColor(): ?string
    {
        return $this->color;
    }

    /**
     * Set the laser's color.
     *
     * @param string $color
     *
     * @throws \InvalidArgumentException
     *
     * @return void
     */
    public function setColor(string $color): void
    {
        $colors = ['cyan', 'hotpink', 'lime', 'tomato'];

        if (!in_array($color, $colors)) {
            throw new InvalidArgumentException("Invalid laser color [$color].");
        }

        $this->color = $color;
    }
}
