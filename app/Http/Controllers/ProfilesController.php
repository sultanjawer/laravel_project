<?php

namespace App\Http\Controllers;

use App\Models\Profiles;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redis;

class ProfilesController extends Controller
{
    public function index()
    {
        $pagedata = array(
            'controller'    => 'Profiles',
            'pagetitles'    => 'My',
            'subtitles'     => 'Profile',
            'emphs'         => 'Short brief for this page',
            'alerttitle'    => 'Alert/information Title', //make it uppercase
            'alertcontent'  => 'Alert/information should appear in here.',
        );
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = [
            'App Name',
            'Profile',
            'My Profile',
        ]; //add as much array item as needed;
        return view('admin.profile.index', compact('pagedata'), ['breadcrumb' => $breadcrumbs]);
    }

    public function edit($id)
    {
        $profile = Profiles::find($id);
        $pagedata = array(
            'controller'    => 'Profiles',
            'pagetitles'    => 'My',
            'subtitles'     => 'Profile',
            'emphs'         => 'Short brief for this page',
            'alerttitle'    => 'Alert/information Title', //make it uppercase
            'alertcontent'  => 'Alert/information should appear in here.',
        );
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = [
            'App Name',
            'Profile',
            'My Profile',
        ]; //add as much array item as needed;
        return view('admin.profile.index', compact('pagedata', 'profile'), ['breadcrumb' => $breadcrumbs]);
    }
}
