<?php

namespace Marselinus\BelajarMvc;

use PHPUnit\Framework\TestCase;

class RegexTest extends Testcase
{
    public function testRegex()
    {
        $path = "/products/1234/categories/abcde";

        $pattern = "#^/products/([0-9a-zA-Z]*)/categories/([0-9a-zA-Z]*)$#";

        $result = preg_match($pattern, $path, $variables);

        self::assertTrue(true, $result);

        var_dump($variables);
        array_shift($variables);
    }
}