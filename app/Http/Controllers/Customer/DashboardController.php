<?php


namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        if (auth()->user()->role !== 'User') {
            abort(403, 'Unauthorized.');
        }

        return view('customer.dashboard');
    }
}
