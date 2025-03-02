<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class MainController extends Controller
{
    //


    public function list_users(){
        $users = User::all();
        return view("elements.d_usuario", ["users"=>$users]);
    }

    public function remove_user($user){
        
        User::where("id",$user)->delete();

        return redirect()->back();
    }
    
}
