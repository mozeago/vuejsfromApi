<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

class SignOutController extends Controller
{
    /**
     * Undocumented function
     *
     * @return void
     */
    public function __invoke()
    {
        auth()->logout();
    }
}
