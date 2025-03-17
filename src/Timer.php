<?php

namespace Jakovic;

class Timer
{
    private static float $startTime;
    private static float $endTime;

    public static function start(): void
    {
        self::$startTime = microtime(true);
    }

    public static function end(): void
    {
        self::$endTime = microtime(true);
    }

    public static function getSeconds(): float
    {
        return self::$endTime - self::$startTime;
    }

    public static function getMinutes(): float
    {
        return self::getSeconds() / 60;
    }

    public static function getHours(): float
    {
        return self::getSeconds() / 3600;
    }

    public static function total(): string
    {
        $totalSeconds = (int)self::getSeconds();
        $hours = intdiv($totalSeconds, 3600);
        $minutes = intdiv($totalSeconds % 3600, 60);
        $seconds = $totalSeconds % 60;

        return sprintf("%02d:%02d:%02d", $hours, $minutes, $seconds);
    }
}
