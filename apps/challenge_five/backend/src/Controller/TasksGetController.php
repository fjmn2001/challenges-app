<?php

declare(strict_types=1);


namespace Medine\Apps\ChallengeFive\Backend\Controller;


use App\Http\Controllers\Controller;
use Medine\ChallengeFive\Tasks\Application\Searcher\TasksSearcher;

final class TasksGetController extends Controller
{
    private $searcher;

    public function __construct(TasksSearcher $searcher)
    {
        $this->searcher = $searcher;
        $this->middleware('auth');
    }

    public function __invoke()
    {
        $tasks = ($this->searcher)();
        return view('home',[
            'tasks' => $tasks,
        ]);
    }

}
