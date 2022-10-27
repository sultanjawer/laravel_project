<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use LaravelDaily\LaravelCharts\Classes\LaravelChart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SklController extends Controller
{
    //========== v2 starting from this line ==========//
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
        return view('admin.skl.index', compact('pagedata'), ['breadcrumb' => $breadcrumbs]);
    }

    public function userskl()
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
        return view('admin.skl.userskl', compact('pagedata'), ['breadcrumb' => $breadcrumbs]);
    }

    public function formskl()
    {
        $pagedata = array(
            'controller' => 'SKL',
            'pagetitles' => 'Surat Keterangan Lunas',
            'subtitles' => 'SKL',
            'emphs' => 'Surat Keterangan Lunas yang telah diterbitkan',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'SKL', 'Form SKL Terbit']; //add as much array item as needed
        return view('admin.skl.formskl', compact('pagedata'), ['breadcrumb' => $breadcrumbs]);
    }

    //========== v2 starting from this line ==========//
    public function indexv2()
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

    public function formsklv2()
    {
        $pagedata = array(
            'controller' => 'SKL',
            'pagetitles' => 'Surat Keterangan Lunas',
            'subtitles' => 'SKL',
            'emphs' => 'Surat Keterangan Lunas yang telah diterbitkan',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'SKL', 'Form SKL Terbit']; //add as much array item as needed
        return view('v2.skl.formskl', compact('pagedata'), ['breadcrumb' => $breadcrumbs]);
    }

    //========== starting this line crud SKL ==========//
    /* Why CRUD SKL?
    Mengantisipasi adanya permintaan klien saat ada penerbitan SKL Backdate. Create Update Delete hanya diperuntukkan bagi Superadmin/Administrator.
    */
    public function create()
    {
        $pagedata = array(
            'controller' => 'SKL',
            'pagetitles' => 'Create New',
            'subtitles' => 'SKL Form',
            'emphs' => 'Terbitkan Surat Keterangan Baru',
            'alerttitle' => 'Perhatian!!!', //make it uppercase
            'alertcontent' => 'Form ini hanya diperuntukkan bagi penerbitan SKL untuk Wajib Tanam-Produksi sebelum 2022 yang telah merealisasikan wajib tanam-produksi namun data belum ada/input di Aplikasi SIAP RIPH.',
        );
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'SKL', 'Form SKL Terbit']; //add as much array item as needed
        return view('admin.skl.create', compact('pagedata'), ['breadcrumb' => $breadcrumbs]);
    }

    public function show()
    {
        $pagedata = array(
            'controller' => 'SKL',
            'pagetitles' => 'Update SKL',
            'subtitles' => 'Data',
            'emphs' => 'Ubah data Surat Keterangan Baru',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'SKL', 'Form SKL Terbit']; //add as much array item as needed
        return view('admin.skl.show', compact('pagedata'), ['breadcrumb' => $breadcrumbs]);
    }
}
