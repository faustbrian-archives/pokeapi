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

class Games extends AbstractAPI
{
    /**
     * @return \BrianFaust\Http\HttpResponse
     */
    public function generations(): HttpResponse
    {
        return $this->client->get('generation');
    }

    /**
     * @param int|string $idOrName
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function generation($idOrName): HttpResponse
    {
        return $this->client->get("generation/{$idOrName}");
    }

    /**
     * @return \BrianFaust\Http\HttpResponse
     */
    public function pokedexs(): HttpResponse
    {
        return $this->client->get('pokedex');
    }

    /**
     * @param int|string $idOrName
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function pokedex($idOrName): HttpResponse
    {
        return $this->client->get("pokedex/{$idOrName}");
    }

    /**
     * @return \BrianFaust\Http\HttpResponse
     */
    public function versions(): HttpResponse
    {
        return $this->client->get('version');
    }

    /**
     * @param int|string $idOrName
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function version($idOrName): HttpResponse
    {
        return $this->client->get("version/{$idOrName}");
    }

    /**
     * @return \BrianFaust\Http\HttpResponse
     */
    public function versionGroups(): HttpResponse
    {
        return $this->client->get('version-group');
    }

    /**
     * @param int|string $idOrName
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function versionGroup($idOrName): HttpResponse
    {
        return $this->client->get("version-group/{$idOrName}");
    }

    /**
     * @return \BrianFaust\Http\HttpResponse
     */
    public function generations(): HttpResponse
    {
        return $this->client->get('generation');
    }

    /**
     * @param int|string $idOrName
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function generation($idOrName): HttpResponse
    {
        return $this->client->get("generation/{$idOrName}");
    }
}
