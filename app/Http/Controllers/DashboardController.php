<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataFeed;

class DashboardController extends Controller
{
    public function index()
    {
        $dataFeed = new DataFeed();

        return view('pages/dashboard/dashboard', compact('dataFeed'));
    }

    /**
     * Displays the usuarios screen
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function usuarios()
    {
        return view('pages/dashboard/usuarios');
    }

    /**
     * Displays the fintech screen
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function fintech()
    {
        return view('pages/dashboard/fintech');
    }
}
