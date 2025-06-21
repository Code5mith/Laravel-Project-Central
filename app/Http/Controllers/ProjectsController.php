<?php

namespace App\Http\Controllers;

use App\Jobs\LogProjectCreate;
use App\Jobs\LogProjectDelete;
use App\Jobs\LogProjectUpdate;
use App\Models\Project;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Mail;
class ProjectsController extends Controller
{
    public function create()
    {
        return view("projects.create");
    }
    public function store()
    {

        // // if logged in inline authorization  **refactored 
        // if (Auth::guest()){
        //     redirect("/login");
        // }

        // form data validation 

        request()->validate([
            "name" => ["required", "min:3", "max:255"],
            "budget" => ["max:100"],
            "description" => ["required", "max:500"]
        ]);

        $project = Project::create([
            "user_id" => Auth::user()->id,
            "name" => request("name"),
            "description" => request("description"),
            "status" => request("status") != null ? request("status") : "not specified",
            "budget" => request('budget')
        ]);

        // dispatch log
        LogProjectCreate::dispatch($project);

        return redirect("/projects");
    }
    public function index()
    {
        // $projects = Project::latest()->paginate(6);

        // fix: order from latest to oldest
        $projects = Auth::user()->project;

        return view("projects.index", ["projects" => $projects]);

    }
    public function show(Project $project)
    {
        // $project = Project::find($id); route model binding auto resolve model instance

        // $backlog_items = $project->backlogItem; deperciated 

        return view('projects.show', ["project" => $project]);

    }

    public function edit($id)
    {

        // inline auth  **refactored middlewares
        // if(Auth::guest()){
        //     redirect("/login");
        // }

        // is user authorized to edit resource : **refactored Gates
        // if(Project::find($id)->user->isNot(Auth::user())){
        //     abort(403); //forbidden
        // }

        // Gate::define("project-owner", function (User $user, Project $project): bool{ This logic is identical to the logic above
        //     return $project->user->is($user);
        // });

        $project = Project::findOrFail($id);

        Gate::authorize("project-owner", $project); // run gate logic on project resource

        return view("projects.edit", ["project" => $project]);
    }
    public function update(Project $project)
    {

        // form data validation 
        request()->validate([
            "name" => ["required", "max:255"], // field is Unique 
            "description" => ["required", "max:500"],
            "budget" => ["max:100"]
        ]);

        // update
        $project->update([
            "name" => request("name"),
            "description" => request("description"),
            "budget" => request("budget"),
            "status" => request("status") != null ? request("status") : $project->status
        ]);

        LogProjectUpdate::dispatch($project);

        return redirect("/project/" . $project->id);

    }

    public function destroy(Project $project)
    {
        //auth


        logger($project->user->email . "  deteled project :" . $project->id);

        $project->delete();

        //    LogProjectDelete::dispatch($project); project can be null **deleted

        return redirect("/projects");
    }

}
