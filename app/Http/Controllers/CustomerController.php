<?php

namespace App\Http\Controllers;
use App\Models\Report;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\customer;
use App\Models\User;

use function Laravel\Prompts\password;

class CustomerController extends Controller
{
    
    public function index(Request $request){
        $request->validate([
            'name'=> 'required',
            'email'=> 'required|email',
            'password'=> 'required',
            'password_confirmation'=> 'required|same:password'
        ]);
        $costumer = new customer;
        $costumer ->name = $request['name'];
        $costumer ->email = $request['email'];
        $costumer -> password = md5($request['password']);
        $costumer-> save();
        // return redirect()->back();
    }
    public function help()
    {
        return view('Report');
    }
    public function Report(Request $request){
        $request->validate([
            'reported_device'=> 'required',
            'reported_url'=> 'required',
            'reported_problem'=> 'required',
            'reported_screenshot'=> 'required'
        ]);
        $Report = new Report;
        $Report -> reported_device = $request['reported_device'];
        $Report -> reported_url = $request['reported_url'];
        $Report -> reported_problem = $request['reported_problem'];
        $Report -> reported_screenshot = $request['reported_screenshot'];
        $Report-> save();   
        echo "<pre>";
            print_r($request->all());

        
      
    }

    function Login(Request $req)
    {
        $costumer= customer::where(['email'=>$req->email])->first();
       // dd(Hash::check($req->password,$costumer->password));
        if( !$costumer || (md5($req->password) !=$costumer->password)){
            return "Username OR Password is Wrong";
        }
        else{
            $req->session()->put('customers',$costumer);
            return redirect('welcome');
        }
    } 

    //for report from user
    
}