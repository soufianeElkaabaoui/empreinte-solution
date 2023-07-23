<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Formation;
use App\Models\FormationGallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FormationGalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $formationGalleries = FormationGallery::paginate(5);
        $formations = Formation::all();
        return view('admin.formation-gallery', compact('formationGalleries', 'formations'));
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
            $formationGallery = new FormationGallery;
            $formationGallery->name = $request->formation_gallery_name;
            $formationGallery->image_url = $path;
            $formationGallery->description = $request->formation_gallery_description;
            if ($formation = Formation::find($request->formation)) {
                $formation->formationGalleries()->save($formationGallery);
            }
            return back()->with('status', 'Bien ajoutée.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FormationGallery  $formationGallery
     * @return \Illuminate\Http\Response
     */
    public function show(FormationGallery $formationGallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FormationGallery  $formationGallery
     * @return \Illuminate\Http\Response
     */
    public function edit(FormationGallery $formationGallery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FormationGallery  $formationGallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FormationGallery $formationGallery)
    {
        // check if the file exist && there were no problems uploading the file:
        if ($request->hasFile('image_url') && $request->file('image_url')->isValid()) {
            Storage::delete($formationGallery->image_url);
            $path = $request->file('image_url')->store('images'); // upload the image.
            $formationGallery->image_url = $path;
        }
        $formationGallery->name = $request->formation_program_name;
        $formationGallery->description = $request->formation_gallery_description;
        if ($formation = Formation::find($request->formation)) {
            $formation->formationGalleries()->save($formationGallery);
        }
        return back()->with('status', 'Bien modifiée.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FormationGallery  $formationGallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(FormationGallery $formationGallery)
    {
        $formationGallery->delete();
        return back()->with('status', 'Bien supprimé.');
    }
}
