<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use LaravelDaily\LaravelCharts\Classes\LaravelChart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AnggotaController extends Controller
{
    //v2 for this line and below
    public function indexv2()
    {
        $pagedata = array(
            'controller' => 'Anggota Keltan',
            'pagetitles' => 'Daftar Anggota',
            'subtitles' => 'Kelompoktani',
            'emphs' => '',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'Anggota', 'Daftar Anggota']; //add as much array item as needed
        return view('v2.anggota.index', compact('pagedata'), ['breadcrumb' => $breadcrumbs]);
    }

    public function createv2()
    {
        $pagedata = array(
            'controller' => 'Anggota Keltan',
            'pagetitles' => 'Form Tambah',
            'subtitles' => 'Anggota',
            'emphs' => '',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'Anggota', 'Tambah Anggota']; //add as much array item as needed
        return view('v2.anggota.create', compact('pagedata'), ['breadcrumb' => $breadcrumbs]);
    }



    public function showv2()
    {
        $pagedata = array(
            'controller' => 'Anggota Keltan',
            'pagetitles' => 'Form Ubah',
            'subtitles' => 'Data Anggota',
            'emphs' => '',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'Anggota', 'Ubah Anggota']; //add as much array item as needed
        return view('v2.anggota.show', compact('pagedata'), ['breadcrumb' => $breadcrumbs]);
    }
}
