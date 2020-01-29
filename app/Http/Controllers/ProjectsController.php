<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $project =  Project::all();

        return view('admin.project.index',compact('project'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.project.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $project = Project::create($this->validateRequest());

        $this->storeImage($project);
        
        return redirect('/admin/project');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        return view('admin.project.show',compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        return view('admin.project.edit',compact('project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Project $project)
    {
        
        $project->update($this->validateUpdate());

        $this->storeImage($project);

        return redirect('admin/project');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        $project->delete();
        return redirect('/admin/project');
    }

    public function validateRequest()
    {
        return tap(request()->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'required|file|image',
        ]),
        function (){
            
        }
    );
        
    }

    public function validateUpdate()
    {
        return tap(request()->validate([
            'name' => 'required',
            'description' => 'required',
        ]),
        function (){
            if(request()->hasFile('image')){
                request()->validate([
                    'image'=>'file|image'
                ]);
            }
        });
    }

    public function storeImage($project)
    {
        if(request()->has('image')){
            $project->update([
                'image'=> request()->image->store('uploads','public'),
            ]);
        }
    }
}
