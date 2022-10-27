<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use LaravelDaily\LaravelCharts\Classes\LaravelChart;
use App\Models\Belanja;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CommitmentController extends Controller
{
    //v3 start form this line
    public function index()
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
        return view('admin.commitment.index', compact('pagedata'), ['breadcrumb' => $breadcrumbs]);
    }

    public function detail()
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
        return view('admin.commitment.detail', compact('pagedata'), ['breadcrumb' => $breadcrumbs]);
    }

    public function master()
    {
        $pagedata = array(
            'controller' => 'Komitmen',
            'pagetitles' => 'Data Acuan',
            'subtitles' => 'RIPH',
            'emphs' => 'Data Acuan Target Realisasi Wajib Tanam-Produksi',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Halaman ini adalah Daftar data RIPH sebagai parameter rujukan/acuan target yang harus dipenuhi. Data diisi secara periodik tahunan.',
        );
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'Komitmen', 'Data Acuan']; //add as much array item as needed
        return view('admin.commitment.master', compact('pagedata'), ['breadcrumb' => $breadcrumbs]);
    }

    public function create()
    {
        $pagedata = array(
            'controller' => 'Komitmen',
            'pagetitles' => 'Form Tambah',
            'subtitles' => 'Data RIPH',
            'emphs' => 'Form tambah Data Acuan Target Realisasi Wajib Tanam-Produksi',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'Komitmen', 'Data Acuan']; //add as much array item as needed
        return view('admin.commitment.create', compact('pagedata'), ['breadcrumb' => $breadcrumbs]);
    }

    public function show()
    {
        $pagedata = array(
            'controller' => 'Komitmen',
            'pagetitles' => 'Form Ubah',
            'subtitles' => 'Data RIPH',
            'emphs' => 'Form ubah Data Acuan Target Realisasi Wajib Tanam-Produksi',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'Komitmen', 'Data Acuan']; //add as much array item as needed
        return view('admin.commitment.show', compact('pagedata'), ['breadcrumb' => $breadcrumbs]);
    }

    //v2 for this line and below
    public function indexv2()
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
        return view('v2.commitment.index', compact('pagedata'), ['breadcrumb' => $breadcrumbs]);
    }

    public function detailv2()
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
        return view('v2.commitment.detail', compact('pagedata'), ['breadcrumb' => $breadcrumbs]);
    }

    public function createv2()
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
        return view('v2.commitment.create', compact('pagedata'), ['breadcrumb' => $breadcrumbs]);
    }

    public function showv2()
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
        return view('v2.commitment.show', compact('pagedata'), ['breadcrumb' => $breadcrumbs]);
    }
}
