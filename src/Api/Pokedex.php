<?php

/*
 * This file is part of Pokeapi PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Pokeapi\Api;

use BrianFaust\Unified\AbstractApi;
use BrianFaust\Pokeapi\Models\Pokedex;

class Pokedex extends AbstractApi
{
    public function all()
    {
        $response = $this->get('pokedex/1');

        return $this->getMapper()->raw($response);
    }
}
