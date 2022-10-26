<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use LaravelDaily\LaravelCharts\Classes\LaravelChart;
use App\Models\Assets;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redis;

class AssetController extends Controller
{
    public function index()
    {
        $pagedata = array(
            'controller' => 'Assets Management',
            'pagetitles' => 'Assets',
            'subtitles' => 'List',
            'emphs' => 'Short brief for this page',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['App Name', 'Asset', 'Assets List']; //add as much array item as needed;
        $assets = Assets::all();
        return view('admin.asset.index', compact('pagedata', 'assets'), ['breadcrumb' => $breadcrumbs]);
    }

    public function add()
    {
        $pagedata = array(
            'controller' => 'Assets Management',
            'pagetitles' => 'Create New',
            'subtitles' => 'Asset',
            'emphs' => 'Short brief for this page',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['App Name', 'Asset', 'Create']; //add as much array item as needed
        return view('admin.asset.add', compact('pagedata'), ['breadcrumb' => $breadcrumbs]);
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'inventnum' => 'required',
            'item' => 'required',
            'category' => 'required'
        ]);
        Assets::create([
            'inventnum' => $request->inventnum,
            'item' => $request->item,
            'category' => $request->category
        ]);
        return redirect('/asset');
    }
    public function edit($id)
    {
        $assets = Assets::find($id);
        $pagedata = array(
            'controller' => 'Assets Management',
            'pagetitles' => 'Edit',
            'subtitles' => 'Asset',
            'emphs' => 'Short brief for this page',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['App Name', 'Asset', 'Create']; //add as much array item as needed
        return view('admin.asset.edit', compact('pagedata', 'assets'), ['breadcrumb' => $breadcrumbs]);
    }

    public function update($id, Request $request)
    {
        $this->validate($request, [
            'inventnum' => 'required',
            'item' => 'required',
            'category' => 'required'
        ]);

        $assets = Assets::find($id);
        $assets->inventnum = $request->inventnum;
        $assets->item = $request->item;
        $assets->category = $request->category;
        $assets->condition = $request->condition;
        $assets->location = $request->location;
        $assets->img = $request->img;
        $assets->desc = $request->desc;
        $assets->comments = $request->comments;
        $assets->save();
        return redirect('/asset');
    }
}
