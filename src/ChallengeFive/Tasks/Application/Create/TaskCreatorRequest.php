<?php

declare(strict_types=1);

namespace Medine\ChallengeFive\Tasks\Application\Create;

final class TaskCreatorRequest
{
    private $description;
    private $userId;
    private $dueDate;

    public function __construct(
        string $description,
        string $userId,
        string $dueDate
    )
    {
        $this->description = $description;
        $this->userId = $userId;
        $this->dueDate = $dueDate;
    }

    public function description(): string
    {
        return $this->description;
    }

    public function userId(): string
    {
        return $this->userId;
    }

    public function dueDate(): string
    {
        return $this->dueDate;
    }
}
