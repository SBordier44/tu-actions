<?php

declare(strict_types=1);

namespace App;

/**
 * Class Math
 * @package App
 */
class Math
{
    /**
     * @param $nombre
     * @return float|int
     */
    public static function double($nombre)
    {
        return $nombre * 2;
    }
}
