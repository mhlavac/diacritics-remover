<?php

namespace MHlavac\DiacriticsRemover;

class DiacriticsRemover
{
    /**
     * @param string $string
     * @return string
     */
    public function parse($string)
    {
        $string = str_replace(["ä", "ö", "ü", "ß"], ["ae", "oe", "ue", "ss"], $string);
        $string = iconv('UTF-8', 'US-ASCII//TRANSLIT', $string);
        $string = preg_replace('/[\x{0300}-\x{036f}]+/u', '', $string);
        $string = preg_replace('/[^-_ a-zA-Z0-9]/', '', $string);

        return $string;
    }
}
