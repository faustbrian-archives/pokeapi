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

class Utility extends AbstractAPI
{
    /**
     * @return \BrianFaust\Http\HttpResponse
     */
    public function languages(): HttpResponse
    {
        return $this->client->get('language');
    }

    /**
     * @param int|string $idOrName
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function language($idOrName): HttpResponse
    {
        return $this->client->get("language/{$idOrName}");
    }
}
