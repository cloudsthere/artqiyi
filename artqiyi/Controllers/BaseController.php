<?php

namespace Artqiyi\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function __construct()
    {
        \Auth::loginUsingId(1);
    }
}



