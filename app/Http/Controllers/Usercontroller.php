<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Adminuser;
use Session;
use Validator;
class Usercontroller extends Controller
{
    //
    function login(Request $req)
    {
        $user= User::where(['email'=>$req->email])->first();
       
        if(!$user || !Hash::check($req->password,$user->password))
        {
            return "the email or password does not match";
        }
        else{
          $req->session()->put('user',$user);
           return redirect ('/');
        }
    }

       function adminfunction(Request $req)
       {
        if(Session::has('user')){
            return "you already login from user side , first logout from user side";
        }
        else{
           $user= Adminuser::where(['email'=>$req->email])->first();
        //    return $user->password;
           if(!$user || !Hash::check($req->password,$user->password))
           {
            return "the user email or password does not match";
           
            
        }
           else{
            $req->session()->put('users',$user);
            return redirect ('/addnewitem');
           
       }
        }


}



function registration(Request $req)
{
   $validator=Validator::make($req->all(),[
      
      'password'=>'required|min:4',
      'email'=>'required|max:191',
      'name'=>'required|max:50',
  ]);


    if($validator->fails()){
        return response()->json([
            'status'=>400,
            'errors'=>$validator->messages(),
        ]);
    }
    else{
        $user=new User;
        $user->name=$req->name;
        $user->email=$req->email;
        $user->password=Hash::make($req->password);
        $user->save();
       
        return response()->json([
            'status'=>200,
            'message'=>'User added successfully',
        ]);
    }
   
   }
}