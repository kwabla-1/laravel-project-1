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
        //get all projects associated with the login user

        $viewData = [];
        $viewData['user_projects'] = Auth::user()->projects()->exists() ? Auth::user()->projects()->get() : null;

        // return $viewData['user_projects'];

        return view('dashboard.projects')->with("viewData", $viewData);
    }

    public function estimates()
    {
        $viewData = [];
        $viewData['user_estimates'] = DB::table('estimates')->where('user_id','=', auth()->id() )->get();
       
        return view('dashboard.estimates')->with(['viewData' => $viewData]);
    }

    public function invoices()
    {
        return view('dashboard.invoices');
    }
}
