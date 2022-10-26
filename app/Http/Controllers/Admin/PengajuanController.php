<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use LaravelDaily\LaravelCharts\Classes\LaravelChart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PengajuanController extends Controller
{

    public function index()
    {
        $pagedata = array(
            'controller' => 'Pengajuan',
            'pagetitles' => 'Daftar Pengajuan',
            'subtitles' => '',
            'emphs' => 'Daftar pengajuan yang telah Anda buat beserta statusnya.',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'Pengajuan', 'Daftar Pengajuan']; //add as much array item as needed
        return view('admin.pengajuan.index', compact('pagedata'), ['breadcrumb' => $breadcrumbs]);
    }

    public function vcheck()
    {
        $pagedata = array(
            'controller' => 'Pengajuan',
            'pagetitles' => 'Pengajuan',
            'subtitles' => 'Verifikasi',
            'emphs' => '',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'Pengajuan', 'Pengajuan Verifikasi']; //add as much array item as needed
        return view('admin.pengajuan.vcheck', compact('pagedata'), ['breadcrumb' => $breadcrumbs]);
    }

    public function sklcheck()
    {
        $pagedata = array(
            'controller' => 'Pengajuan',
            'pagetitles' => 'Pengajuan',
            'subtitles' => 'Lunas',
            'emphs' => '',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'Pengajuan', 'Pengajuan Verifikasi']; //add as much array item as needed
        return view('admin.pengajuan.sklcheck', compact('pagedata'), ['breadcrumb' => $breadcrumbs]);
    }

    public function vsuccess()
    {
        $pagedata = array(
            'controller' => 'Pengajuan',
            'pagetitles' => 'Pengajuan',
            'subtitles' => 'Verifikasi',
            'emphs' => '',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'Pengajuan', 'Pengajuan Verifikasi']; //add as much array item as needed
        return view('admin.pengajuan.vsuccess', compact('pagedata'), ['breadcrumb' => $breadcrumbs]);
    }

    public function sklsuccess()
    {
        $pagedata = array(
            'controller' => 'Pengajuan',
            'pagetitles' => 'Pengajuan',
            'subtitles' => 'Lunas',
            'emphs' => '',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'Pengajuan', 'Pengajuan Lunas']; //add as much array item as needed
        return view('admin.pengajuan.sklsuccess', compact('pagedata'), ['breadcrumb' => $breadcrumbs]);
    }

    public function vfail()
    {
        $pagedata = array(
            'controller' => 'Pengajun',
            'pagetitles' => 'Pengajuan',
            'subtitles' => 'Verifikasi',
            'emphs' => '',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'Pengajuan', 'Pengajuan Verifikasi']; //add as much array item as needed
        return view('admin.pengajuan.vfail', compact('pagedata'), ['breadcrumb' => $breadcrumbs]);
    }

    public function sklfail()
    {
        $pagedata = array(
            'controller' => 'Pengajuan',
            'pagetitles' => 'Pengajuan',
            'subtitles' => 'Lunas',
            'emphs' => '',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'Pengajuan', 'Pengajuan Lunas']; //add as much array item as needed
        return view('admin.pengajuan.sklfail', compact('pagedata'), ['breadcrumb' => $breadcrumbs]);
    }

    public function submitted()
    {
        $pagedata = array(
            'controller' => 'Pengajuan',
            'pagetitles' => 'Pengajuan',
            'subtitles' => '#ID_Pengajuan',
            'emphs' => 'Nomor Pengajuan Anda',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'Pengajuan', 'Detail Pengajuan']; //add as much array item as needed
        return view('admin.pengajuan.submitted', compact('pagedata'), ['breadcrumb' => $breadcrumbs]);
    }

    //========== v2 starting from this line ==========//
    public function indexv2()
    {
        $pagedata = array(
            'controller' => 'Pengajuan',
            'pagetitles' => 'Daftar Pengajuan',
            'subtitles' => '',
            'emphs' => 'Daftar pengajuan yang telah Anda buat beserta statusnya.',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'Pengajuan', 'Daftar Pengajuan']; //add as much array item as needed
        return view('v2.pengajuan.index', compact('pagedata'), ['breadcrumb' => $breadcrumbs]);
    }

    public function vcheckv2()
    {
        $pagedata = array(
            'controller' => 'Pengajuan',
            'pagetitles' => 'Pengajuan',
            'subtitles' => 'Verifikasi',
            'emphs' => '',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'Pengajuan', 'Pengajuan Verifikasi']; //add as much array item as needed
        return view('v2.pengajuan.vcheck', compact('pagedata'), ['breadcrumb' => $breadcrumbs]);
    }

    public function sklcheckv2()
    {
        $pagedata = array(
            'controller' => 'Pengajuan',
            'pagetitles' => 'Pengajuan',
            'subtitles' => 'Lunas',
            'emphs' => '',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'Pengajuan', 'Pengajuan Verifikasi']; //add as much array item as needed
        return view('v2.pengajuan.sklcheck', compact('pagedata'), ['breadcrumb' => $breadcrumbs]);
    }

    public function vsuccessv2()
    {
        $pagedata = array(
            'controller' => 'Pengajuan',
            'pagetitles' => 'Pengajuan',
            'subtitles' => 'Verifikasi',
            'emphs' => '',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'Pengajuan', 'Pengajuan Verifikasi']; //add as much array item as needed
        return view('v2.pengajuan.vsuccess', compact('pagedata'), ['breadcrumb' => $breadcrumbs]);
    }

    public function sklsuccessv2()
    {
        $pagedata = array(
            'controller' => 'Pengajuan',
            'pagetitles' => 'Pengajuan',
            'subtitles' => 'Lunas',
            'emphs' => '',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'Pengajuan', 'Pengajuan Lunas']; //add as much array item as needed
        return view('v2.pengajuan.sklsuccess', compact('pagedata'), ['breadcrumb' => $breadcrumbs]);
    }

    public function vfailv2()
    {
        $pagedata = array(
            'controller' => 'Pengajun',
            'pagetitles' => 'Pengajuan',
            'subtitles' => 'Verifikasi',
            'emphs' => '',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'Pengajuan', 'Pengajuan Verifikasi']; //add as much array item as needed
        return view('v2.pengajuan.vfail', compact('pagedata'), ['breadcrumb' => $breadcrumbs]);
    }

    public function sklfailv2()
    {
        $pagedata = array(
            'controller' => 'Pengajuan',
            'pagetitles' => 'Pengajuan',
            'subtitles' => 'Lunas',
            'emphs' => '',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'Pengajuan', 'Pengajuan Lunas']; //add as much array item as needed
        return view('v2.pengajuan.sklfail', compact('pagedata'), ['breadcrumb' => $breadcrumbs]);
    }

    public function submittedv2()
    {
        $pagedata = array(
            'controller' => 'Pengajuan',
            'pagetitles' => 'Pengajuan',
            'subtitles' => '#ID_Pengajuan',
            'emphs' => 'Nomor Pengajuan Anda',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'Pengajuan', 'Detail Pengajuan']; //add as much array item as needed
        return view('v2.pengajuan.submitted', compact('pagedata'), ['breadcrumb' => $breadcrumbs]);
    }
}
