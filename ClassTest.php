<?php

/**
 * Created by PhpStorm.
 * User: ilinovvitalii
 * Date: 12/31/18
 * Time: 4:09 PM
 * hgh
 */
error_reporting(E_ALL);
ini_set('display_errors', 1);

class ClassTest
{
    public function test(int $int = null)
    {
        $this->storeCsrfToken(null);
    }

    private function storeCsrfToken(?string $csrfToken)
    {
        var_dump($csrfToken);
    }
}

$obj = new ClassTest();
$obj->test();

echo strtr('[path][filename][extension]', [
    '[filename]'  => 234,
    '[extension]' => 11111111111,
]);