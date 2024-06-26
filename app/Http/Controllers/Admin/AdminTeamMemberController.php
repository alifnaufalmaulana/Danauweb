<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TeamMember;
use Illuminate\Http\Request;

class AdminTeamMemberController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'position' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Upload image
        $imageName = time().'.'.$request->image->extension();  
        $request->image->move(public_path('images'), $imageName);

        // Save data to database
        $teamMember = new TeamMember();
        $teamMember->name = $request->name;
        $teamMember->position = $request->position;
        $teamMember->image = $imageName;  // Or store the full path if needed
        $teamMember->save();

        return redirect()->route('team.index')
                         ->with('success','Team member added successfully.');
    }
}


