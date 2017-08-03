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

namespace BrianFaust\Pokeapi\API\v1;

use BrianFaust\Http\HttpResponse;
use BrianFaust\Pokeapi\API\AbstractAPI;

class Moves extends AbstractAPI
{
    public function all(): HttpResponse
    {
        return $this->client->get('move');
    }

    public function details(int $id): HttpResponse
    {
        return $this->client->get("move/$id");
    }
}
