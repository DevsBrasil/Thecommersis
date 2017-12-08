<?php

namespace Dev\Store\DsManager\Controllers;

use Themosis\Route\BaseController;

class HomeController extends BaseController
{
    public function index()
    {
        if(is_user_logged_in()){
            return wp_safe_redirect('/store');
        }

        return view('pages.home');
    }
}