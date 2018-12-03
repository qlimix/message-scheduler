<?php declare(strict_types=1);

namespace Qlimix\Message\Scheduler\Processor;

use Qlimix\Message\Scheduler\Processor\Exception\SchedulerProcessException;

interface SchedulerProcessorInterface
{
    /**
     * @throws SchedulerProcessException
     */
    public function process(): void;
}
