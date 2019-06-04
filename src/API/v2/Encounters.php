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

class Encounters extends AbstractAPI
{
    /**
     * @return \Plients\Http\HttpResponse
     */
    public function methods(): HttpResponse
    {
        return $this->client->get('encounter-method');
    }

    /**
     * @param int|string $idOrName
     *
     * @return \Plients\Http\HttpResponse
     */
    public function method($idOrName): HttpResponse
    {
        return $this->client->get("encounter-method/{$idOrName}");
    }

    /**
     * @return \Plients\Http\HttpResponse
     */
    public function conditions(): HttpResponse
    {
        return $this->client->get('encounter-condition');
    }

    /**
     * @param int|string $idOrName
     *
     * @return \Plients\Http\HttpResponse
     */
    public function condition($idOrName): HttpResponse
    {
        return $this->client->get("encounter-condition/{$idOrName}");
    }

    /**
     * @return \Plients\Http\HttpResponse
     */
    public function conditionValues(): HttpResponse
    {
        return $this->client->get('encounter-condition-value');
    }

    /**
     * @param int|string $idOrName
     *
     * @return \Plients\Http\HttpResponse
     */
    public function conditionValue($idOrName): HttpResponse
    {
        return $this->client->get("encounter-condition-value/{$idOrName}");
    }
}
