<?php

namespace Src\Shared\Helpers\Helpers;

class Str
{

    /**
     * Convert text to uppercase
     */
    public static function toUppercase(?string $text, ?string $encoding = null): string
    {
        if ($text === null)
            return '';

        return mb_strtoupper($text, $encoding);
    }

    /**
     * Convert text to lowercase
     */
    public static function toLowercase(?string $text, ?string $encoding = null): string
    {
        if ($text === null)
            return '';

        return mb_strtolower($text, $encoding);
    }

    public static function replaceAccents(string $text): string
    {
        $from = [
            'à',
            'á',
            'â',
            'ã',
            'ä',
            'å',
            'æ',
            'À',
            'Á',
            'Â',
            'Ã',
            'Ä',
            'Å',
            'Æ',
            'ª',
            'ß',
            'ç',
            'Ç',
            'è',
            'é',
            'ê',
            'ë',
            'È',
            'É',
            'Ê',
            'Ë',
            'ì',
            'í',
            'î',
            'ï',
            'Ì',
            'Í',
            'Î',
            'Ï',
            'ñ',
            'Ñ',
            'ò',
            'ó',
            'ô',
            'õ',
            'ö',
            'Ò',
            'Ó',
            'Ô',
            'Õ',
            'Ö',
            'š',
            'Š',
            'ù',
            'ú',
            'û',
            'ü',
            'Ù',
            'Ú',
            'Û',
            'Ü',
            'ý',
            'Ý',
            'ž',
            'Ž'
        ];

        $to = [
            'a',
            'a',
            'a',
            'a',
            'a',
            'a',
            'a',
            'A',
            'A',
            'A',
            'A',
            'A',
            'A',
            'A',
            'a',
            'B',
            'c',
            'C',
            'e',
            'e',
            'e',
            'e',
            'E',
            'E',
            'E',
            'E',
            'i',
            'i',
            'i',
            'i',
            'I',
            'I',
            'I',
            'I',
            'n',
            'N',
            'o',
            'o',
            'o',
            'o',
            'o',
            'O',
            'O',
            'O',
            'O',
            'O',
            's',
            'S',
            'u',
            'u',
            'u',
            'u',
            'U',
            'U',
            'U',
            'U',
            'y',
            'Y',
            'z',
            'Z'
        ];

        return str_replace($from, $to, $text);
    }
}
