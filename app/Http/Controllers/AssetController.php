<?php

namespace App\Http\Controllers;

use LaravelDaily\LaravelCharts\Classes\LaravelChart;
use App\Models\Belanja;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AssetController extends Controller
{
    public function index()
    {
        $pagedata = array(
            'modules' => 'Assets Management',
            'pagetitles' => 'Assets',
            'subtitles' => 'List',
            'emphs' => 'Short brief for this page',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['App Name', 'Asset', 'Assets List']; //add as much array item as needed
        return view('admin.asset.index', compact('pagedata'), ['breadcrumb' => $breadcrumbs]);
    }

    public function create()
    {
        $pagedata = array(
            'modules' => 'Assets Management',
            'pagetitles' => 'New',
            'subtitles' => 'Asset',
            'emphs' => 'Short brief for this page',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['App Name', 'Asset', 'Create']; //add as much array item as needed
        return view('admin.asset.create', compact('pagedata'), ['breadcrumb' => $breadcrumbs]);
    }
}
