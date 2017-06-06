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
use BrianFaust\Pokeapi\Models\Pokemon;

class Pokemon extends AbstractApi
{
    public function all()
    {
        $response = $this->get('pokemon');

        return $this->getMapper()->raw($response);
    }

    public function details($id)
    {
        return $this->getMapper()->raw($response);

        return $this->getMapper()->raw($response);
    }
}
