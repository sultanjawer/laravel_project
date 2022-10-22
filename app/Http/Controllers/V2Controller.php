<?php

namespace App\Http\Controllers;

use LaravelDaily\LaravelCharts\Classes\LaravelChart;
use App\Models\Belanja;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class V2Controller extends Controller
{
    public function index()
    {
        return view('v2.register.index', compact('pagedata'));
    }

    public function register()
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
        return view('v2.register.index', compact('pagedata'), ['breadcrumb' => $breadcrumbs]);
    }

    public function beranda()
    {
        $pagedata = array(
            'controller' => 'Dashboard',
        );
        return view('v2.landing.index', compact('pagedata'));
    }

    public function dashboard()
    {
        $pagedata = array(
            'controller' => 'Dashboard',
            'pagetitles' => 'Monitoring',
            'subtitles' => 'Realisasi',
            'emphs' => 'Ringkasan Data Realisasi Wajib Tanam-Produksi',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'Dashboard', 'Monitoring Realisasi']; //add as much array item as needed
        return view('v2.dashboard.index', compact('pagedata'), ['breadcrumb' => $breadcrumbs]);
    }

    public function pemetaan()
    {
        $pagedata = array(
            'controller' => 'Dashboard',
            'pagetitles' => 'Peta',
            'subtitles' => 'Realisasi',
            'emphs' => 'Pemetaan Realisasi Wajib Tanam-Produksi',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'Dashboard', 'Pemetaan']; //add as much array item as needed
        return view('v2.dashboard.pemetaan', compact('pagedata'), ['breadcrumb' => $breadcrumbs]);
    }

    public function kelompoktani()
    {
        $pagedata = array(
            'controller' => 'KelompokTani',
            'pagetitles' => 'Daftar',
            'subtitles' => 'Kelompoktani',
            'emphs' => 'Daftar Kelompoktani Binaan Pelaku Usaha Wajib Tanam-Produksi',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'Kelompoktani', 'Daftar Kelompoktani']; //add as much array item as needed
        return view('v2.kelompoktani.index', compact('pagedata'), ['breadcrumb' => $breadcrumbs]);
    }

    public function kelompoktani_add()
    {
        $pagedata = array(
            'controller' => 'KelompokTani',
            'pagetitles' => 'Form Data',
            'subtitles' => 'Kelompoktani',
            'emphs' => 'Form tambah data kelompoktani',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'Kelompoktani', 'Tambah Kelompoktani']; //add as much array item as needed
        return view('v2.kelompoktani.add', compact('pagedata'), ['breadcrumb' => $breadcrumbs]);
    }

    public function riphlist()
    {
        $pagedata = array(
            'controller' => 'Komitmen',
            'pagetitles' => 'Daftar',
            'subtitles' => 'Komitmen',
            'emphs' => 'Daftar Komitmen Wajib Tanam-Produksi',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'Komitmen', 'Daftar Komitmen']; //add as much array item as needed
        return view('v2.riph.index', compact('pagedata'), ['breadcrumb' => $breadcrumbs]);
    }

    public function riphdetail()
    {
        $pagedata = array(
            'controller' => 'Komitmen',
            'pagetitles' => 'Rincian',
            'subtitles' => 'Komitmen',
            'emphs' => 'Rincian Komitmen Wajib Tanam-Produksi',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'Komitmen', 'Rincian Komitmen']; //add as much array item as needed
        return view('v2.riph.detail', compact('pagedata'), ['breadcrumb' => $breadcrumbs]);
    }

    public function add_riph()
    {
        $pagedata = array(
            'controller' => 'Komitmen',
            'pagetitles' => 'Form Komitmen',
            'subtitles' => 'Baru',
            'emphs' => 'Tambah Data Komitmen (RIPH) Baru',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'Komitmen', 'Baru']; //add as much array item as needed
        return view('v2.riph.add', compact('pagedata'), ['breadcrumb' => $breadcrumbs]);
    }

    public function edit_riph()
    {
        $pagedata = array(
            'controller' => 'Komitmen',
            'pagetitles' => 'Form Ubah',
            'subtitles' => 'Data Komitmen',
            'emphs' => 'Tambah Data Komitmen (RIPH) Baru',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'Komitmen', 'Baru']; //add as much array item as needed
        return view('v2.riph.edit', compact('pagedata'), ['breadcrumb' => $breadcrumbs]);
    }
}
