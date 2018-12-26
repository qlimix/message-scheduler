<?php declare(strict_types=1);

namespace Qlimix\Message\Scheduler\Consumer;

use Qlimix\Message\Scheduler\Consumer\Exception\SchedulerConsumeException;

interface SchedulerConsumerInterface
{
    /**
     * @return ScheduledMessage[]
     *
     * @throws SchedulerConsumeException
     */
    public function consume(): array;

    /**
     * @throws SchedulerConsumeException
     */
    public function acknowledge(ScheduledMessage $message): void;
}
