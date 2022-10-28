<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

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

    public function password()
    {
        $pagedata = array(
            'controller'    => 'Profiles',
            'pagetitles'    => 'Password',
            'subtitles'     => 'Change',
            'emphs'         => 'Short brief for this page',
            'alerttitle'    => 'Alert/information Title', //make it uppercase
            'alertcontent'  => 'Alert/information should appear in here.',
        );
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = [
            'App Name',
            'Profile',
            'Password',
        ]; //add as much array item as needed;
        return view('admin.profile.password', compact('pagedata'), ['breadcrumb' => $breadcrumbs]);
    }

    //v2 starting form this line
    public function indexv2()
    {
        $pagedata = array(
            'controller' => 'Profile',
            'pagetitles' => 'My',
            'subtitles' => 'Profile',
            'emphs' => 'Data Profile yang telah Anda Buat',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'Profile', 'My Profile']; //add as much array item as needed
        return view('v2.profile.index', compact('pagedata'), ['breadcrumb' => $breadcrumbs]);
    }

    public function editv2($id)
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
        return view('v2.profile.index', compact('pagedata', 'profile'), ['breadcrumb' => $breadcrumbs]);
    }

    public function passwordv2()
    {
        $pagedata = array(
            'controller'    => 'Profiles',
            'pagetitles'    => 'Password',
            'subtitles'     => 'Change',
            'emphs'         => 'Short brief for this page',
            'alerttitle'    => 'Alert/information Title', //make it uppercase
            'alertcontent'  => 'Alert/information should appear in here.',
        );
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = [
            'App Name',
            'Profile',
            'Password',
        ]; //add as much array item as needed;
        return view('v2.profile.password', compact('pagedata'), ['breadcrumb' => $breadcrumbs]);
    }
}
