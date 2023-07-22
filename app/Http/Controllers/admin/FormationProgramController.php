<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Formation;
use App\Models\FormationProgram;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class FormationProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $formationPrograms = FormationProgram::paginate(5);
        $formations = Formation::all();
        return view('admin.formation-program', compact('formationPrograms', 'formations'));
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
        $formationProgram = new FormationProgram;
        $formationProgram->name = $request->formation_program_name;
        if (is_array($request->formation_program_titles)) {
            $titles = implode(',', $request->formation_program_titles);
            $formationProgram->titles = $titles;
        }
        if ($formation = Formation::find($request->formation)) {
            $formation->formationPrograms()->save($formationProgram);
        }
        return back()->with('status', 'Bien ajoutée.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FormationProgram  $formationProgram
     * @return \Illuminate\Http\Response
     */
    public function show(FormationProgram $formationProgram)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FormationProgram  $formationProgram
     * @return \Illuminate\Http\Response
     */
    public function edit(FormationProgram $formationProgram)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FormationProgram  $formationProgram
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FormationProgram $formationProgram)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FormationProgram  $formationProgram
     * @return \Illuminate\Http\Response
     */
    public function destroy(FormationProgram $formationProgram)
    {
        //
    }
}
