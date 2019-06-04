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

class Contests extends AbstractAPI
{
    /**
     * @return \Plients\Http\HttpResponse
     */
    public function types(): HttpResponse
    {
        return $this->client->get('contest-type');
    }

    /**
     * @param int|string $idOrName
     *
     * @return \Plients\Http\HttpResponse
     */
    public function type($idOrName): HttpResponse
    {
        return $this->client->get("contest-type/{$idOrName}");
    }

    /**
     * @return \Plients\Http\HttpResponse
     */
    public function effects(): HttpResponse
    {
        return $this->client->get('contest-effect');
    }

    /**
     * @param int|string $idOrName
     *
     * @return \Plients\Http\HttpResponse
     */
    public function effect($idOrName): HttpResponse
    {
        return $this->client->get("contest-effect/{$idOrName}");
    }

    /**
     * @return \Plients\Http\HttpResponse
     */
    public function superEffects(): HttpResponse
    {
        return $this->client->get('super-contest-effect');
    }

    /**
     * @param int|string $idOrName
     *
     * @return \Plients\Http\HttpResponse
     */
    public function superEffect($idOrName): HttpResponse
    {
        return $this->client->get("super-contest-effect/{$idOrName}");
    }
}
