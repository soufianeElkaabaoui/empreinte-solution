<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::paginate(5);
        $services = Service::all();
        return view('admin.projects', compact('projects', 'services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'project_type' => 'required|numeric',
        ]);
        // check if the file exist && there were no problems uploading the file:
        if ($request->hasFile('image_url') && $request->file('image_url')->isValid()) {
            if ($serivce = Service::find($request->project_type)) {
                $path = $request->file('image_url')->store('images'); // upload the image.
                $project = new Project;
                $project->name = $request->project_name;
                $project->company_client = $request->project_owner;
                $project->image_url = $path;
                $serivce->projects()->save($project);
                return back()->with('status', 'Bien ajoutée.');
            }else {
                return back()->with('status', 'Le service est introuvable.');
            }
        }
        return back()->with('status', 'Probléme du serveur');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        $validated = $request->validate([
            'project_type' => 'required|numeric',
        ]);
        // check if the file exist && there were no problems uploading the file:
        if ($request->hasFile('image_url') && $request->file('image_url')->isValid()) {
            Storage::delete($project->image_url);
            $path = $request->file('image_url')->store('images'); // upload the image.
            $project->image_url = $path;
        }
        if ($serivce = Service::find($request->project_type)) {
            $project->name = $request->project_name;
            $project->company_client = $request->project_owner;
            $serivce->projects()->save($project);
            $project->save();
            return back()->with('status', 'Bien modifié.');
        } else {
            return back()->with('status', 'Le service est introuvable.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        Storage::delete($project->image_url);
        $project->delete();
        return back()->with('status', 'Bien supprimé.');
    }
}
