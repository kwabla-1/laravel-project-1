<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CompleteCompanyProfileController extends Controller
{
    public function show()
    {
        return view('company.completeprofile');
    }

    public function store(Request $request)
    {
        
        return $request()->all();
    }
}
