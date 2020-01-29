<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;

class TeamsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $team = Team::all();
        return view('admin.team.index',compact('team'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.team.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Team $team)
    {
        $team = Team::create($this->validateRequest());

        $this->storeImage($team);
        
        return redirect('/admin/team');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
        return view('admin.team.show',compact('team'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Team $team)
    {
        return view('admin.team.edit',compact('team'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Team $team)
    {
        $team->update($this->validateUpdate());

        $this->storeImage($team);

        return redirect('admin/team');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($team)
    {
        $team->delete();
        return redirect('/admin/team');
    }

    public function validateRequest()
    {
        return request()->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'required',
        ]);
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
