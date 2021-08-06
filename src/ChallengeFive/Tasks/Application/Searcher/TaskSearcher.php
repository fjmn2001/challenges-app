<?php

declare(strict_types=1);


namespace Medine\ChallengeFive\Tasks\Application\Searcher;


use App\Models\Task;
use InvalidArgumentException;

final class TaskSearcher
{

    public function __invoke(TaskSearcherRequest $request): array
    {
        $task = Task::find($request->taskId());

        if(null === $task){
            throw new InvalidArgumentException("Task {$request->taskId()} does not exists.");
        }

        return [
            'id' => $task->id,
            'description' => $task->description,
            'due_date' => $task->due_date->format('d/m/Y'),
        ];
    }
}
