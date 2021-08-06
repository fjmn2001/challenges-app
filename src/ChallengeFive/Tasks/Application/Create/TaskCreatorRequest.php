<?php

declare(strict_types=1);

namespace Medine\ChallengeFive\Tasks\Application\Create;

final class TaskCreatorRequest
{
    private $description;
    private $dueDate;
    private $userId;

    public function __construct(
        string $description,
        string $dueDate,
        string $userId
    )
    {
        $this->description = $description;
        $this->dueDate = $dueDate;
        $this->userId = $userId;
    }

    public function description(): string
    {
        return $this->description;
    }

    public function dueDate(): string
    {
        return $this->dueDate;
    }

    public function userId(): string
    {
        return $this->userId;
    }
}
