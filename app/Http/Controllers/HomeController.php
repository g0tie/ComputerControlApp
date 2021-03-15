<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Attribution;
use App\Models\User;

class HomeController extends Controller
{

    public function index () {
        $user = Auth::user();
        $attribution = Attribution::where('user_id', $user->id)->first();

       
        $attribution && $computer = $attribution->getComputer($attribution->computer_id);

        if ($user->isAdmin === 1) {
            return redirect('/users');
        }
        
        if ($attribution) {

            return view('dashboard', compact('computer', 'user', "attribution"));
        }


        return view('dashboard', ["error" => "Aucun poste informatique vous a été attribué pour le moment"]);
    }


}
