<?php

namespace MaxMind\WebService\Http;

/**
 * Interface Request
 * @package MaxMind\WebService\Http
 * @internal
 */
interface Request
{

    /**
     * @param $body
     * @return mixed
     */
    public function post($body);

    /**
     * @return mixed
     */
    public function get();
}
