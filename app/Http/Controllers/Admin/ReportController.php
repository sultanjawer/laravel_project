<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use LaravelDaily\LaravelCharts\Classes\LaravelChart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{
    public function index()
    {
        $pagedata = array(
            'controller' => 'Report',
            'pagetitles' => 'Data',
            'subtitles' => 'Report',
            'emphs' => 'Application Documentation',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'Report', 'Index']; //add as much array item as needed
        return view('admin.report.index', compact('pagedata'), ['breadcrumb' => $breadcrumbs]);
    }

    public function commitment()
    {
        $pagedata = array(
            'controller' => 'Report',
            'pagetitles' => 'Commitment',
            'subtitles' => 'Report Lists',
            'emphs' => 'Laporan Daftar Komitmen/RIPH Pelaku Usaha',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'Report', 'Commitment Report']; //add as much array item as needed
        return view('admin.report.index', compact('pagedata'), ['breadcrumb' => $breadcrumbs]);
    }

    public function commitment_detail()
    {
        $pagedata = array(
            'controller' => 'Report',
            'pagetitles' => 'Commitment Report',
            'subtitles' => 'Detail RIPH',
            'emphs' => 'Laporan Detail Komitmen/RIPH Pelaku Usaha',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'Report', 'Commitment Detail']; //add as much array item as needed
        return view('admin.report.detail', compact('pagedata'), ['breadcrumb' => $breadcrumbs]);
    }

    public function commitment_realisasi()
    {
        $pagedata = array(
            'controller' => 'Report',
            'pagetitles' => 'Commitment Report',
            'subtitles' => 'Detail Realisasi',
            'emphs' => 'Laporan Realisasi Komitmen/RIPH Pelaku Usaha',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'Report', 'Detail Realisasi']; //add as much array item as needed
        return view('admin.report.realisasi', compact('pagedata'), ['breadcrumb' => $breadcrumbs]);
    }

    public function commitment_peta()
    {
        $pagedata = array(
            'controller' => 'Report',
            'pagetitles' => 'Commitment Report',
            'subtitles' => 'Peta Realisasi',
            'emphs' => 'Peta Realisasi Komitmen/RIPH Pelaku Usaha',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'Report', 'Peta Realisasi']; //add as much array item as needed
        return view('admin.report.peta', compact('pagedata'), ['breadcrumb' => $breadcrumbs]);
    }

    public function onfarm()
    {
        $pagedata = array(
            'controller' => 'Report',
            'pagetitles' => 'Onfarm Verification',
            'subtitles' => 'Report Lists',
            'emphs' => 'Laporan Daftar Verifikasi Lapangan',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'Report', 'Verification', 'Onfarm Report']; //add as much array item as needed
        return view('admin.verification.onfarm', compact('pagedata'), ['breadcrumb' => $breadcrumbs]);
    }

    public function online()
    {
        $pagedata = array(
            'controller' => 'Report',
            'pagetitles' => 'Online Verification',
            'subtitles' => 'Report Lists',
            'emphs' => 'Laporan Daftar Verifikasi Data (online)',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'Report', 'Verification', 'Online Report']; //add as much array item as needed
        return view('admin.verification.online', compact('pagedata'), ['breadcrumb' => $breadcrumbs]);
    }
}
