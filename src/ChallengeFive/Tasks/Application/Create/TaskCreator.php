<?php

declare(strict_types=1);

namespace Medine\ChallengeFive\Tasks\Application\Create;

use App\Models\Task;

final class TaskCreator
{
    public function __invoke(TaskCreatorRequest $request)
    {
        $task = new Task([
            'description' => $request->description(),
            'due_date' => $request->dueDate(),
            'user_id' => $request->userId()
        ]);

        $task->save();
    }
}
