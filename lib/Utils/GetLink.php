<?php

namespace Utils;
class GetLink
{
    private const array linkAlias = [
        'main-page' => '/',
        'auth-page' => '/auth',
    ];
    public static function htmlUrl(string $url): string
    {
        return self::linkAlias[htmlspecialchars($url, ENT_QUOTES)];
    }
    public static function get(string $linkName): string
    {
//        $request = htmlspecialchars(explode('?', $_SERVER["REQUEST_URI"])[0],ENT_QUOTES);
//        echo "<br>";
//        echo 'request: ' . $request;
//        echo "<br>";
//        echo 'htmlUrl: ' . self::htmlUrl($linkName);
//        echo "<br>";
        if (empty(self::htmlUrl($linkName))) {
            return "L22";
        }
//        if (self::htmlUrl($linkName) === $request) {
//            return "L23";
//        }
        return self::htmlUrl($linkName);
    }
}