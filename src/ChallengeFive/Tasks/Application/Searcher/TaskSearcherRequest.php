<?php

declare(strict_types=1);


namespace Medine\ChallengeFive\Tasks\Application\Searcher;


final class TaskSearcherRequest
{
    private $taskId;
    private $userId;

    public function __construct(
        int $taskId,
        int $userId
    )
    {
        $this->taskId = $taskId;
        $this->userId = $userId;
    }

    public function taskId(): int
    {
        return $this->taskId;
    }

    public function userId(): int
    {
        return $this->userId;
    }
}
