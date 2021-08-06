<?php

declare(strict_types=1);

namespace Medine\ChallengeFive\Tasks\Application\Create;

final class TaskCreator
{
    public function __invoke(TaskCreatorRequest $request)
    {
        $task = Task(
            $request->description(),
            $request->dueDate(),
            $request->userId()
        );
    }
}
