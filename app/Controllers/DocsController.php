<?php

namespace App\Controllers;

use SigmaPHP\Core\Controllers\BaseController;

class DocsController extends BaseController
{
    /**
     * Docs pages.
     *
     * @param string $subject
     * @param string $sub
     * @return Response
     */
    public function __invoke(string $subject, string $sub = '')
    {
        return $this->render('docs');
    }
}
