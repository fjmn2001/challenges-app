<?php

declare(strict_types=1);

namespace Medine\ChallengeFive\Tasks\Application\Create;

final class LogCreatorRequest
{
    private $taskId;
    private $comment;

    public function __construct(
        string $taskId,
        string $comment
    )
    {
        $this->taskId = $taskId;
        $this->comment = $comment;
    }

    public function taskId(): string
    {
        return $this->taskId;
    }

    public function comment(): string
    {
        return $this->comment;
    }
}
