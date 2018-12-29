<?php declare(strict_types=1);

namespace Qlimix\Message\Scheduler;

use DateTimeImmutable;
use Qlimix\Message\Scheduler\Exception\SchedulerException;

interface SchedulerInterface
{
    /**
     * @param mixed $message
     *
     * @throws SchedulerException
     */
    public function schedule($message, DateTimeImmutable $scheduledAt): void;
}
