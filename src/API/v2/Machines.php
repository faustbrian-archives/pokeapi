<?php

/*
 * This file is part of Pokeapi PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Pokeapi\API\v2;

use BrianFaust\Http\HttpResponse;
use BrianFaust\Pokeapi\API\AbstractAPI;

class Machines extends AbstractAPI
{
    /**
     * @return \BrianFaust\Http\HttpResponse
     */
    public function machines(): HttpResponse
    {
        return $this->client->get('machine');
    }

    /**
     * @param int|string $idOrName
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function machine($idOrName): HttpResponse
    {
        return $this->client->get("machine/{$idOrName}");
    }
}
