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

class Moves extends AbstractAPI
{
    /**
     * @return \Plients\Http\HttpResponse
     */
    public function moves(): HttpResponse
    {
        return $this->client->get('move');
    }

    /**
     * @param int|string $idOrName
     *
     * @return \Plients\Http\HttpResponse
     */
    public function move($idOrName): HttpResponse
    {
        return $this->client->get("move/{$idOrName}");
    }

    /**
     * @return \Plients\Http\HttpResponse
     */
    public function ailments(): HttpResponse
    {
        return $this->client->get('move-ailment');
    }

    /**
     * @param int|string $idOrName
     *
     * @return \Plients\Http\HttpResponse
     */
    public function ailment($idOrName): HttpResponse
    {
        return $this->client->get("move-ailment/{$idOrName}");
    }

    /**
     * @return \Plients\Http\HttpResponse
     */
    public function battleStyles(): HttpResponse
    {
        return $this->client->get('move-battle-style');
    }

    /**
     * @param int|string $idOrName
     *
     * @return \Plients\Http\HttpResponse
     */
    public function battleStyle($idOrName): HttpResponse
    {
        return $this->client->get("move-battle-style/{$idOrName}");
    }

    /**
     * @return \Plients\Http\HttpResponse
     */
    public function categories(): HttpResponse
    {
        return $this->client->get('move-category');
    }

    /**
     * @param int|string $idOrName
     *
     * @return \Plients\Http\HttpResponse
     */
    public function category($idOrName): HttpResponse
    {
        return $this->client->get("move-category/{$idOrName}");
    }

    /**
     * @return \Plients\Http\HttpResponse
     */
    public function damageClasses(): HttpResponse
    {
        return $this->client->get('move-damage-class');
    }

    /**
     * @param int|string $idOrName
     *
     * @return \Plients\Http\HttpResponse
     */
    public function damageClass($idOrName): HttpResponse
    {
        return $this->client->get("move-damage-class/{$idOrName}");
    }

    /**
     * @return \Plients\Http\HttpResponse
     */
    public function learnMethods(): HttpResponse
    {
        return $this->client->get('move-learn-method');
    }

    /**
     * @param int|string $idOrName
     *
     * @return \Plients\Http\HttpResponse
     */
    public function learnMethod($idOrName): HttpResponse
    {
        return $this->client->get("move-learn-method/{$idOrName}");
    }

    /**
     * @return \Plients\Http\HttpResponse
     */
    public function targets(): HttpResponse
    {
        return $this->client->get('move-target');
    }

    /**
     * @param int|string $idOrName
     *
     * @return \Plients\Http\HttpResponse
     */
    public function target($idOrName): HttpResponse
    {
        return $this->client->get("move-target/{$idOrName}");
    }
}
