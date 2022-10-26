<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use LaravelDaily\LaravelCharts\Classes\LaravelChart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PullsyncController extends Controller
{
    public function index()
    {
        $pagedata = array(
            'controller' => 'Commitmen',
            'pagetitles' => 'Pull & Sync',
            'subtitles' => 'Data RIPH',
            'emphs' => 'Penyelarasan Data Wajib Tanam-Produksi dari aplikasi SIAP RIPH',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'Commitmen', 'Pull Data']; //add as much array item as needed
        return view('admin.pullsync.index', compact('pagedata'), ['breadcrumb' => $breadcrumbs]);
    }

    public function detail()
    {
        $pagedata = array(
            'controller' => 'Commitmen',
            'pagetitles' => 'Pull & Sync',
            'subtitles' => 'Detail',
            'emphs' => 'Detail data yang telah diselaraskan.',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'Commitmen', 'Detail']; //add as much array item as needed
        return view('admin.pullsync.detail', compact('pagedata'), ['breadcrumb' => $breadcrumbs]);
    }

    public function success()
    {
        $pagedata = array(
            'controller' => 'Commitmen',
            'pagetitles' => 'Successfull',
            'subtitles' => 'Synched',
            'emphs' => 'Penyelarasan Data berhasil dilakukan.',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'Commitmen', 'Sync Result']; //add as much array item as needed
        return view('admin.pullsync.success', compact('pagedata'), ['breadcrumb' => $breadcrumbs]);
    }

    public function fail()
    {
        $pagedata = array(
            'controller' => 'Commitmen',
            'pagetitles' => 'Failed',
            'subtitles' => 'Synched',
            'emphs' => 'Penyelarasan Data gagal dilakukan.',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'Commitmen', 'Sync Result']; //add as much array item as needed
        return view('admin.pullsync.fail', compact('pagedata'), ['breadcrumb' => $breadcrumbs]);
    }
}
