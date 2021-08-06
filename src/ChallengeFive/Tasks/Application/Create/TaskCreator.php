<?php

declare(strict_types=1);

namespace Medine\ChallengeFive\Tasks\Application\Create;

use App\Models\Task as EloquentTask;
use Medine\ChallengeFive\Tasks\Domain\Task;
use Medine\ChallengeFive\Tasks\Domain\EloquentTaskRepository;
use Medine\ChallengeFive\Tasks\Domain\ValueObjects\TaskDescription;
use Medine\ChallengeFive\Tasks\Domain\ValueObjects\TaskDueDate;
use Medine\ChallengeFive\Tasks\Domain\ValueObjects\TaskUserId;

final class TaskCreator
{
    public function __invoke(TaskCreatorRequest $request)
    {
    	$description = new TaskDescription($request->description());

    	$dueDate = new TaskDueDate($request->dueDate());

    	$userId = new TaskUserId($request->userId());

    	$task = Task::create($description, $dueDate, $userId);

    	$taskRepository = new EloquentTaskRepository(new EloquentTask());

    	$taskRepository->save($task);
        
        /*
        $task = new Task([
            'description' => $request->description(),
            'due_date' => $request->dueDate(),
            'user_id' => $request->userId()
        ]);

        $task->save();
        */
    }
}
