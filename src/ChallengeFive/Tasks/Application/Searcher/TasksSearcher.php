<?php

declare(strict_types=1);


namespace Medine\ChallengeFive\Tasks\Application\Searcher;


use App\Models\Task;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

final class TasksSearcher
{
    public function __invoke(): array
    {
        return Task::get()->map(function (Task $task) {
            return [
                'id' => $task->id,
                'description' => $task->description,
                'due_date' => $task->due_date->format('d/m/Y'),
                'user_name' => $task->usuario->name,
                'user_validate' => $task->user_id == Auth::user()->id ? 'si' : 'no',
                'due_date_validate' => $task->due_date < Carbon::now() ? 'si' : 'no',
            ];
        })->toArray();
    }
}
