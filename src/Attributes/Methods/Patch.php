<?php

namespace TicketSauce\CakephpRouteAttributes\Attributes\Methods;

use Attribute;
use TicketSauce\CakephpRouteAttributes\Attributes\Route;
use TicketSauce\CakephpRouteAttributes\Enums\HttpMethod;

#[Attribute(Attribute::TARGET_METHOD)]
class Patch extends Route
{
    public function __construct(
        string $uri,
        ?string $name = null,
        array | string $middleware = [],
    ) {
        parent::__construct(
            methods: [HttpMethod::PATCH->value],
            uri: $uri,
            name: $name,
            middleware: $middleware,
        );
    }
}
