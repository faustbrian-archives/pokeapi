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

class Items extends AbstractAPI
{
    /**
     * @return \Plients\Http\HttpResponse
     */
    public function items(): HttpResponse
    {
        return $this->client->get('items');
    }

    /**
     * @param int|string $idOrName
     *
     * @return \Plients\Http\HttpResponse
     */
    public function item($idOrName): HttpResponse
    {
        return $this->client->get("items/{$idOrName}");
    }

    /**
     * @return \Plients\Http\HttpResponse
     */
    public function attributes(): HttpResponse
    {
        return $this->client->get('item-attribute');
    }

    /**
     * @param int|string $idOrName
     *
     * @return \Plients\Http\HttpResponse
     */
    public function attribute($idOrName): HttpResponse
    {
        return $this->client->get("item-attribute/{$idOrName}");
    }

    /**
     * @return \Plients\Http\HttpResponse
     */
    public function categories(): HttpResponse
    {
        return $this->client->get('item-category');
    }

    /**
     * @param int|string $idOrName
     *
     * @return \Plients\Http\HttpResponse
     */
    public function category($idOrName): HttpResponse
    {
        return $this->client->get("item-category/{$idOrName}");
    }

    /**
     * @return \Plients\Http\HttpResponse
     */
    public function flingEffects(): HttpResponse
    {
        return $this->client->get('item-fling-effect');
    }

    /**
     * @param int|string $idOrName
     *
     * @return \Plients\Http\HttpResponse
     */
    public function flingEffect($idOrName): HttpResponse
    {
        return $this->client->get("item-fling-effect/{$idOrName}");
    }

    /**
     * @return \Plients\Http\HttpResponse
     */
    public function pockets(): HttpResponse
    {
        return $this->client->get('item-pocket');
    }

    /**
     * @param int|string $idOrName
     *
     * @return \Plients\Http\HttpResponse
     */
    public function pocket($idOrName): HttpResponse
    {
        return $this->client->get("item-pocket/{$idOrName}");
    }
}
