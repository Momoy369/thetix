<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardTicketController extends Controller
{
    public function index()
    {
        return view('pages.dashboard-tickets');
    }

    public function details()
    {
        return view('pages.dashboard-ticket-details');
    }
}
