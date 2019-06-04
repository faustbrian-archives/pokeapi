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

class Evolution extends AbstractAPI
{
    /**
     * @return \Plients\Http\HttpResponse
     */
    public function chains(): HttpResponse
    {
        return $this->client->get('evolution-chains');
    }

    /**
     * @param int|string $idOrName
     *
     * @return \Plients\Http\HttpResponse
     */
    public function chain($idOrName): HttpResponse
    {
        return $this->client->get("evolution-chains/{$idOrName}");
    }

    /**
     * @return \Plients\Http\HttpResponse
     */
    public function triggers(): HttpResponse
    {
        return $this->client->get('evolution-triggers');
    }

    /**
     * @param int|string $idOrName
     *
     * @return \Plients\Http\HttpResponse
     */
    public function trigger($idOrName): HttpResponse
    {
        return $this->client->get("evolution-triggers/{$idOrName}");
    }
}
