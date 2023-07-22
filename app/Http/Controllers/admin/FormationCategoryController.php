<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\FormationCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FormationCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $formationCategories = FormationCategory::paginate(5);
        return view('admin.formation-category', compact('formationCategories'));
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
            $formationCategory = new FormationCategory;
            $formationCategory->name = $request->formation_category_name;
            $formationCategory->image_url = $path;
            $formationCategory->description = $request->formation_category_description;
            $formationCategory->save();
            return back()->with('status', 'Bien ajoutée.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FormationCategory  $formationCategory
     * @return \Illuminate\Http\Response
     */
    public function show(FormationCategory $formationCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FormationCategory  $formationCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(FormationCategory $formationCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FormationCategory  $formationCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FormationCategory $formationCategory)
    {
        // check if the file exist && there were no problems uploading the file:
        if ($request->hasFile('image_url') && $request->file('image_url')->isValid()) {
            Storage::delete($formationCategory->image_url);
            $path = $request->file('image_url')->store('images'); // upload the image.
            $formationCategory->image_url = $path;
        }
        $formationCategory->name = $request->formation_category_name;
        $formationCategory->description = $request->formation_category_description;
        $formationCategory->save();
        return back()->with('status', 'Bien modifiée.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FormationCategory  $formationCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(FormationCategory $formationCategory)
    {
        Storage::delete($formationCategory->image_url);
        $formationCategory->delete();
        return back()->with('status', 'Bien supprimé.');
    }
}
