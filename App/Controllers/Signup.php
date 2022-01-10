<?php

namespace App\Controllers;

use \Core\View;

/**
 * Signup controller
 *
 * PHP version 8.1
 */
class Signup extends \Core\Controller
{
    /**
     * Show the index page
     *
     * @return void
     */
    public function newAction()
    {
        View::renderTemplate('Signup/new.html');
    }
}
