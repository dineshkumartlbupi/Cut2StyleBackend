<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        if (auth()->user()->role !== 'Admin') {
            abort(403, 'Unauthorized.');
        }

        return view('admin.dashboard');
    }
}
