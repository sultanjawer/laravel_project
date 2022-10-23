<?php

namespace App\Http\Controllers\v2;

use App\Http\Controllers\Controller;
use LaravelDaily\LaravelCharts\Classes\LaravelChart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SklController extends Controller
{
    public function index()
    {
        $pagedata = array(
            'controller' => 'SKL',
            'pagetitles' => 'Daftar SKL',
            'subtitles' => 'Terbit',
            'emphs' => 'Daftar Keterangan Lunas yang telah diterbitkan',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'SKL', 'Daftar SKL terbit']; //add as much array item as needed
        return view('v2.skl.index', compact('pagedata'), ['breadcrumb' => $breadcrumbs]);
    }

    public function formskl()
    {
        $pagedata = array(
            'controller' => 'SKL',
            'pagetitles' => 'Surat Keterangan Lunas',
            'subtitles' => '',
            'emphs' => 'Surat Keterangan Lunas yang telah diterbitkan',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'SKL', 'Form SKL Terbit']; //add as much array item as needed
        return view('v2.skl.formskl', compact('pagedata'), ['breadcrumb' => $breadcrumbs]);
    }
}
