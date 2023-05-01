<?php

namespace App\Http\Controllers;

use App\Models\Apply;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApplyController extends Controller
{
    public function index(Request $request)
    {
        $query = Apply::orderBy('id', 'desc');
        if ($search = $request->query('search')) {
            $query->where(function ($q) use ($search) {
                $q->orWhere('name', 'LIKE', "%{$search}%");
                // ->orWhere('position', 'LIKE', "%{$search}%")
                // ->orWhere('type', 'LIKE', "%{$search}%");
            });
        }
        $applys = $query->paginate(5);
        return view('apply.index', compact('applys'));
    }

    public function store(Request $request)
    {
        // dd($request);
        // $request->validate([
        //     'name' => 'required',
        //     'phone' => 'required|numeric|digits:8',
        //     'email' => 'required|email',
        //     'path' => 'required',
        //     'jobs_id' => 'required|exists:jobs,id',
        // ]);
        // Apply::create($request->all());
        // return redirect()->route('applys.index')->with('message', "Apply has been added successfuly");
    }
    public function create()
    {
        $Apply = new Apply();
        // $companies = Companie::orderBy('name')->pluck('name', 'id')->prepend('All Companies', '');
        return view('Applys.create', compact('companies', 'Apply'));
    }
    public function update($id, Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'phone' => 'required|numeric|digits:8',
            'email' => 'required|email',
            'adresse' => 'required',
            'company_id' => 'required|exists:companies,id',
        ]);
        $Apply = Apply::findOrFail($id);
        $Apply->update($request->all());
        return redirect()->route('Applys.index')->with('message', "Apply has been updated successfuly");
    }
    public function destroy($id)
    {
        $Apply = Apply::findOrFail($id);
        $Apply->delete();
        return back()->with('message', "Apply has been deleted successfully");
    }
    public function edit($id)
    {
        $Apply = Apply::findOrFail($id);
        // $companies = Companie::orderBy('name')->pluck('name', 'id')->prepend('All Companies', '');
        return view('Applys.create', compact('Apply'));
    }
    public function show($id)
    {
        $Apply = Apply::findOrFail($id);
        return view('Applys.show', compact('Apply'));
    }
}
