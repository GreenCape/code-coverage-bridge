<?php

/*
 * This file is part of the doyo/code-coverage project.
 *
 * (c) Anthonius Munthi <https://itstoni.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Doyo\Bridge\CodeCoverage\Driver;

use SebastianBergmann\CodeCoverage\Version;

if (version_compare(Version::id(), '6.0', '<')) {
    /** @codeCoverageIgnoreStart */
    class BasePCOV extends \Doyo\Bridge\CodeCoverage\Driver\Compat\BasePCOV5
    {
    }
    // @codeCoverageIgnoreEnd
} else {
    /** @codeCoverageIgnoreStart */
    class BasePCOV extends \Doyo\Bridge\CodeCoverage\Driver\Compat\BasePCOV6
    {
    }
    // @codeCoverageIgnoreEnd
}

/**
 * A dumb driver to be used during testing.
 */
class PCOV extends BasePCOV
{
}
