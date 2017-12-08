<?php

namespace Dev\Store\DsManager\Middlewares;

class Auth
{

    /**
     * Check if there's a logged_in user on the store.
     *
     * @param $request
     * @param \Closure $next
     * @return mixed|void
     */
    public function handle($request, \Closure $next)
    {
        if (is_user_logged_in()) {
            return $next($request);
        }
        return wp_safe_redirect(home_url());
    }
}