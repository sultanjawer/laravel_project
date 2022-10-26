<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use LaravelDaily\LaravelCharts\Classes\LaravelChart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PksController extends Controller
{
    //v3 this line and below
    public function index()
    {
        $pagedata = array(
            'controller' => 'PKS/Rencana Tanam',
            'pagetitles' => 'Daftar',
            'subtitles' => 'PKS',
            'emphs' => 'Daftar PKS/Rencana Tanam',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'PKS', 'Daftar PKS']; //add as much array item as needed
        return view('admin.pks.index', compact('pagedata'), ['breadcrumb' => $breadcrumbs]);
    }

    public function create()
    {
        $pagedata = array(
            'controller' => 'PKS',
            'pagetitles' => 'Form Tambah',
            'subtitles' => 'PKS Baru',
            'emphs' => 'Tambah Data PKS Baru',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'PKS', 'Data Baru']; //add as much array item as needed
        return view('admin.pks.create', compact('pagedata'), ['breadcrumb' => $breadcrumbs]);
    }

    public function show()
    {
        $pagedata = array(
            'controller' => 'PKS',
            'pagetitles' => 'Form Ubah',
            'subtitles' => 'Data PKS',
            'emphs' => 'Tambah Data Komitmen (RIPH) Baru',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'PKS', 'Ubah']; //add as much array item as needed
        return view('admin.pks.show', compact('pagedata'), ['breadcrumb' => $breadcrumbs]);
    }

    public function members()
    {
        $pagedata = array(
            'controller' => 'PKS',
            'pagetitles' => 'Daftar',
            'subtitles' => 'Anggota',
            'emphs' => 'Daftar Anggota Tergabung dalam PKS',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'PKS', 'Daftar Anggota']; //add as much array item as needed
        return view('admin.pks.members', compact('pagedata'), ['breadcrumb' => $breadcrumbs]);
    }

    public function saprodi()
    {
        $pagedata = array(
            'controller' => 'PKS',
            'pagetitles' => 'Bantuan',
            'subtitles' => 'Saprodi',
            'emphs' => 'Daftar Bantuan Sarana Produksi untuk Kelompoktani Mitra',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'PKS', 'Bantuan Saprodi']; //add as much array item as needed
        return view('admin.pks.saprodi', compact('pagedata'), ['breadcrumb' => $breadcrumbs]);
    }

    //================v2 this line and below===============//
    public function indexv2()
    {
        $pagedata = array(
            'controller' => 'PKS/Rencana Tanam',
            'pagetitles' => 'Daftar',
            'subtitles' => 'PKS',
            'emphs' => 'Daftar PKS/Rencana Tanam',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'PKS', 'Daftar PKS']; //add as much array item as needed
        return view('v2.pks.index', compact('pagedata'), ['breadcrumb' => $breadcrumbs]);
    }

    public function createv2()
    {
        $pagedata = array(
            'controller' => 'PKS',
            'pagetitles' => 'Form Tambah',
            'subtitles' => 'PKS Baru',
            'emphs' => 'Tambah Data PKS Baru',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'PKS', 'Data Baru']; //add as much array item as needed
        return view('v2.pks.create', compact('pagedata'), ['breadcrumb' => $breadcrumbs]);
    }

    public function showv2()
    {
        $pagedata = array(
            'controller' => 'PKS',
            'pagetitles' => 'Form Ubah',
            'subtitles' => 'Data PKS',
            'emphs' => 'Tambah Data Komitmen (RIPH) Baru',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'PKS', 'Ubah']; //add as much array item as needed
        return view('v2.pks.show', compact('pagedata'), ['breadcrumb' => $breadcrumbs]);
    }

    public function membersv2()
    {
        $pagedata = array(
            'controller' => 'PKS',
            'pagetitles' => 'Daftar',
            'subtitles' => 'Anggota',
            'emphs' => 'Daftar Anggota Tergabung dalam PKS',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'PKS', 'Daftar Anggota']; //add as much array item as needed
        return view('v2.pks.members', compact('pagedata'), ['breadcrumb' => $breadcrumbs]);
    }

    public function saprodiv2()
    {
        $pagedata = array(
            'controller' => 'PKS',
            'pagetitles' => 'Bantuan',
            'subtitles' => 'Saprodi',
            'emphs' => 'Daftar Bantuan Sarana Produksi untuk Kelompoktani Mitra',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'PKS', 'Bantuan Saprodi']; //add as much array item as needed
        return view('v2.pks.saprodi', compact('pagedata'), ['breadcrumb' => $breadcrumbs]);
    }
}
