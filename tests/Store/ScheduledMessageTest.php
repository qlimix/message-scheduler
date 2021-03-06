<?php declare(strict_types=1);

namespace Qlimix\Tests\Message\Scheduler\Store;

use PHPUnit\Framework\TestCase;
use Qlimix\Message\Scheduler\Store\ScheduledMessage;

final class ScheduledMessageTest extends TestCase
{
    public function testShouldPassData(): void
    {
        $id = '123';
        $route = 'route';
        $message = 'message';

        $scheduledMessage = new ScheduledMessage($id, $route, $message);

        self::assertSame($id, $scheduledMessage->getId());
        self::assertSame($route, $scheduledMessage->getRoute());
        self::assertSame($message, $scheduledMessage->getMessage());
    }
}
