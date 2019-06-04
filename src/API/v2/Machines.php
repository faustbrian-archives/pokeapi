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

class Machines extends AbstractAPI
{
    /**
     * @return \Plients\Http\HttpResponse
     */
    public function machines(): HttpResponse
    {
        return $this->client->get('machine');
    }

    /**
     * @param int|string $idOrName
     *
     * @return \Plients\Http\HttpResponse
     */
    public function machine($idOrName): HttpResponse
    {
        return $this->client->get("machine/{$idOrName}");
    }
}
