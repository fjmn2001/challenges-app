<?php

declare(strict_types=1);

namespace Medine\Apps\ChallengeFive\Backend\Controller;

use Illuminate\Http\Request;
use Medine\ChallengeFive\Tasks\Application\Create\TaskCreator;
use Medine\ChallengeFive\Tasks\Application\Create\TaskCreatorRequest;
use Symfony\Component\HttpFoundation\Response;

final class TaskPostController
{
    private $creator;

    public function __construct(TaskCreator $creator)
    {
        $this->creator = $creator;
    }

    public function __invoke(Request $request)
    {
        ($this->creator)(new TaskCreatorRequest(
            (string)$request->request->get('description'),
            (string)$request->request->get('dueDate'),
            (string)Auth()->id(),
        ));

        return redirect('/home');
    }
}
