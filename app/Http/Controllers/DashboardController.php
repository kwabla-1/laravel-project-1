<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function home()
    {
        $viewData = [];
        $viewData["user_type"] = auth()->user()->user_type;
        $viewData["user_name"] = auth()->user()->fullname;
        $viewData["user"] = User::FindOrFail(auth()->id());
        $user_id = auth()->id();

        if (!Auth::user()->profile()->exists()) {
            return view('dashboard.blank')->with('viewData',$viewData);
        }

        if (auth()->user()->user_type !== 'individual') {
            $company_record = DB::table('users')
            ->join('profiles', 'users.id', '=', 'profiles.user_id')
            ->join('company_profiles', 'profiles.id', '=', 'users.id')
            ->where('users.id', '=', $user_id )
            ->select('users.*','company_profiles.*')
            ->get();

            $viewData['user_record'] = $company_record->toArray();
            return view('dashboard')->with("viewData", $viewData);
        }

       
        $user_record = DB::table('users')
        ->join('profiles', 'users.id', '=', 'profiles.user_id')
        ->join('individual_profiles', 'profiles.id', '=', 'users.id')
        ->where('users.id', '=', $user_id )
        ->select('users.*','individual_profiles.*')
        ->get();

        

        $viewData['user_record'] = $user_record->toArray();
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
