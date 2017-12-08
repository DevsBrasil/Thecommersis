<?php

namespace Dev\Store\DsManager\Controllers;

use Themosis\Route\BaseController;

class StoreController extends BaseController
{
    public function index()
    {
        return view('pages.store');
    }
}