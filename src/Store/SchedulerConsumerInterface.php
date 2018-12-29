<?php declare(strict_types=1);

namespace Qlimix\Message\Scheduler\Store;

use Qlimix\Message\Scheduler\Store\Exception\SchedulerConsumeException;

interface SchedulerConsumerInterface
{
    /**
     * @return ScheduledMessage[]
     *
     * @throws SchedulerConsumeException
     */
    public function consume(): array;

    /**
     * @param string[] $messageIds
     *
     * @throws SchedulerConsumeException
     */
    public function acknowledge(array $messageIds): void;
}
