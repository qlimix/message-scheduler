<?php declare(strict_types=1);

namespace Qlimix\Message\Scheduler\Processor;

use Qlimix\Message\Scheduler\Consumer\ScheduledMessage;
use Qlimix\Message\Scheduler\Processor\Exception\SchedulerProcessException;

interface SchedulerProcessorInterface
{
    /**
     * @param ScheduledMessage[] $messages
     *
     * @throws SchedulerProcessException
     */
    public function process(array $messages): void;
}
