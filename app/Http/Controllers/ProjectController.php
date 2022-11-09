<?php
namespace App\Http\Controllers;

use App\Http\Requests\StoreProjectRequest;
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

    public function store(StoreProjectRequest $request)
    {
       
        $validate_inputs = $request->validated();
      
        // check if the request upload an image;
        if ( $request->has('project_images')) {
            foreach ($request->file('project_images') as $project_image) {
                $imgName = $project_image->hashName();
                return $imgName;
            }
        }
        // return the user to the previous page if there is no image upload
        return redirect()->back()->withErrors(['no_images' => 'Please upload a project image']);
    }
}
