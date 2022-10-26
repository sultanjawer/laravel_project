<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use LaravelDaily\LaravelCharts\Classes\LaravelChart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FilesController extends Controller
{
    //========== v2 starting from this line ==========//
    public function index()
    {
        $pagedata = array(
            'controller' => 'Files Management',
            'pagetitles' => 'My',
            'subtitles' => 'Files',
            'emphs' => 'Daftar Berkas-berkas yang telah diunggah di dalam aplikasi',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'Files', 'Daftar Berkas']; //add as much array item as needed
        return view('admin.files.index', compact('pagedata'), ['breadcrumb' => $breadcrumbs]);
    }

    public function myfiles()
    {
        $pagedata = array(
            'controller' => 'Files Management',
            'pagetitles' => 'My',
            'subtitles' => 'Files',
            'emphs' => 'Daftar Berkas dan Dokumen yang telah diunggah di dalam aplikasi',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'Files', 'Daftar Berkas']; //add as much array item as needed
        return view('admin.files.myfiles', compact('pagedata'), ['breadcrumb' => $breadcrumbs]);
    }

    public function mygalleries()
    {
        $pagedata = array(
            'controller' => 'Files Management',
            'pagetitles' => 'My',
            'subtitles' => 'Galleries',
            'emphs' => 'Daftar Foto dan Gambar yang telah diunggah di dalam aplikasi',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'Files', 'Galleries']; //add as much array item as needed
        return view('admin.files.mygalleries', compact('pagedata'), ['breadcrumb' => $breadcrumbs]);
    }

    public function templates()
    {
        $pagedata = array(
            'controller' => 'Files Management',
            'pagetitles' => 'Master',
            'subtitles' => 'Template',
            'emphs' => 'Daftar Contoh Berkas dan Dokumen yang disyaratkan.',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'Files', 'Master Template']; //add as much array item as needed
        return view('admin.files.templates', compact('pagedata'), ['breadcrumb' => $breadcrumbs]);
    }

    //========== v2 starting from this line ==========//
    public function indexv2()
    {
        $pagedata = array(
            'controller' => 'Files Management',
            'pagetitles' => 'My',
            'subtitles' => 'Files',
            'emphs' => 'Daftar Berkas-berkas yang telah diunggah di dalam aplikasi',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'Files', 'Daftar Berkas']; //add as much array item as needed
        return view('v2.files.index', compact('pagedata'), ['breadcrumb' => $breadcrumbs]);
    }

    public function myfilesv2()
    {
        $pagedata = array(
            'controller' => 'Files Management',
            'pagetitles' => 'My',
            'subtitles' => 'Files',
            'emphs' => 'Daftar Berkas dan Dokumen yang telah diunggah di dalam aplikasi',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'Files', 'Daftar Berkas']; //add as much array item as needed
        return view('v2.files.myfiles', compact('pagedata'), ['breadcrumb' => $breadcrumbs]);
    }

    public function mygalleriesv2()
    {
        $pagedata = array(
            'controller' => 'Files Management',
            'pagetitles' => 'My',
            'subtitles' => 'Galleries',
            'emphs' => 'Daftar Foto dan Gambar yang telah diunggah di dalam aplikasi',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'Files', 'Galleries']; //add as much array item as needed
        return view('v2.files.mygalleries', compact('pagedata'), ['breadcrumb' => $breadcrumbs]);
    }

    public function templatesv2()
    {
        $pagedata = array(
            'controller' => 'Files Management',
            'pagetitles' => 'Master',
            'subtitles' => 'Template',
            'emphs' => 'Daftar Contoh Berkas dan Dokumen yang disyaratkan.',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'Files', 'Master Template']; //add as much array item as needed
        return view('v2.files.templates', compact('pagedata'), ['breadcrumb' => $breadcrumbs]);
    }
}
