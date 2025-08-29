<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function Role(Request $request) {
        $user = $request->user();
        $roles = $user->roles;
        return response()->json($roles); 
    }
    
    public function OnlyForAdmin(){
        return 'Admin Only';
    }
    public function OnlyForEditor(){
        return 'Editor Only';
    }
    public function OnlyForAuthor(){
        return 'Author Only';
    }
    
    public function Secret(){
        return 'Secret Only';
    }
}
