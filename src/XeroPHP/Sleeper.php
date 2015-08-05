<?php

namespace XeroPHP;

class Sleeper
{
    public static function sleepUntilNextMinute()
    {
        $nextMinute = (new \DateTime((new \DateTime())->format('Y-m-d H:i:00')))->add(new \DateInterval('PT1M'))->getTimestamp();
        $now = (new \DateTime())->getTimestamp();

        sleep($nextMinute - $now + 2);
    }
}
