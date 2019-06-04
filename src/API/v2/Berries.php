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

class Berries extends AbstractAPI
{
    /**
     * @return \Plients\Http\HttpResponse
     */
    public function berries(): HttpResponse
    {
        return $this->client->get('berry');
    }

    /**
     * @param int|string $idOrName
     *
     * @return \Plients\Http\HttpResponse
     */
    public function berry($idOrName): HttpResponse
    {
        return $this->client->get("berry/{$idOrName}");
    }

    /**
     * @return \Plients\Http\HttpResponse
     */
    public function firmnesses(): HttpResponse
    {
        return $this->client->get('berry-firmness');
    }

    /**
     * @param int|string $idOrName
     *
     * @return \Plients\Http\HttpResponse
     */
    public function firmnesse($idOrName): HttpResponse
    {
        return $this->client->get("berry-firmness/{$idOrName}");
    }

    /**
     * @return \Plients\Http\HttpResponse
     */
    public function flavors(): HttpResponse
    {
        return $this->client->get('berry-flavor');
    }

    /**
     * @param int|string $idOrName
     *
     * @return \Plients\Http\HttpResponse
     */
    public function flavor($idOrName): HttpResponse
    {
        return $this->client->get("berry-flavor/{$idOrName}");
    }
}
