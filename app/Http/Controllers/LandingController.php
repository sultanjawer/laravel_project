<?php

namespace App\Http\Controllers;

use LaravelDaily\LaravelCharts\Classes\LaravelChart;
use App\Models\Belanja;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LandingController extends Controller
{
    public function index()
    {
        $module = 'Module Title';
        $pagetitle = 'Page Title';
        $subtitle = 'Sub Title';
        $sysalert = 'Perhatian';
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'Module Title', 'Page Title']; //add as much array item as needed
        return view('admin.landing.index', compact('module', 'pagetitle', 'subtitle', 'sysalert', 'alertcontent'), ['breadcrumb' => $breadcrumbs]);
    }
}
