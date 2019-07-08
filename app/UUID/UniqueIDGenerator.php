<?php

namespace App\UUID;


class UniqueIDGenerator
{
    /**
     * Generates unique code
     *
     * @return string
     * @throws \Exception
     */
    public static function generateUniqueCode(): string
    {
        return sprintf('%04x%04x-%04x-%04x-%04x-%04x%04x%04x',

            random_int(0, 0xffff), random_int(0, 0xffff),
            random_int(0, 0xffff),
            random_int(0, 0x0fff) | 0x4000,
            random_int(0, 0x3fff) | 0x8000,
            random_int(0, 0xffff), random_int(0, 0xffff), random_int(0, 0xffff)
        );
    }
}
