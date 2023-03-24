<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}


// controls showing paste data

class pastedataController extends Controller
{
    public function view_paste($id)
    {
        $target_row = \App\Table1::find($id);
        return view('showpaste', ['row' => $target_row]);
    }
}
