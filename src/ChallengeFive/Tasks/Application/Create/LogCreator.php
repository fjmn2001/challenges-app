<?php

declare(strict_types=1);

namespace Medine\ChallengeFive\Tasks\Application\Create;

use App\Models\Log;
use App\Models\Task;
use InvalidArgumentException;

final class LogCreator
{
    public function __invoke(LogCreatorRequest $request): void
    {
        $task = Task::find($request->taskId());

        if(null === $task){
            throw new InvalidArgumentException("Task {$request->taskId()} does not exists.");
        }

        $log = new Log([
            'comment' => $request->comment()
        ]);

        $task->logs()->save($log);
    }
}
