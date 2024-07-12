<?php

namespace App\Http\Controllers;

use App\Models\Warehouse;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $items = Warehouse::count();
        $itemSum = Warehouse::sum('quantity');
        return view('pages.home', ['warehouse' => $items, 'warehouse_sum' => $itemSum]);
    }
}
