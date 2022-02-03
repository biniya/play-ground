<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Team::all();
    }

    public function create()
    {
        return view('teams.create');
    }

    public function addTeam(Request $req) 
    {
        $team = new Team;
        $team->name=$req->name;
        $team->role=$req->role;
        $team->phone_number=$req->phone_number;
        $team->address=$req->address;
        $team->description=$req->description;
        $team->save();
        return redirect('add');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'role' => 'required',
            'phone_number' => 'required',
            'address' => 'required',
            'description' => 'required',
        
        ]);
        return Team::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
       // $team = Team::find($id);
    
        $data = Team::all();
        return view('teams.show', ['teams'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $team = Team::find($id);
        $team -> update($request->all());
        return $team; 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return Team::destroy($id);
    }

        /**
     * Search for a name.
     *
     * @param  str  $name
     * @return \Illuminate\Http\Response
     */
     public function search($address)
     {
         return Team::where('address', 'like', '%'.$address.'%')->get();
     }
}
