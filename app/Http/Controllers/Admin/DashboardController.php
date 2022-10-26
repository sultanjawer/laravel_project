<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use LaravelDaily\LaravelCharts\Classes\LaravelChart;
use App\Models\Belanja;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    //v3 for this line and below
    public function index()
    {
        $pagedata = array(
            'controller' => 'Dashboard',
            'pagetitles' => 'Page Title',
            'subtitles' => 'Sub Title',
            'emphs' => 'Short brief for this page',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'Module Title', 'Page Title']; //add as much array item as needed
        return view('admin.dashboard.index', compact('pagedata'), ['breadcrumb' => $breadcrumbs]);
    }

    public function verifikator()
    {
        $pagedata = array(
            'controller' => 'Dashboard',
            'pagetitles' => 'Page Title',
            'subtitles' => 'Sub Title',
            'emphs' => 'Short brief for this page',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'Module Title', 'Page Title']; //add as much array item as needed
        return view('admin.dashboard.verifikator', compact('pagedata'), ['breadcrumb' => $breadcrumbs]);
    }

    public function user()
    {
        $pagedata = array(
            'controller' => 'Dashboard',
            'pagetitles' => 'Page Title',
            'subtitles' => 'Sub Title',
            'emphs' => 'Short brief for this page',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'Module Title', 'Page Title']; //add as much array item as needed
        return view('admin.dashboard.user', compact('pagedata'), ['breadcrumb' => $breadcrumbs]);
    }

    public function peta_admin()
    {
        $pagedata = array(
            'controller' => 'Dashboard',
            'pagetitles' => 'Page Title',
            'subtitles' => 'Sub Title',
            'emphs' => 'Short brief for this page',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'Module Title', 'Page Title']; //add as much array item as needed
        return view('admin.dashboard.petaadmin', compact('pagedata'), ['breadcrumb' => $breadcrumbs]);
    }

    public function peta_verif()
    {
        $pagedata = array(
            'controller' => 'Dashboard',
            'pagetitles' => 'Page Title',
            'subtitles' => 'Sub Title',
            'emphs' => 'Short brief for this page',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'Module Title', 'Page Title']; //add as much array item as needed
        return view('admin.dashboard.petaverif', compact('pagedata'), ['breadcrumb' => $breadcrumbs]);
    }

    public function peta_user()
    {
        $pagedata = array(
            'controller' => 'Dashboard',
            'pagetitles' => 'Page Title',
            'subtitles' => 'Sub Title',
            'emphs' => 'Short brief for this page',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'Module Title', 'Page Title']; //add as much array item as needed
        return view('admin.dashboard.petauser', compact('pagedata'), ['breadcrumb' => $breadcrumbs]);
    }

    //V2 for this line and below
    public function indexv2()
    {
        $pagedata = array(
            'controller' => 'Dashboard',
            'pagetitles' => 'Page Title',
            'subtitles' => 'Sub Title',
            'emphs' => 'Short brief for this page',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'Module Title', 'Page Title']; //add as much array item as needed
        return view('v2.dashboard.index', compact('pagedata'), ['breadcrumb' => $breadcrumbs]);
    }

    public function pemetaanv2()
    {
        $pagedata = array(
            'controller' => 'Dashboard',
            'pagetitles' => 'Page Title',
            'subtitles' => 'Sub Title',
            'emphs' => 'Short brief for this page',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'Module Title', 'Page Title']; //add as much array item as needed
        return view('v2.dashboard.pemetaan', compact('pagedata'), ['breadcrumb' => $breadcrumbs]);
    }
}
