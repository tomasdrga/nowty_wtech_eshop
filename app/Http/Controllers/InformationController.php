<?php

namespace App\Http\Controllers;

use App\Models\Information;
use Illuminate\Http\Request;

class InformationController extends Controller
{
    public function store(Request $request)
    {
        $information = new Information();
        $information->user_id = $request->user_id;
        $information->save();
    }
}
