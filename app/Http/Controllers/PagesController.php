<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Role;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function table()
    {
        return view('table');
    }

    public function create()
    {
        return view('create', [
            "title" => Item::all()
        ]);
    }

    public function make_role()
    {
        return view('create_role2', [
            "roles" => Role::all(),
            "items" =>Item::all()
        ]);
    }


}
