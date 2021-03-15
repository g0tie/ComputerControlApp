<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Computer;
use App\Models\Attribution;
use App\Models\User;
use Response;

class AttributionController extends Controller
{
    public function index()
    {
        $available_computers = Computer::where('isOccupied', 0)->get();
        $available_users = User::where('hasComputer', 0)->get();
        $attributions = Attribution::all();
        $menu_attributions = TRUE;
        $remaped_attributions = [];

        foreach($attributions as $attribution) {
            $username = '';
            $computername = ''; 

            foreach($available_users as $user) {
                $username = $attribution->getUser($attribution->user_id)->firstname;
            }

            foreach($available_computers as $computer) {
               $computername = $attribution->getCOmputer($attribution->computer_id)->firstname ?? '';
            }
            
            $temp = [
                'id' => $attribution->id,
                'username' => $username,
                'computername' => $computername,
                'starting_date' => $attribution->starting_date,
                'expiration_date' => $attribution->expiration_date
            ];
        
            array_push($remaped_attributions, $temp);
        }
        
        return view('admin.attributions.index', compact(
            'available_computers', 
            'available_users',
            'remaped_attributions',
            'menu_attributions'
        ));
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|numeric',
            'computer_id' => 'required|numeric',
            'starting_date' => 'required|date',
            'expiration_date' => 'required|date'
        ]);

        $attribution = Attribution::create([
            'user_id' => $request->user_id,
            'computer_id' => $request->computer_id,
            'starting_date' => $request->starting_date,
            'expiration_date' => $request->expiration_date
        ]);

        $attribution->save();

        $user = $attribution->getUser($request->user_id)->update([
            'hasComputer'=> 1,
        ]);

        $computer = $attribution->getComputer($request->computer_id)->update([
            'isOccupied'=> 1,
        ]);

        return redirect('/attributions')->with('status', 'Nouvelle attribution créée');
    }

    public function destroy($id)
    {
        $attribution = Attribution::find($id);

        $user = $attribution->getUser($attribution->user_id)->update([
            'hasComputer'=> 0,
        ]);

        $computer = $attribution->getComputer($attribution->computer_id)->update([
            'isOccupied'=> 0,
        ]);
       
        $attribution->delete();

        return redirect('/attributions')->with('status', 'L\'attribution ' . $attribution->id . ' a été supprimée');
    }
}
