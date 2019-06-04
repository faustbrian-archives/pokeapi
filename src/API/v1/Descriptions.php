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

namespace Plients\Pokeapi\API\v1;

use Plients\Http\HttpResponse;
use Plients\Pokeapi\API\AbstractAPI;

class Descriptions extends AbstractAPI
{
    public function all(): HttpResponse
    {
        return $this->client->get('description');
    }

    public function details(int $id): HttpResponse
    {
        return $this->client->get("description/$id");
    }
}
