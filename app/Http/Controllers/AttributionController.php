<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Computer;
use App\Models\Attribution;
use App\Models\User;

class AttributionController extends Controller
{
    public function index()
    {
        $available_computers = Computer::where('isOccupied', 0)->get();
        $available_users = User::where('hasComputer', 0)->get();
        $attributions = Attribution::all();

        return view('admin.attributions.index', compact('available_computers', 'available_users', 'attributions'));
    }

    public function store(Request $request)
    {
        $user = User::find($request->user_id);
        $computer = Computer::find($request->computer_id);

        $attribution = Attribution::create([
            'user_id' => $request->user_id,
            'computer_id' => $request->computer_id,
            'starting_date' => $request->starting_date,
            'expiration_date' => $request->expiration_date
        ]);

        $user->hasComputer = 1;
        $computer->isOccupied = 1;

        $user->save();
        $computer->save();
        $attribution->save();

        return redirect('/attributions')->with('status', 'New attribution created!');
    }
}
