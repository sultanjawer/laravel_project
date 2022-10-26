<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use LaravelDaily\LaravelCharts\Classes\LaravelChart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VerificationController extends Controller
{
    public function index()
    {
        $pagedata = array(
            'controller' => 'Verification',
            'pagetitles' => 'Verification',
            'subtitles' => 'List',
            'emphs' => 'Daftar seluruh Verifikasi',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'Verification', 'Index']; //add as much array item as needed
        return view('admin.verification.index', compact('pagedata'), ['breadcrumb' => $breadcrumbs]);
    }

    public function onfarm()
    {
        $pagedata = array(
            'controller' => 'Verification',
            'pagetitles' => 'Onfarm',
            'subtitles' => 'Verification',
            'emphs' => 'Daftar Verifikasi Lapangan & Online',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'Verification', 'Onfarm']; //add as much array item as needed
        return view('admin.verification.onfarm', compact('pagedata'), ['breadcrumb' => $breadcrumbs]);
    }

    public function add_sampling()
    {
        $pagedata = array(
            'controller' => 'Verification',
            'pagetitles' => 'Tambah Data',
            'subtitles' => 'Lokasi Sampling',
            'emphs' => 'Form tambah data sampling lokasi',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'Verification', 'Onfarm']; //add as much array item as needed
        return view('admin.verification.add_sampling', compact('pagedata'), ['breadcrumb' => $breadcrumbs]);
    }

    public function update_sampling()
    {
        $pagedata = array(
            'controller' => 'Verification',
            'pagetitles' => 'Ubah Data',
            'subtitles' => 'Lokasi Sampling',
            'emphs' => 'Form ubah data pemeriksaan sampling lokasi',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'Verification', 'Onfarm']; //add as much array item as needed
        return view('admin.verification.update_sampling', compact('pagedata'), ['breadcrumb' => $breadcrumbs]);
    }

    public function detail_onfarm()
    {
        $pagedata = array(
            'controller' => 'Verification',
            'pagetitles' => 'Verifikasi',
            'subtitles' => 'Sampling',
            'emphs' => 'Lokasi sampling dan verifikasi',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'Verification', 'detail']; //add as much array item as needed
        return view('admin.verification.detail_onfarm', compact('pagedata'), ['breadcrumb' => $breadcrumbs]);
    }

    public function online()
    {
        $pagedata = array(
            'controller' => 'Verification',
            'pagetitles' => 'Online',
            'subtitles' => 'Verification',
            'emphs' => 'Daftar Verifikasi Online (data)',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'Verification', 'Online']; //add as much array item as needed
        return view('admin.verification.online', compact('pagedata'), ['breadcrumb' => $breadcrumbs]);
    }

    public function detail_online()
    {
        $pagedata = array(
            'controller' => 'Verification',
            'pagetitles' => 'Online',
            'subtitles' => 'Verification',
            'emphs' => 'Daftar Verifikasi Online (data)',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'Verification', 'Online']; //add as much array item as needed
        return view('admin.verification.detail_online', compact('pagedata'), ['breadcrumb' => $breadcrumbs]);
    }

    public function add_check()
    {
        $pagedata = array(
            'controller' => 'Verification',
            'pagetitles' => 'Tambah Data',
            'subtitles' => 'Lokasi',
            'emphs' => 'Form tambah data verifikasi lokasi dan kelompoktani',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'Verification', 'Online']; //add as much array item as needed
        return view('admin.verification.add_check', compact('pagedata'), ['breadcrumb' => $breadcrumbs]);
    }

    public function show_check()
    {
        $pagedata = array(
            'controller' => 'Verification',
            'pagetitles' => 'Ubah Data',
            'subtitles' => 'Lokasi',
            'emphs' => 'Form ubah data verifikasi lokasi dan kelompoktani',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'Verification', 'Online']; //add as much array item as needed
        return view('admin.verification.show_check', compact('pagedata'), ['breadcrumb' => $breadcrumbs]);
    }

    public function skl()
    {
        $pagedata = array(
            'controller' => 'Verification',
            'pagetitles' => 'SKL',
            'subtitles' => 'Verification',
            'emphs' => 'Daftar Verifikasi Keterangan Lunas',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'Verification', 'SKL']; //add as much array item as needed
        return view('admin.verification.skl', compact('pagedata'), ['breadcrumb' => $breadcrumbs]);
    }

    public function skl_check()
    {
        $pagedata = array(
            'controller' => 'Verification',
            'pagetitles' => 'Pemeriksaan & Penerbitan',
            'subtitles' => 'Keterangan Lunas',
            'emphs' => 'Form Pemeriksaan, Penetapan Status dan Penerbitan Keterangan Lunas',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'Verification', 'SKL']; //add as much array item as needed
        return view('admin.verification.skl_check', compact('pagedata'), ['breadcrumb' => $breadcrumbs]);
    }

    public function skl_success()
    {
        $pagedata = array(
            'controller' => 'Verification',
            'pagetitles' => 'Surat Keterangan Lunas',
            'subtitles' => 'Diterbitkan',
            'emphs' => 'Surat Keterangan dan Status Lunas telah diterbitkan dan ditetapkan',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'Verification', 'SKL']; //add as much array item as needed
        return view('admin.verification.skl_success', compact('pagedata'), ['breadcrumb' => $breadcrumbs]);
    }

    public function skl_postponed()
    {
        $pagedata = array(
            'controller' => 'Verification',
            'pagetitles' => 'Penetapan Status',
            'subtitles' => 'Perbaikan Data',
            'emphs' => 'Surat Keterangan dan Status Lunas ditunda hingga Pelaku usaha memperbaiki data dan mengajukan ulang.',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'Verification', 'SKL']; //add as much array item as needed
        return view('admin.verification.skl_postponed', compact('pagedata'), ['breadcrumb' => $breadcrumbs]);
    }

    public function completed()
    {
        $pagedata = array(
            'controller' => 'Verification',
            'pagetitles' => 'Completed',
            'subtitles' => 'Verification',
            'emphs' => 'Daftar Verifikasi yang telah selesai dilaksanakan.',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'Verification', 'Completed']; //add as much array item as needed
        return view('admin.verification.completed', compact('pagedata'), ['breadcrumb' => $breadcrumbs]);
    }
}
