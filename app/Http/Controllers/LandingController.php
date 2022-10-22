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
        $pagedata = array(
            'controller' => 'Home',
            'pagetitles' => 'Page Title',
            'subtitles' => 'Sub Title',
            'emphs' => 'Short brief for this page',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $breadcrumbs = ['App Names', 'Module Title', 'Page Title']; //add as much array item as needed
        return view('admin.landing.index', compact('pagedata'), ['breadcrumb' => $breadcrumbs]);
    }

    public function v2()
    {
        $pagedata = array(
            'controller' => 'Home',
            'pagetitles' => 'Page Title',
            'subtitles' => 'Sub Title',
            'emphs' => 'Short brief for this page',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $breadcrumbs = ['App Names', 'Module Title', 'Page Title']; //add as much array item as needed
        return view('v2.landing.index', compact('pagedata'), ['breadcrumb' => $breadcrumbs]);
    }
}
