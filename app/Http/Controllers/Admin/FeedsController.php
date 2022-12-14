<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use LaravelDaily\LaravelCharts\Classes\LaravelChart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FeedsController extends Controller
{
    //========== v3 starting from this ===========//
    public function index()
    {
        $pagedata = array(
            'controller' => 'Feeds',
            'pagetitles' => 'Feeds',
            'subtitles' => 'List',
            'emphs' => 'Daftar Berita & Informasi yang dikirim oleh Administrator untuk Anda',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'Feeds', 'Daftar Berita']; //add as much array item as needed
        return view('admin.feeds.index', compact('pagedata'), ['breadcrumb' => $breadcrumbs]);
    }

    public function read()
    {
        $pagedata = array(
            'controller' => 'Feeds',
            'pagetitles' => 'Berita ',
            'subtitles' => '& Informasi',
            'emphs' => '',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'Feeds', 'Berita']; //add as much array item as needed
        return view('admin.feeds.read', compact('pagedata'), ['breadcrumb' => $breadcrumbs]);
    }

    public function create()
    {
        $pagedata = array(
            'controller' => 'Feeds',
            'pagetitles' => 'Berita ',
            'subtitles' => '& Informasi',
            'emphs' => '',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'Feeds', 'Berita']; //add as much array item as needed
        return view('admin.feeds.create', compact('pagedata'), ['breadcrumb' => $breadcrumbs]);
    }

    public function update()
    {
        $pagedata = array(
            'controller' => 'Feeds',
            'pagetitles' => 'Berita ',
            'subtitles' => '& Informasi',
            'emphs' => '',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'Feeds', 'Berita']; //add as much array item as needed
        return view('admin.feeds.update', compact('pagedata'), ['breadcrumb' => $breadcrumbs]);
    }

    //========== end v3 ==========//

    //========== v2 starting from this ===========//
    public function indexv2()
    {
        $pagedata = array(
            'controller' => 'Feeds',
            'pagetitles' => 'Feeds',
            'subtitles' => 'List',
            'emphs' => 'Daftar Berita & Informasi yang dikirim oleh Administrator untuk Anda',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'Feeds', 'Daftar Berita']; //add as much array item as needed
        return view('v2.feeds.index', compact('pagedata'), ['breadcrumb' => $breadcrumbs]);
    }

    public function readv2()
    {
        $pagedata = array(
            'controller' => 'Feeds',
            'pagetitles' => 'Berita ',
            'subtitles' => '& Informasi',
            'emphs' => '',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'Feeds', 'Berita']; //add as much array item as needed
        return view('v2.feeds.read', compact('pagedata'), ['breadcrumb' => $breadcrumbs]);
    }
}
