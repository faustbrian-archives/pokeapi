<?php

declare(strict_types=1);

/*
 * This file is part of Pokeapi PHP Client.
 *
 * (c) Brian Faust <hello@basecode.sh>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Plients\Pokeapi\API\v2;

use Plients\Http\HttpResponse;
use Plients\Pokeapi\API\AbstractAPI;

class Pokemon extends AbstractAPI
{
    /**
     * @return \Plients\Http\HttpResponse
     */
    public function abilities(): HttpResponse
    {
        return $this->client->get('ability');
    }

    /**
     * @param int|string $idOrName
     *
     * @return \Plients\Http\HttpResponse
     */
    public function ability($idOrName): HttpResponse
    {
        return $this->client->get("ability/{$idOrName}");
    }

    /**
     * @return \Plients\Http\HttpResponse
     */
    public function characteristics(): HttpResponse
    {
        return $this->client->get('characteristic');
    }

    /**
     * @param int|string $idOrName
     *
     * @return \Plients\Http\HttpResponse
     */
    public function characteristic($idOrName): HttpResponse
    {
        return $this->client->get("characteristic/{$idOrName}");
    }

    /**
     * @return \Plients\Http\HttpResponse
     */
    public function eggGroups(): HttpResponse
    {
        return $this->client->get('egg-group');
    }

    /**
     * @param int|string $idOrName
     *
     * @return \Plients\Http\HttpResponse
     */
    public function eggGroup($idOrName): HttpResponse
    {
        return $this->client->get("egg-group/{$idOrName}");
    }

    /**
     * @return \Plients\Http\HttpResponse
     */
    public function genders(): HttpResponse
    {
        return $this->client->get('gender');
    }

    /**
     * @param int|string $idOrName
     *
     * @return \Plients\Http\HttpResponse
     */
    public function gender($idOrName): HttpResponse
    {
        return $this->client->get("gender/{$idOrName}");
    }

    /**
     * @return \Plients\Http\HttpResponse
     */
    public function growthRates(): HttpResponse
    {
        return $this->client->get('growth-rate');
    }

    /**
     * @param int|string $idOrName
     *
     * @return \Plients\Http\HttpResponse
     */
    public function growthRate($idOrName): HttpResponse
    {
        return $this->client->get("growth-rate/{$idOrName}");
    }

    /**
     * @return \Plients\Http\HttpResponse
     */
    public function natures(): HttpResponse
    {
        return $this->client->get('nature');
    }

    /**
     * @param int|string $idOrName
     *
     * @return \Plients\Http\HttpResponse
     */
    public function nature($idOrName): HttpResponse
    {
        return $this->client->get("nature/{$idOrName}");
    }

    /**
     * @return \Plients\Http\HttpResponse
     */
    public function pokeathlonStats(): HttpResponse
    {
        return $this->client->get('pokeathlon-stat');
    }

    /**
     * @param int|string $idOrName
     *
     * @return \Plients\Http\HttpResponse
     */
    public function pokeathlonStat($idOrName): HttpResponse
    {
        return $this->client->get("pokeathlon-stat/{$idOrName}");
    }

    /**
     * @return \Plients\Http\HttpResponse
     */
    public function pokemons(): HttpResponse
    {
        return $this->client->get('pokemon');
    }

    /**
     * @param int|string $idOrName
     *
     * @return \Plients\Http\HttpResponse
     */
    public function pokemon($idOrName): HttpResponse
    {
        return $this->client->get("pokemon/{$idOrName}");
    }

    /**
     * @return \Plients\Http\HttpResponse
     */
    public function colors(): HttpResponse
    {
        return $this->client->get('pokemon-color');
    }

    /**
     * @param int|string $idOrName
     *
     * @return \Plients\Http\HttpResponse
     */
    public function color($idOrName): HttpResponse
    {
        return $this->client->get("pokemon-color/{$idOrName}");
    }

    /**
     * @return \Plients\Http\HttpResponse
     */
    public function forms(): HttpResponse
    {
        return $this->client->get('pokemon-form');
    }

    /**
     * @param int|string $idOrName
     *
     * @return \Plients\Http\HttpResponse
     */
    public function form($idOrName): HttpResponse
    {
        return $this->client->get("pokemon-form/{$idOrName}");
    }

    /**
     * @return \Plients\Http\HttpResponse
     */
    public function habitats(): HttpResponse
    {
        return $this->client->get('pokemon-habitat');
    }

    /**
     * @param int|string $idOrName
     *
     * @return \Plients\Http\HttpResponse
     */
    public function habitat($idOrName): HttpResponse
    {
        return $this->client->get("pokemon-habitat/{$idOrName}");
    }

    /**
     * @return \Plients\Http\HttpResponse
     */
    public function shapes(): HttpResponse
    {
        return $this->client->get('pokemon-shape');
    }

    public function shape($idOrName): HttpResponse
    {
        return $this->client->get("pokemon-shape/{$idOrName}");
    }

    /**
     * @return \Plients\Http\HttpResponse
     */
    public function species(): HttpResponse
    {
        return $this->client->get('pokemon-species');
    }

    /**
     * @param int|string $idOrName
     *
     * @return \Plients\Http\HttpResponse
     */
    public function specie($idOrName): HttpResponse
    {
        return $this->client->get("pokemon-species/{$idOrName}");
    }

    /**
     * @return \Plients\Http\HttpResponse
     */
    public function stats(): HttpResponse
    {
        return $this->client->get('stat');
    }

    /**
     * @param int|string $idOrName
     *
     * @return \Plients\Http\HttpResponse
     */
    public function stat($idOrName): HttpResponse
    {
        return $this->client->get("stat/{$idOrName}");
    }

    /**
     * @return \Plients\Http\HttpResponse
     */
    public function types(): HttpResponse
    {
        return $this->client->get('type');
    }

    /**
     * @param int|string $idOrName
     *
     * @return \Plients\Http\HttpResponse
     */
    public function type($idOrName): HttpResponse
    {
        return $this->client->get("type/{$idOrName}");
    }
}
