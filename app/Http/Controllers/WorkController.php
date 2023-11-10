<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Work;
use Illuminate\Http\Request;

class WorkController extends Controller
{
    public function index()
    {
        $defaultUserId = 1; // Replace this with the default user ID you want to use
        $user = User::find($defaultUserId);
        $works = Work::all();
        return view('works.index', compact('works', 'user', 'defaultUserId'));
    }

    public function sendAlert($user_id, Work $work)
    {
        $user = User::findOrFail($user_id);

        // Attach the work to the user
        $user->works()->attach($work);

        return redirect()->route('works.index')->with('success', "Alert sent for User: $user->name and Work: $work->name");
    }

}
