<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use session;

class NotificationController extends Controller
{
    public function index()
    {
        return view('admin.notification.index');
    }

    public function success()
    {
        session()->flash('success', 'Data Successfully Saved/Changed');
        return redirect('/notification');
    }
}
