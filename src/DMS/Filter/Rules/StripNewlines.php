<?php

declare(strict_types=1);

namespace DMS\Filter\Rules;

/**
 * StripNewlines Rule.
 *
 * @Annotation
 * @NamedArgumentConstructor
 * @Target("PROPERTY")
 */
#[\Attribute(\Attribute::TARGET_PROPERTY)]
class StripNewlines extends Rule
{
}
