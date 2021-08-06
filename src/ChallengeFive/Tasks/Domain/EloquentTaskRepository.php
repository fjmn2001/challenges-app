<?php

declare(strict_types=1);

namespace Medine\ChallengeFive\Tasks\Domain;
use App\Models\Task as EloquentTask;
use Medine\ChallengeFive\Tasks\Domain\Task;
use Medine\ChallengeFive\Tasks\Domain\ValueObjects\TaskDescription;
use Medine\ChallengeFive\Tasks\Domain\ValueObjects\TaskDueDate;
use Medine\ChallengeFive\Tasks\Domain\ValueObjects\TaskUserId;

final class EloquentTaskRepository
{
    private $eloquentTask;

    public function __construct(EloquentTask $eloquentTask)
    {
        $this->eloquentTask = $eloquentTask;
    }

    public function save(Task $task):void
    {
        $data = [
            'description' => $task->description()->value(),
            'due_date' => $task->dueDate()->value(),
            'user_id' => $task->userId()->value()
        ];
        
        $this->eloquentTask->create($data);
    }
}
