<?php

declare(strict_types=1);


namespace Medine\Apps\ChallengeFive\Backend\Controller;


use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Medine\ChallengeFive\Tasks\Application\Searcher\LogsSearchers;
use Medine\ChallengeFive\Tasks\Application\Searcher\TaskSearcher;
use Medine\ChallengeFive\Tasks\Application\Searcher\TaskSearcherRequest;

final class TaskGetController extends Controller
{

    private $searcher;
    private $logsSearchers;

    public function __construct(TaskSearcher $searcher, LogsSearchers $logsSearchers)
    {
        $this->searcher = $searcher;
        $this->logsSearchers = $logsSearchers;
        $this->middleware('auth');
    }

    public function __invoke($id)
    {
        $task = ($this->searcher)(new TaskSearcherRequest(
            (int) $id,
            (int) Auth::user()->id
        ));

        $logs = ($this->logsSearchers)(new TaskSearcherRequest(
            (int) $id,
            (int) Auth::user()->id
        ));

        return view('task',[
            'task' => $task,
            'logs' => $logs,
        ]);
    }

}
