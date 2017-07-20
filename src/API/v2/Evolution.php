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

class Evolution extends AbstractAPI
{
    /**
     * @return \BrianFaust\Http\HttpResponse
     */
    public function chains(): HttpResponse
    {
        return $this->client->get('evolution-chains');
    }

    /**
     * @param int|string $idOrName
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function chain($idOrName): HttpResponse
    {
        return $this->client->get("evolution-chains/{$idOrName}");
    }

    /**
     * @return \BrianFaust\Http\HttpResponse
     */
    public function triggers(): HttpResponse
    {
        return $this->client->get('evolution-triggers');
    }

    /**
     * @param int|string $idOrName
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function trigger($idOrName): HttpResponse
    {
        return $this->client->get("evolution-triggers/{$idOrName}");
    }
}
