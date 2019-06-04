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

class Locations extends AbstractAPI
{
    /**
     * @return \Plients\Http\HttpResponse
     */
    public function locations(): HttpResponse
    {
        return $this->client->get('location');
    }

    /**
     * @param int|string $idOrName
     *
     * @return \Plients\Http\HttpResponse
     */
    public function location($idOrName): HttpResponse
    {
        return $this->client->get("location/{$idOrName}");
    }

    /**
     * @return \Plients\Http\HttpResponse
     */
    public function areas(): HttpResponse
    {
        return $this->client->get('location-area');
    }

    /**
     * @param int|string $idOrName
     *
     * @return \Plients\Http\HttpResponse
     */
    public function area($idOrName): HttpResponse
    {
        return $this->client->get("location-area/{$idOrName}");
    }

    /**
     * @return \Plients\Http\HttpResponse
     */
    public function parkAreas(): HttpResponse
    {
        return $this->client->get('pal-park-area');
    }

    /**
     * @param int|string $idOrName
     *
     * @return \Plients\Http\HttpResponse
     */
    public function parkArea($idOrName): HttpResponse
    {
        return $this->client->get("pal-park-area/{$idOrName}");
    }

    /**
     * @return \Plients\Http\HttpResponse
     */
    public function regions(): HttpResponse
    {
        return $this->client->get('region');
    }

    /**
     * @param int|string $idOrName
     *
     * @return \Plients\Http\HttpResponse
     */
    public function region($idOrName): HttpResponse
    {
        return $this->client->get("region/{$idOrName}");
    }
}
