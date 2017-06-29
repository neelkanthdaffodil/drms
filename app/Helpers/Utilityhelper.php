<?php

namespace App\Helpers;

class Utilityhelper
{

    public static function get_acronym($phrase = '')
    {
        $acronym = '';
        if ($phrase != '') {
            if (preg_match_all('/\b(\w)/', strtoupper($phrase), $m)) {
                $acronym = implode('', $m[1]);
            }
        }
        return $acronym;
    }

}
