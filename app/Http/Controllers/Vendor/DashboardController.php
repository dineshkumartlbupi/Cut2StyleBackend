<?php

namespace App\Http\Controllers\Vendor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        if (auth()->user()->role !== 'Vendor') {
            abort(403, 'Unauthorized.');
        }

        return view('vendor.dashboard');
    }
}
