<?php

namespace Dev\Store\DsManager\Controllers;

use Themosis\Route\BaseController;

class LoginController extends BaseController
{
    public function index()
    {
        return wp_safe_redirect(home_url());
    }
}