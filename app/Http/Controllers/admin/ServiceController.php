<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::paginate(5);
        return view('admin.service', compact('services'));
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
            $service = new Service;
            $service->name = $request->service_name;
            $service->image_url = $path;
            $service->description = $request->service_description;
            $service->save();
            return back()->with('status', 'Bien ajoutée.');
        }
        return back()->with('status', 'Probléme du serveur');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $masterService)
    {
        // check if the file exist && there were no problems uploading the file:
        if ($request->hasFile('image_url') && $request->file('image_url')->isValid()) {
            Storage::delete($masterService->image_url);
            $path = $request->file('image_url')->store('images'); // upload the image.
            $masterService->image_url = $path;
        }
        $masterService->name = $request->service_name;
        $masterService->description = $request->service_description;
        $masterService->save();
        return back()->with('status', 'Bien ajoutée.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        //
    }
}
