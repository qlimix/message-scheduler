<?php declare(strict_types=1);

namespace Qlimix\Queue\Scheduler\Consumer;

final class ScheduledMessage
{
    /** @var string */
    private $id;

    /** @var string */
    private $route;

    /** @var string */
    private $message;

    /**
     * @param string $id
     * @param string $route
     * @param string $message
     */
    public function __construct(string $id, string $route, string $message)
    {
        $this->id = $id;
        $this->route = $route;
        $this->message = $message;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getRoute(): string
    {
        return $this->route;
    }

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }
}
