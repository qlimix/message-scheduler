<?php declare(strict_types=1);

namespace Qlimix\Message\Scheduler\Processor;

use Qlimix\Message\Scheduler\Consumer\ScheduledMessage;

interface SchedulerProcessorInterface
{
    /**
     * @param ScheduledMessage[] $messages
     *
     * @throws
     */
    public function process(array $messages): void;
}
