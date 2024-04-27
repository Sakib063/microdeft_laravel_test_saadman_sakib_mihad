<?php

namespace App\Http\Controllers;

use App\Models\Projects;
use App\Http\Requests\StoreProjectsRequest;
use App\Http\Requests\UpdateProjectsRequest;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProjectsRequest $request)
    {
        $data = $request->validate([
            'title' => ['required', 'string'],
            'description' => ['required', 'string'],
            'start_date' => ['required', 'string'],
            'end_date' => ['required', 'string'],

        ]);
        $projects = Projects::create($data);

        return to_route('index')->with('message', 'Project Created');
    }

    /**
     * Display the specified resource.
     */
    public function show(Projects $projects)
    {
        return view('index',['projects'->$projects]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Projects $projects)
    {
        return view('update');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProjectsRequest $request, Projects $projects)
    {
        $data = $request->validate([
            'title' => ['string'],
            'description' => ['string'],
            'start_date' => ['string'],
            'end_date' => ['string'],

        ]);
        $projects = Projects::update($data);

        return to_route('index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Projects $projects)
    {
        $projects->delete();

        return to_route('index');

    }
}
