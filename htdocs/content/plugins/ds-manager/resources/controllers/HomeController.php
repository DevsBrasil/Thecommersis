<?php

namespace Dev\Store\DsManager\Controllers;

use Themosis\Route\BaseController;

class HomeController extends BaseController
{
    public function index()
    {
        return view('layouts.app');
    }
}