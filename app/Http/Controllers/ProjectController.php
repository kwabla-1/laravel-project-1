<?php
namespace App\Http\Controllers;

use App\Http\Requests\StoreProjectRequest;
use App\Models\Project;
use App\Models\ProjectsImages;
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

    public function viewProject(User $user, Project $project)
    {
        return $project;
    }

    public function editProject(Project $project)
    {
        return $project;
    }

    public function store(StoreProjectRequest $request)
    {
       
        $validate_inputs = $request->validated();
        // initialized a new Project 
        $project = new Project();
        $project->project_name = $validate_inputs['project_name'];
        $project->user_id = auth()->id();
        $project->start_date = $validate_inputs['start_date'];
        $project->end_date = $validate_inputs['end_date'];
        $project->project_description = $validate_inputs['project_description'];
        // $project->comments = $validate_inputs['comments'];
        $project->location = $validate_inputs['project_location'];
        $project->client_name = $validate_inputs['client_name'];
        $project->project_size = $validate_inputs['project_size'];
        $project->save();
        //current project id
     

        // //forign key check
        // $project->projects_images_id = $validate_inputs['projects_images_id'];

      
        // check if the request upload an image;
        // return $request->all();

       

        if ( $request->hasFile('project_images')) {
            foreach ($request->file('project_images') as $project_image) {
                $image_path = $project_image->store('projects');

                $projectImages = new ProjectsImages();
                $projectImages->project_id = $project->id;
                $projectImages->image_name = $image_path;
                $projectImages->save();

                $project_table = Project::findOrFail(auth()->id());
                $project_table->projects_images_id = $projectImages->id;
                $project_table->save();

            }
        }
        return redirect()->route('projects');

        // return redirect()
        //     ->back()
        //     ->withErrors(['no_images' => 'You must have an image to processed']);
    }
}
