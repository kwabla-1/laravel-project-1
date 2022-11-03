<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function show(User $user)
    {
        $viewData = [];
        $viewData['user'] = $user;
        return view('pages.projects')->with('viewDatea',$viewData);
    }

    public function store(Request $request)
    {
        //
    }
}
