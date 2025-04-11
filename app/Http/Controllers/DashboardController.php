<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        /** @var Guard $auth */
        $auth = auth();
        if ($auth->user()->role == "admin") {
            return view('admin.dashboard');
        } else {
            return view('kasir.dashboard');
        }
    }
}
