<?php

namespace App\Http\Controllers\RestContoller;

use App\Http\Controllers\Controller;
use App\Models\CargoTransit;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminRestController extends Controller
{

    public function userLogin(Request $request){
        $fields  = $request->validate([
           'email'=>'required|string',
            'password' => 'required|string'
        ]);
        $user = User::where('email',$fields['email'])->first();

        if(!$user || !Hash::check($fields['password'], $user->password)) {
            return response([
                'message' => 'Bad creds'
            ], 401);
        }
        $response = [
            'user' => $user
        ];
        return response($response,201);
    }

    public function logout() {
        auth()->logout();
        return [
            'message' => 'Logged out'
        ];
    }


    public function usersAPI(){
        return User::all();
    }

    public function usersFindById($id){
        return User::find($id);
    }

    public function usersFindByName($name){
        return User::where('name',$name)->get();
    }

    public function cargoList(){
        return CargoTransit::all();
    }

    public function searchCargoByTrackNumber($track_number){
        return CargoTransit::where('cargo_track_number',$track_number)->get();
    }

    //
}
