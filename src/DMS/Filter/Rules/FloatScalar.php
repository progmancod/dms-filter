<?php

declare(strict_types=1);

namespace DMS\Filter\Rules;

/**
 * FloatScalar Rule
 * Converts content into a FloatScalar.
 *
 * @Annotation
 * @NamedArgumentConstructor
 * @Target("PROPERTY")
 */
#[\Attribute(\Attribute::TARGET_PROPERTY)]
class FloatScalar extends Rule
{
}
