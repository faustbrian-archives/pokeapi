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

class Encounters extends AbstractAPI
{
    /**
     * @return \BrianFaust\Http\HttpResponse
     */
    public function methods(): HttpResponse
    {
        return $this->client->get('encounter-method');
    }

    /**
     * @param int|string $idOrName
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function method($idOrName): HttpResponse
    {
        return $this->client->get("encounter-method/{$idOrName}");
    }

    /**
     * @return \BrianFaust\Http\HttpResponse
     */
    public function conditions(): HttpResponse
    {
        return $this->client->get('encounter-condition');
    }

    /**
     * @param int|string $idOrName
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function condition($idOrName): HttpResponse
    {
        return $this->client->get("encounter-condition/{$idOrName}");
    }

    /**
     * @return \BrianFaust\Http\HttpResponse
     */
    public function conditionValues(): HttpResponse
    {
        return $this->client->get('encounter-condition-value');
    }

    /**
     * @param int|string $idOrName
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function conditionValue($idOrName): HttpResponse
    {
        return $this->client->get("encounter-condition-value/{$idOrName}");
    }
}
