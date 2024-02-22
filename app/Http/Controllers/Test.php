<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Http;

class Test extends Controller
{
    public function index()
    {
        return response('Test2');
    }

    public function sleep()
    {
        sleep(5);
        return response('Test');
    }

}
