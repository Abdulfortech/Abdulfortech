<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {   
        $allProjects = Project::whereNotNull('status')->get()->count();
        $activeProjects = Project::where('status', 'Active')->count();
        $inactiveProjects = Project::where('status', 'Inactive')->count();
        $completeProjects = Project::whereNotNull('status')->where('progress', 'Completed')->count();
        return view('projects', [
            'title' => 'All Projects',
            'allProjects' => $allProjects,
            'activeProjects' => $activeProjects,
            'inactiveProjects' => $inactiveProjects,
            'completeProjects' => $completeProjects,
            'projects' => Project::whereNotNull('status')
            ->orderBy('id', 'desc')
            ->get()
        ]);
    } 

    public function show(Project $project)
    {
        return view('projectShow', [
            'project' => $project
        ]);
    }

    public function newProject()
    {
        return view('projectNew');
    } 

    public function create(Request $request)
    {
        $data = $request->validate([
            'user_id' => ['required'],
            'pname' => ['required', 'min:3'],
            'category' => ['required', 'min:3'],
            'link' => ['required', 'min:4'],
            'progress' => ['required'],
            'status' => ['required'],
            'thumbnail' => ['required'],
            'description' => ['required', 'min:250'],
        ]);
        
        $data['thumbnail'] = $request->file('thumbnail')->store('thumbnails', 'public');
        // dd($data);

        Project::create($data);
        return redirect('/admin/projects')->with('message','Project has been added');
    } 

    public function editProject(Project $project)
    {
        return view('projectEdit', [
            'project' => $project
        ]);
    }

    public function update(Request $request, Project $project)
    {
        $data = $request->validate([
            'user_id' => ['required'],
            'pname' => ['required', 'min:3'],
            'category' => ['required', 'min:3'],
            'link' => ['required', 'min:4'],
            'progress' => ['required'],
            'status' => ['required'],
            'description' => ['required', 'min:250'],
        ]);
        if ($request->hasFile('thumbnail')) {
            $data['thumbnail'] = $request->file('thumbnail')->store('thumbnails', 'public');
        }

        $project->update($data);
        return back()->with('message','Project has been updated');
    } 

    public function ActivateProject(Project $project){
        $data = ([
            'status' => 'Active'
        ]);
        $project->update($data);
        return redirect('/admin/projects')->with('message','Project has been activated');
    }

    public function DeactivateProject(Project $project){
        $data = ([
            'status' => 'Inactive'
        ]);
        $project->update($data);
        return redirect('/admin/projects')->with('message','Project has been deactivated');
    }

    public function DeleteProject(Project $project){
        $project->update(['status' => null]);
        return redirect('/admin/projects')->with('message','Project has been deleted');
    }
}
