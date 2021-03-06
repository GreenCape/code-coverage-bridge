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

namespace Doyo\Bridge\CodeCoverage;

class TestCase
{
    const RESULT_UNKNOWN = -1;
    const RESULT_PASSED  = 0;
    const RESULT_SKIPPED = 1;
    const RESULT_ERROR   = 5;
    const RESULT_FAILED  = 3;

    private $name;

    private $result;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function setResult($result)
    {
        $this->result = $result;
    }

    public function getResult()
    {
        return $this->result;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
}
