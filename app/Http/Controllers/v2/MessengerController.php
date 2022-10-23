<?php

namespace App\Http\Controllers\v2;

use App\Http\Controllers\Controller;
use LaravelDaily\LaravelCharts\Classes\LaravelChart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MessengerController extends Controller
{
    public function index()
    {
        $pagedata = array(
            'controller' => 'Messenger',
            'pagetitles' => 'All',
            'subtitles' => 'Messages',
            'emphs' => 'Daftar Seluruh Pesan Anda',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'Messenger', 'All Messages']; //add as much array item as needed
        return view('v2.messenger.index', compact('pagedata'), ['breadcrumb' => $breadcrumbs]);
    }

    public function inbox()
    {
        $pagedata = array(
            'controller' => 'Messenger',
            'pagetitles' => 'Kotak',
            'subtitles' => 'Masuk',
            'emphs' => 'Daftar Seluruh Pesan Masuk untuk Anda',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'Messenger', 'Inbox']; //add as much array item as needed
        return view('v2.messenger.inbox', compact('pagedata'), ['breadcrumb' => $breadcrumbs]);
    }

    public function outbox()
    {
        $pagedata = array(
            'controller' => 'Messenger',
            'pagetitles' => 'Kotak',
            'subtitles' => 'Keluar',
            'emphs' => 'Daftar Seluruh Pesan Keluar dari Anda',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'Messenger', 'Outbox']; //add as much array item as needed
        return view('v2.messenger.inbox', compact('pagedata'), ['breadcrumb' => $breadcrumbs]);
    }

    public function trash()
    {
        $pagedata = array(
            'controller' => 'Messenger',
            'pagetitles' => 'Kotak',
            'subtitles' => 'Sampah',
            'emphs' => 'Daftar Seluruh Pesan Dibuang',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'Messenger', 'Trahsed']; //add as much array item as needed
        return view('v2.messenger.inbox', compact('pagedata'), ['breadcrumb' => $breadcrumbs]);
    }

    public function create()
    {
        $pagedata = array(
            'controller' => 'Messenger',
            'pagetitles' => 'New',
            'subtitles' => 'Message',
            'emphs' => 'Buat Pesan Baru',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'Messenger', 'New Message']; //add as much array item as needed
        return view('v2.messenger.create', compact('pagedata'), ['breadcrumb' => $breadcrumbs]);
    }

    public function read()
    {
        $pagedata = array(
            'controller' => 'Messenger',
            'pagetitles' => 'Pesan',
            'subtitles' => 'Masuk',
            'emphs' => 'Baca Pesan',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'Messenger', 'Read']; //add as much array item as needed
        return view('v2.messenger.read', compact('pagedata'), ['breadcrumb' => $breadcrumbs]);
    }
}
