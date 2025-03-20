<?php

namespace App\Http\Controllers;

use App\Models\Items;
use Illuminate\Http\Request;

class ItemsController extends Controller
{
    public function index() {
        $items = Items::all();

        return view('cashbook.index', ["items"=>$items]);
    }
}
