<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){

        $labs = Admin::all();

        return view('admin.alabsession',compact('labs'));
    }

    public function create(){
        return view('admin.alabsession');
    }

    public function storeLabs(){

        $labs = new Admin();

        $labs->GrpName = request('GrpName');
        $labs->labName = request('labName');
		$labs->days = request('days');
        $labs->venue = request('venue');
		$labs->time = request('time');

        $labs->save();

        return redirect('/alabsession');

    }
}
