<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use LaravelDaily\LaravelCharts\Classes\LaravelChart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HowtoController extends Controller
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
        return view('v2.howto.index', compact('pagedata'), ['breadcrumb' => $breadcrumbs]);
    }

    public function feedv2()
    {
        $pagedata = array(
            'controller' => 'Documentation',
            'pagetitles' => 'Instruction',
            'subtitles' => "Page",
            'emphs' => 'This page will guide give you instructions how to use this modul.',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'Documentation', "Instruction"]; //add as much (id) array item as needed
        return view('v2.howto.feed', compact('pagedata'), ['breadcrumb' => $breadcrumbs]);
    }
}
