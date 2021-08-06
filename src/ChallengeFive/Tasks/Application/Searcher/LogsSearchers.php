<?php

declare(strict_types=1);


namespace Medine\ChallengeFive\Tasks\Application\Searcher;


use App\Models\Log;
use App\Models\Task;
use InvalidArgumentException;

final class LogsSearchers
{
    public function __invoke(TaskSearcherRequest $request): array
    {
        $task = Task::find($request->taskId());
        if(null === $task){
            throw new InvalidArgumentException("Task {$request->taskId()} does not exists.");
        }

        return $task->logs->map(function(Log $log) {
            return [
              'id' => $log->id,
              'comment' => $log->comment,
              'created_at' => $log->created_at->format('d/m/Y'),
            ];
        })->toArray();
    }

}
