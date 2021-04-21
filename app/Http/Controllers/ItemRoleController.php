<?php

namespace App\Http\Controllers;

use App\Models\RoleItem;
use Illuminate\Http\Request;

class ItemRoleController extends Controller
{
    public function roleItem(Request $request)
    {
        $request->validate([ "role_id" => ["request"],
            "item_id" => ["request"]
        ]);


        RoleItem::create([
            "role_id" => $request->role_id,
            "item_id" => $request->item_id
        ]);

        return redirect()->route('table');
    }
}
