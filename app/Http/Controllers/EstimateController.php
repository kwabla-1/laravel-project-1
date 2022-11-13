<?php

namespace App\Http\Controllers;

use App\Models\Estimate;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EstimateController extends Controller
{
    public function show()
    {
        
    }

    public function store(Request $request)
    {
        return $request->all();
    }

    public function update(Request $request, Estimate $estimate)
    {
        return null;
    }

    public function delete(Request $request, Estimate $estimate)
    {
        return null;
    }
}
