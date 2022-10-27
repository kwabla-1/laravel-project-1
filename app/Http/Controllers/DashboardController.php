<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function home()
    {
        $viewData = [];
        $viewData["user_type"] = auth()->user()->user_type;
        $viewData["user_name"] = auth()->user()->fullname;

        if (!Auth::user()->profile()->exists()) {
            return view('dashboard.blank')->with('viewData',$viewData);
        }

        $viewData["user"] = User::FindOrFail(auth()->id());
        return view('dashboard')->with("viewData", $viewData);
    }

    public function projects()
    {
        return view('dashboard.projects');
    }

    public function estimates()
    {
       return view('dashboard.estimates');
    }

    public function invoices()
    {
        return view('dashboard.invoices');
    }
}
