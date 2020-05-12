<?php

namespace Osiset\BasicShopifyAPI\Traits;

use Osiset\BasicShopifyAPI\Response;
use Psr\Http\Message\StreamInterface;

/**
 * Handles transforming JSON response into response.
 */
trait ResponseTransform
{
    /**
     * @see Respondable::toResponse
     */
    public function toResponse(StreamInterface $body): Response
    {
        $decoded = json_decode($body, true, 512, JSON_BIGINT_AS_STRING);
        return new Response($decoded);
    }
}
