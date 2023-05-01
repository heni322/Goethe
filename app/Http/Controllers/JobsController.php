<?php

namespace App\Http\Controllers;

use App\Models\Apply;
use App\Models\Jobs;
use Illuminate\Http\Request;

class JobsController extends Controller
{
    // public function __invoke()
    // {
    //     // logic for handling requests to this controller
    // }
    /**
     * Display a listing of the resource.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $query = Jobs::orderBy('id', 'desc');

        // Check if there's a search term in the URL
        if ($search = $request->query('search')) {
            $query->where(function ($q) use ($search) {
                $q->orWhere('name', 'LIKE', "%{$search}%")
                    ->orWhere('position', 'LIKE', "%{$search}%")
                    ->orWhere('type', 'LIKE', "%{$search}%");
            });
        }

        // Retrieve the jobs with pagination
        $jobs = $query->paginate(5);

        return view('jobs.index', compact('jobs'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jobs.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return response()->json($request->get('dateLine'));

        $request->validate([
            'name' => 'required',
            'position' => 'required',
            'type' => 'required',
            'salary' => 'required',
            'dateLine' => 'required|date_format:Y-m-d|after_or_equal:today',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);
        $image_path = $request->file('image')->store('image', 'public');
        $job = [
            'name' => $request->get('name'),
            'position' => $request->get('position'),
            'type' => $request->get('type'),
            'salary' => $request->get('salary'),
            'dateLine' => $request->get('dateLine'),
            'image' => $image_path,
        ];


        Jobs::create($job);

        return redirect()->route('jobsCrud.index')->with('success', 'jobs has been created successfully.');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Jobs  $jobs
     * @return \Illuminate\Http\Response
     */
    public function show(Jobs $jobs)
    {
        return view('jobs.show', compact('jobs'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Jobs  $jobs
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // dd($jobs);
        $jobs = Jobs::findOrFail($id);
        return view('jobs.edit', compact('jobs'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Jobs  $jobs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jobs $jobs)
    {
        // dd($request);
        $request->validate([
            'name' => 'required',
            'position' => 'required',
            'type' => 'required',
            'salary' => 'required',
            'dateLine' => 'required|date_format:Y-m-d',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);
        $image_path = $request->file('image')->store('image', 'public');
        $job = [
            'name' => $request->get('name'),
            'position' => $request->get('position'),
            'type' => $request->get('type'),
            'salary' => $request->get('salary'),
            'dateLine' => $request->get('dateLine'),
            'image' => $image_path,
        ];
        $jobs->fill($job)->save();

        return redirect()->route('jobsCrud.index')->with('success', 'jobs Has Been updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Jobs  $jobs
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // dd($id);
        $jobs = Jobs::findOrFail($id);
        $applys = Apply::where('jobs_id', $id)->get();
        foreach ($applys as $apply) {
            $apply->delete();
        }
        $jobs->delete();
        return redirect()->route('jobsCrud.index')->with('success', 'jobs has been deleted successfully');
    }
}
