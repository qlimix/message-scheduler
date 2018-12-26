<?php declare(strict_types=1);

namespace Qlimix\Message\Scheduler\Store;

use DateTimeImmutable;
use Qlimix\Message\Scheduler\Store\Exception\ScheduledMessageStoreException;

interface ScheduledMessageStoreInterface
{
    /**
     * @throws ScheduledMessageStoreException
     */
    public function add(string $message, DateTimeImmutable $scheduledAt): void;
}
