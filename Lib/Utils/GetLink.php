<?php

namespace Utils;
require 'print_info.php';

class GetLink
{
     private static array $linkAlias = [
        'main-page' => '/',
        'auth-page' => '/auth',
    ];

    private static function htmlUrl(string $url): string
    {
        return self::$linkAlias[htmlspecialchars($url, ENT_QUOTES)];
    }

    public static function get(string $linkName): string
    {
//        $request = htmlspecialchars(explode('?', $_SERVER["REQUEST_URI"])[0],ENT_QUOTES);

        if (empty(static::htmlUrl($linkName))) {
                    // if (empty((new GetLink)->htmlUrl($linkName))) {
            return "L22";
        }
//        if (self::htmlUrl($linkName) === $request) {
//            return "L23";
//        }
        return static::htmlUrl($linkName);
    }
}