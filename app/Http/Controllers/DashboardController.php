<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;


class DashboardController extends Controller
{
    public function index () {
        $table = DB::table('test_tables')->get();

        return view('dashboard', compact('table'));
    }
}
