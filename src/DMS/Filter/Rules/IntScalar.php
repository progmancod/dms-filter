<?php

declare(strict_types=1);

namespace DMS\Filter\Rules;

/**
 * IntScalar Rule
 * Converts content into an IntScalar.
 *
 * @Annotation
 * @NamedArgumentConstructor
 * @Target("PROPERTY")
 */
#[\Attribute(\Attribute::TARGET_PROPERTY)]
class IntScalar extends Rule
{
}
