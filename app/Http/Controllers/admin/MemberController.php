<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $members = Member::paginate(5);
        return view('admin.members', compact('members'));
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
            $member = new Member;
            $member->name = $request->member_name;
            $member->image_url = $path;
            $member->status = $request->member_status;
            $member->facebook_url = $request->member_fb_url;
            $member->instagram_url = $request->member_insta_url;
            $member->twitter_url = $request->member_twitter_url;
            $member->linkedin_url = $request->member_linkedin_url;
            $member->save();
            return back()->with('status', 'Bien ajoutée.');
        }
        return back()->with('status','Probléme du serveur');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function show(Member $member)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function edit(Member $member)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Member $member)
    {
        // check if the file exist && there were no problems uploading the file:
        if ($request->hasFile('image_url') && $request->file('image_url')->isValid()) {
            Storage::delete($member->image_url);
            $path = $request->file('image_url')->store('images'); // upload the image.
            $member->image_url = $path;
        }
        $member->name = $request->member_name;
        $member->status = $request->member_status;
        $member->facebook_url = $request->member_fb_url;
        $member->instagram_url = $request->member_insta_url;
        $member->twitter_url = $request->member_twitter_url;
        $member->linkedin_url = $request->member_linkedin_url;
        $member->save();
        return back()->with('status', 'Bien modifié.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function destroy(Member $member)
    {
        Storage::delete($member->image_url);
        $member->delete();
        return back()->with('status', 'Bien supprimé.');
    }
}
