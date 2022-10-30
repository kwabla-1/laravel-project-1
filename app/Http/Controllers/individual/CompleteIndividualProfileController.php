<?php

namespace App\Http\Controllers\Individual;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreIndividualProfileInforRequest;
use App\Models\IndividualProfile;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CompleteIndividualProfileController extends Controller
{
    public function show()
    {
        $viewData = [];
        $viewData['fullname'] = auth()->user()->fullname;
        $viewData['user_email'] = auth()->user()->email;
        return view('auth.individual.register')->with('viewData',$viewData);
    }

    public function store(StoreIndividualProfileInforRequest $request)
    {
        //retrive the validate request

        // return $request->validated();
        $validated_input = $request->validated();
       $profileImgName = null;
       $certName = null;
       

        if ($request->hasFile('profile_picture') && $request->file('profile_picture')->isValid()) {
            $profileImgName = $request->file('profile_picture')->hashName();
            $request->file('profile_picture')->move(public_path('images/individual/profile'), $profileImgName);
            // Storage::disk('public')->put($imgName,file_get_contents($request->file('image')->getRealPath()));
        }

        if ($request->hasFile('cert1') && $request->file('cert1')->isValid()) {
            $certName = $request->file('cert1')->hashName();
            $request->file('cert1')->move(public_path('img/individual/certs'), $certName);
            // Storage::disk('public')->put($imgName,file_get_contents($request->file('image')->getRealPath()));
        }

        $individualProfile = new IndividualProfile();
        // $individualProfile->fullname = auth()->user()->fullname;
        $individualProfile->mobile_number = $validated_input['mobile1'];
        $individualProfile->mobile_number1 = $validated_input['mobile2'];
        $individualProfile->date_of_birth = $validated_input['date_of_birth'];
        $individualProfile->profile_picture = $profileImgName;
        $individualProfile->about_me = $validated_input['myself'];
        $individualProfile->country = $validated_input['country'];
        $individualProfile->location = $validated_input['location'];
        $individualProfile->address = $validated_input['address'];
        // $individualProfile->city = $validated_input['country'];
        $individualProfile->school_name = $validated_input['school_name'];
        $individualProfile->school_completion_year = $validated_input['completion_name'];
        $individualProfile->profession = $validated_input['profession'];
        $individualProfile->certificates = $certName ? $certName : '';
        $individualProfile->save();
        $individualProfile->id;

        //user
        // $user_table = User::findOrFail(auth()->id());
        // $user_table->profile_id = auth()->id();
        // $user_table->save();

        $profile_table = new Profile();
        $profile_table->user_id = auth()->id();
        $profile_table->individual_id  = $individualProfile->id;
        $profile_table->save();
        $profile_table->id;

        $user_table = User::findOrFail(auth()->id());
        $user_table->profile_id = $profile_table->id;;
        $user_table->save();

        $individualProfile->user_id = $individualProfile->id;;
        $individualProfile->profile_id = $profile_table->id;
        $individualProfile->save();



        //INSERTING THE  INFORMATION INTO THE PROFILE TABLE
        // $profile_table = new Profile();
        // $profile_table->user_id = auth()->id();
        // $profile_table->individual_id  = auth()->id();
        


        
        

        return redirect()->route('dashboard');
    }
}
