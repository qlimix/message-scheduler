<?php declare(strict_types=1);

namespace Qlimix\Message\Scheduler\Consumer;

use Qlimix\Message\Scheduler\Exception\SchedulerConsumeException;

interface SchedulerConsumerInterface
{
    /**
     * @return ScheduledMessage[]
     *
     * @throws SchedulerConsumeException
     */
    public function consume(): array;

    /**
     * @param ScheduledMessage $message
     *
     * @throws SchedulerConsumeException
     */
    public function acknowledge(ScheduledMessage $message): void;
}
