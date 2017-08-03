<?php

declare(strict_types=1);

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

class Contests extends AbstractAPI
{
    /**
     * @return \BrianFaust\Http\HttpResponse
     */
    public function types(): HttpResponse
    {
        return $this->client->get('contest-type');
    }

    /**
     * @param int|string $idOrName
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function type($idOrName): HttpResponse
    {
        return $this->client->get("contest-type/{$idOrName}");
    }

    /**
     * @return \BrianFaust\Http\HttpResponse
     */
    public function effects(): HttpResponse
    {
        return $this->client->get('contest-effect');
    }

    /**
     * @param int|string $idOrName
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function effect($idOrName): HttpResponse
    {
        return $this->client->get("contest-effect/{$idOrName}");
    }

    /**
     * @return \BrianFaust\Http\HttpResponse
     */
    public function superEffects(): HttpResponse
    {
        return $this->client->get('super-contest-effect');
    }

    /**
     * @param int|string $idOrName
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function superEffect($idOrName): HttpResponse
    {
        return $this->client->get("super-contest-effect/{$idOrName}");
    }
}
