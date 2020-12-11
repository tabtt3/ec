<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function show(int $id)
    {
        $item = Item::findOrFail($id);

        return view('items.show')->with([
            'item' => $item
        ]);
    }
}
