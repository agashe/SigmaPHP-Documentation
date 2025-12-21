<?php

namespace App\Controllers;

use SigmaPHP\Core\Controllers\BaseController;
use SigmaPHP\Core\Http\Response;

class MainController extends BaseController
{
    /**
     * Home page.
     *
     * @return Response
     */
    public function home()
    {
        return $this->render('home');
    }

    /**
     * About page.
     *
     * @return Response
     */
    public function about()
    {
        return $this->render('about');
    }
}
