<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCompanyProfileRequest;
use App\Models\CompanyProfile;
use App\Models\Profile;
use App\Models\User;
use App\Services\PictureServices;
use Illuminate\Http\Request;

class CompleteCompanyProfileController extends Controller
{
    public function show()
    {
        $viewData = [];
        $viewData['company_name'] =  auth()->user()->fullname;
        $viewData['company_email'] =  auth()->user()->email;
        return view('company.completeprofile')->with('viewData', $viewData);
    }

    public function store(StoreCompanyProfileRequest $request)
    {
         $validatedInput = $request->validated();
        

        if ($request->hasFile('company_profile_picture')) {
            if ($request->file('company_profile_picture')->isValid()) {
               $ImgName =  (new PictureServices())->moveImg($validatedInput['company_profile_picture'],public_path('img/company/profile'));
            //    return $ImgName;
            }
        }

        $companyProfile = new CompanyProfile();
        $companyProfile->postal_address = $validatedInput['postal_addres'];
        $companyProfile->location = $validatedInput['location'];
        $companyProfile->telephone_1 = $validatedInput['mobile_number'];
        $companyProfile->telephone_1 = $validatedInput['mobile_number1'];
        $companyProfile->contact_person = $validatedInput['contact_person'];
        $companyProfile->company_url = $validatedInput['company_website'];
        $companyProfile->corperate_email = $validatedInput['comperate_email'];
        $companyProfile->company_services = $validatedInput['company_services'];
        $companyProfile->type_of_businesss = $validatedInput['business_type'];
        $companyProfile->permanent_workers = $validatedInput['numberofworkers'];

        // $companyProfile->years_in_business = $validatedInput['postal_addres'];

        $companyProfile->working_days = $validatedInput['working_day'];
        $companyProfile->year_established = $validatedInput['est_year'];
        $companyProfile->company_size = $validatedInput['company_size'];


        // $companyProfile->license_img_path = $validatedInput['postal_addres'];
        // $companyProfile->certificate_img_path = $validatedInput['postal_addres'];
        // $companyProfile->opening_closing_time = $validatedInput['postal_addres'];
        // $companyProfile->summary_business_activities = $validatedInput['postal_addres'];
        // $companyProfile->company_size = $validatedInput['postal_addres'];
        $companyProfile->save();


        //USER ID
        $usertable = User::findOrFail(auth()->id());
        $usertable->profile_id = $companyProfile->id;
        $usertable->save();

        //PROFILE ID
        $profile_table = new Profile(); 
        $profile_table->user_id = auth()->id(); 
        $profile_table->company_id  = $companyProfile->id;
        $profile_table->save();
        
        $companyProfile->user_id = $companyProfile->id;
        $companyProfile->profile_id = $profile_table->id;
        $companyProfile->save();
        
        return redirect()->route('dashboard');
    }
}
