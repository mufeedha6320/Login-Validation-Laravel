<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;  
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function funHome(){
        return view('welcome');
    }
    public function funLogin(Request $request){

        $credentials = $request->only('name', 'psw'); 

        $user = User::where('UserName', $credentials['name'])
                    ->where('Password', $credentials['psw'])
                    ->first();

        // Compare form data with database data
        if ($user) {
            return view('login');
        }
        else{
            return redirect()->back()->with('err_msg', 'INVALID!'); 
        }
    }

    public function funRegister(){
        return view('register');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:32',
            'psw' => 'required',
            'psw2' => 'required'
        ]); 
        $nameExists = User::where('UserName', $request->input('name'))->exists();
        $users= new User();
        $users->UserName = $request->input('name');
        $users->Password = $request->input('psw');
        

        if(!$nameExists){
            $users->save();
            return redirect()->back()->with('ret_msg', 'Your data stored successfully!');
        }
        else {
            return redirect()->back()->with('err_msg', 'Ooops!! User name already exists!!');   
        }
    }

}
