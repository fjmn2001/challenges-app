<?php

declare(strict_types=1);

namespace Medine\ChallengeFive\Tasks\Domain;
use Medine\ChallengeFive\Tasks\Domain\ValueObjects\TaskDescription;
use Medine\ChallengeFive\Tasks\Domain\ValueObjects\TaskDueDate;
use Medine\ChallengeFive\Tasks\Domain\ValueObjects\TaskUserId;

final class Task
{
    private $description;
    private $dueDate;
    private $userId;

    public function __construct(
        TaskDescription $description,
        TaskDueDate $dueDate,
        TaskUserId $userId
    )
    {
        $this->description = $description;
        $this->dueDate = $dueDate;
        $this->userId = $userId;
    }

    public function description(): TaskDescription
    {
        return $this->description;
    }

    public function dueDate(): TaskDueDate
    {
        return $this->dueDate;
    }

    public function userId(): TaskUserId
    {
        return $this->userId;
    }

    public static function create(
        TaskDescription $description,
        TaskDueDate $dueDate,
        TaskUserId $userId
    ): Task
    {
        $task = new self(
            $description,
            $dueDate,
            $userId
        );

        return $task;
    }
}
