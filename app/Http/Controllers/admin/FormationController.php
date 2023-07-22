<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Formation;
use App\Models\FormationCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FormationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $formations = Formation::paginate(5);
        $formationCategories = FormationCategory::all();
        return view('admin.formation', compact('formations', 'formationCategories'));
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
        // check if the file exist && there were no problems uploading the file:
        if ($request->hasFile('image_url') && $request->file('image_url')->isValid()) {
            $path = $request->file('image_url')->store('images'); // upload the image.
            $formation = new Formation;
            $formation->name = $request->formation_name;
            $formation->image_url = $path;
            $formation->description = $request->formation_description;
            if ($formationCategory = FormationCategory::find($request->formation_category)) {
                $formationCategory->formations()->save($formation);
            }
            return back()->with('status', 'Bien ajoutée.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Formation  $formation
     * @return \Illuminate\Http\Response
     */
    public function show(Formation $formation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Formation  $formation
     * @return \Illuminate\Http\Response
     */
    public function edit(Formation $formation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Formation  $formation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Formation $formation)
    {
        // check if the file exist && there were no problems uploading the file:
        if ($request->hasFile('image_url') && $request->file('image_url')->isValid()) {
            Storage::delete($formation->image_url);
            $path = $request->file('image_url')->store('images'); // upload the image.
            $formation->image_url = $path;
        }
        $formation->name = $request->formation_name;
        $formation->description = $request->formation_description;
        if ($formationCategory = FormationCategory::find($request->formation_category)) {
            $formationCategory->formations()->save($formation);
        }
        return back()->with('status', 'Bien modifiée.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Formation  $formation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Formation $formation)
    {
        Storage::delete($formation->image_url);
        $formation->delete();
        return back()->with('status', 'Bien supprimé.');
    }
}
