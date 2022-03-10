<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TeamMember;
use App\Models\TeamSkill;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class TeamSkillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $team_skill = TeamSkill::where('ts_status', 1)->orderBy('ts_id', 'DESC')->get();
        return view('admin.teammember.teamskill.index', compact('team_skill'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $teams = TeamMember::where('team_status', 1)->orderBy('team_id', 'DESC')->get();
        return view('admin.teammember.teamskill.create', compact('teams'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'ts_name' => 'required',
            'ts_range' => 'required',
            'team_id' => 'required',
        ]);

        $slug = "TS" . uniqid();
        $creator = Auth::user()->id;

        // Store Data On Team-Skill
        $insert = TeamSkill::insertGetId([
            'ts_name' => $request['ts_name'],
            'ts_range' => $request['ts_range'],
            'team_id' => $request['team_id'],
            'ts_order' => $request['ts_order'],
            'ts_creator' => $creator,
            'ts_slug' => $slug,
            'ts_status' => 1,
            'created_at' => Carbon::now()->toDateTimeString()
        ]);

        // Notification
        if ($insert) {
            Session::flash('success', 'Team Skill Created successfully');
            return redirect()->back();
        } else {
            Session::flash('error', 'Team Skill Created Failed!');
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
