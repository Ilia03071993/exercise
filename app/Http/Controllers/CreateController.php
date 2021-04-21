<?php

namespace App\Http\Controllers;

use App\Models\Item;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function item(Request $request)
    {
        $request->validate([
            "title" => ["required", "string"]
        ]);

        Item::create([
            "title" => $request->title
        ]);
        return redirect()->route('table');
    }

}
