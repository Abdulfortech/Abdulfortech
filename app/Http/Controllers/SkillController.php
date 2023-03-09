<?php

namespace App\Http\Controllers;

use App\Models\Skills;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    //

    public function index()
    {
        return view('skills', [
            'title' => 'All Skills',
            'skills' => Skills::whereNotNull('status')
            ->orderBy('skill_id', 'asc')
            ->get()
        ]);
    }

    public function addSkill(Request $request)
    {
        $data = $request->validate([
            'user_id' => ['required'],
            'title' => ['required', 'min:3'],
            'status' => ['required'],
        ]);

        Skills::create($data);
        return redirect('/admin/skills')->with('message','Skill has been added');
    } 

    public function ActivateSkill(Request $request){
        $data = $request->validate([
            'skill_id' => ['required'],
            'title' => ['required', 'min:3'],
            'status' => ['required'],
        ]);
        // dd($data);
        Skills::where('skill_id', $data['skill_id'])->update($data);
        return redirect('/admin/skills')->with('message','Skill has been updated');
    }

    public function DeleteSkill(Request $request){
        $data = $request->validate([
            'skill_id' => ['required'],
        ]);
        // dd($data);
        Skills::where('skill_id', $data['skill_id'])->update(['status' => null]);
        return redirect('/admin/skills')->with('message','Skill has been updated');
    }
}
