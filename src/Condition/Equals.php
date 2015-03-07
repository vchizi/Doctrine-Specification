<?php

namespace Rb\Doctrine\Specification\Condition;

use Rb\Doctrine\Specification\Exception\InvalidArgumentException;

class Equals extends Comparison
{
    /**
     * @param string $field
     * @param string $value
     * @param string|null $dqlAlias
     * @throws InvalidArgumentException
     */
    public function __construct($field, $value, $dqlAlias = null)
    {
        parent::__construct(self::EQ, $field, $value, $dqlAlias);
    }
}
