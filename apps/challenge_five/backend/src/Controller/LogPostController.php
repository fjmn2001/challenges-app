<?php

declare(strict_types=1);

namespace Medine\Apps\ChallengeFive\Backend\Controller;

use Illuminate\Http\Request;
use Medine\ChallengeFive\Tasks\Application\Create\LogCreator;
use Medine\ChallengeFive\Tasks\Application\Create\LogCreatorRequest;
use Symfony\Component\HttpFoundation\Response;

final class LogPostController
{
    private $creator;

    public function __construct(LogCreator $creator)
    {
        $this->creator = $creator;
    }

    public function __invoke(string $taskId, Request $request)
    {
        ($this->creator)(new LogCreatorRequest(
            $taskId,
            (string)$request->request->get('comment')
        ));

        return redirect("/tasks/{$taskId}");
    }
}
