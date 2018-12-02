<?php declare(strict_types=1);

namespace Qlimix\Message\Scheduler;

use Qlimix\Message\Scheduler\Exception\SchedulerException;

interface SchedulerInterface
{
    /**
     * @param mixed $message
     * @param \DateTimeImmutable $scheduledAt
     *
     * @throws SchedulerException
     */
    public function schedule($message, \DateTimeImmutable $scheduledAt): void;
}
