<?php

class PHPMatch
{
    public static function toBool(string $input)
    {
        return match($input) {
            'true' => 1,
            'false' => 0,
            'null' => null,
        };
    }

    public static function sayHello(string $sometime)
    {
        return match($sometime){
            'World' => 'Hello New World',
            default => 'Hello ' . $sometime,
        };
    }
}

//1
//0
//Hello New World
//Hello Yasuo
echo PHPMatch::toBool('true') . PHP_EOL;
echo PHPMatch::toBool('false') . PHP_EOL;
echo PHPMatch::sayHello('World') . PHP_EOL;
echo PHPMatch::sayHello('Yasuo') . PHP_EOL;