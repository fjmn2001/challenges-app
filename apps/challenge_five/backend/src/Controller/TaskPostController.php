<?php

declare(strict_types=1);

namespace Medine\Apps\ChallengeFive\Backend\Controller;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

final class TaskPostController
{
    private $creator;

    public function __construct(TaskCreator $creator)
    {
        $this->creator = $creator;
    }

    public function __invoke(Request $request): Response
    {
        ($this->creator)(new TaskCreatorRequest(
            (string)$request->request->get('description'),
            (string)$request->request->get('dueDate'),
            (string)Auth()->id(),
        ));

        return new Response('', Response::HTTP_CREATED);
    }
}
