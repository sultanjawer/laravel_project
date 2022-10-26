<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use LaravelDaily\LaravelCharts\Classes\LaravelChart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BuildController extends Controller
{
    public function indexv2()
    {
        $pagedata = array(
            'controller' => 'Documentation',
            'pagetitles' => 'System',
            'subtitles' => 'Documentation',
            'emphs' => 'Application Documentation',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'Documentation', 'List']; //add as much array item as needed
        return view('v2.build.index', compact('pagedata'), ['breadcrumb' => $breadcrumbs]);
    }

    public function feedv2()
    {
        $pagedata = array(
            'controller' => 'Documentation',
            'pagetitles' => 'Version',
            'subtitles' => '#version number',
            'emphs' => 'This page contain some of change and update.',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'Documentation', "Version"]; //add as much array item as needed
        return view('v2.build.feed', compact('pagedata'), ['breadcrumb' => $breadcrumbs]);
    }
}
