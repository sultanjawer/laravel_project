<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use LaravelDaily\LaravelCharts\Classes\LaravelChart;
use App\Models\Belanja;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{
    //v2 for this line and below
    public function indexv2()
    {
        $pagedata = array(
            'controller' => 'Registration',
        );
        return view('v2.register.index', compact('pagedata'));
    }
}
