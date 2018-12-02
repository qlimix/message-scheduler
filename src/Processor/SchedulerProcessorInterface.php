<?php declare(strict_types=1);

namespace Qlimix\Message\Scheduler\Processor;

use Qlimix\Message\Scheduler\Consumer\SchedulerAcknowledgeInterface;
use Qlimix\Message\Scheduler\Processor\Exception\SchedulerProcessException;

interface SchedulerProcessorInterface
{
    /**
     * @param array $messages
     * @param SchedulerAcknowledgeInterface $acknowledge
     *
     * @throws SchedulerProcessException
     */
    public function process(array $messages, SchedulerAcknowledgeInterface $acknowledge): void;
}
