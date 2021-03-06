<?php declare(strict_types=1);

namespace Qlimix\Message\Scheduler\Store;

final class ScheduledMessage
{
    private string $id;
    private string $route;
    private string $message;

    public function __construct(string $id, string $route, string $message)
    {
        $this->id = $id;
        $this->route = $route;
        $this->message = $message;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getRoute(): string
    {
        return $this->route;
    }

    public function getMessage(): string
    {
        return $this->message;
    }
}
