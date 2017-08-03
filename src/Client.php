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

namespace BrianFaust\Pokeapi;

use BrianFaust\Http\Http;

class Client
{
    /**
     * @var string
     */
    private $version;

    /**
     * Create a new Pokeapi Client instance.
     *
     * @param string $version
     */
    public function __construct(string $version = 'v2')
    {
        $this->version = $version;
    }

    /**
     * Create a new API service instance.
     *
     * @param string $name
     *
     * @return \BrianFaust\Pokeapi\API\AbstractAPI
     */
    public function api(string $name): API\AbstractAPI
    {
        $client = Http::withBaseUri("http://pokeapi.co/api/{$this->version}/");

        $class = "BrianFaust\\Pokeapi\\API\\{$this->version}\\{$name}";

        return new $class($client);
    }
}
