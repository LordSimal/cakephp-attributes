<?php

namespace TicketSauce\CakephpRouteAttributes\Attributes\Pattern;

use Attribute;

#[Attribute(Attribute::TARGET_METHOD | Attribute::TARGET_CLASS | Attribute::IS_REPEATABLE)]
class PatternUlid extends Pattern
{
    public function __construct(string $param)
    {
        $this->param = $param;
        $this->constraint = '[0-7][0-9A-HJKMNP-TV-Z]{25}';
    }
}
