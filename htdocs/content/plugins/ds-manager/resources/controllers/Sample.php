<?php

namespace Dev\Store\DsManager\Controllers;

use Themosis\Route\BaseController;

class Sample extends BaseController
{
    public function index()
    {
        return view('sample');
    }
}