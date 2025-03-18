<?php

namespace Jakovic;

class Timer
{
    private float $startTime;
    private ?float $endTime = null;

    public function start(): void
    {
        $this->startTime = microtime(true);
        $this->endTime = null;
    }

    public function end(): void
    {
        $this->endTime = microtime(true);
    }

    public function getSeconds(): float
    {
        return ($this->endTime ?? microtime(true)) - $this->startTime;
    }

    public function getMinutes(): float
    {
        return $this->getSeconds() / 60;
    }

    public function getHours(): float
    {
        return $this->getSeconds() / 3600;
    }

    public function total(): string
    {
        $totalSeconds = (int) $this->getSeconds();
        $hours = intdiv($totalSeconds, 3600);
        $minutes = intdiv($totalSeconds % 3600, 60);
        $seconds = $totalSeconds % 60;

        return sprintf("%02d:%02d:%02d", $hours, $minutes, $seconds);
    }
}
