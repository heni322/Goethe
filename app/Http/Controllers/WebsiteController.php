<?php

namespace App\Http\Controllers;

use App\Models\Apply;
use App\Models\Jobs;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index()
    {
        $jobs = Jobs::all();
        // dd($jobs);
        return view('website.jobs', compact('jobs'));
    }
    // public function loadMore(Request $request)
    // {
    //     $jobs = Jobs::skip($request->input('offset'))->take(5)->get();
    //     if ($jobs->isEmpty()) {
    //         return response()->json(['message' => 'No more jobs to display.']);
    //     }

    //     return view('website.jobs', compact('jobs'));
    // }
    public function loadMoreJobs($offset)
    {
        $jobs = Jobs::orderBy('created_at', 'desc')->offset($offset)->limit(5)->get();

        return view('website.jobs', compact('jobs'));
    }

    public function show($id)
    {
        // Your logic for the show function goes here
    }

    public function create()
    {
        // Your logic for the create function goes here
    }

    public function store(Request $req)
    {
        $req->validate([
            'name' => 'required',
            'phone' => 'required|numeric|digits:8',
            'email' => 'required|email',
            'path' => 'required|mimes:csv,txt,xlx,xls,pdf|max:102400',
            'jobs_id' => 'required|exists:jobs,id',
        ]);
        // return response()->json($req);
        // $file = $request->file('image')->store('image', 'public');
        // $apply = new File;
        $apply = new Apply;
        $fileName = time() . '_' . $req->file('path')->getClientOriginalName();
        $filePath = $req->file('path')->storeAs('uploads', $fileName, 'public');
        $apply->path_name = $req->file('path')->getClientOriginalName();
        $apply->name = $req->get('name');
        $apply->email = $req->get('email');
        $apply->phone = $req->get('phone');
        $apply->jobs_id = $req->get('jobs_id');
        $apply->path = '/storage/' . $filePath;
        $apply->save();
        return redirect()->route('website.jobs')->with('message', "Apply has been added successfuly");
    }

    public function edit($id)
    {
        // Your logic for the edit function goes here
    }
}
