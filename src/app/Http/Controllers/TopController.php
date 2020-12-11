<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class TopController extends Controller
{
    public function index()
    {
        $items = Item::all();

        return view('top')->with([
            'items' => $items
        ]);
    }
}
