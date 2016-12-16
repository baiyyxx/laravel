<?php

/**
 * Created by PhpStorm.
 * User: byng
 * Date: 2016/12/16
 * Time: 17:29
 */

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
class IndexController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }
}