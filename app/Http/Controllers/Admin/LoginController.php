<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class LoginController extends Controller
{
    //Function : afficher le view de login
    public function show_login_view(){
        return view('admin.auth.login');
        }
     //Function : tester la validité des chams a saisie   
    public function login(LoginRequest $request){
        if(auth()->guard('admin')->attempt(['username'=>$request->input('username'),'password'=>$request->input('password')]))
        {
        return redirect()->route('admin.dashboard'); 
        }else{
             
        return redirect()->route('admin.showlogin')->with(['error' => 'Desolé, vos cordonnées ne sont pas juste!!']);; 
         }
         }

     public function logout(){
            auth()->logout();
            return redirect()->route('admin.showlogin');
            }
            
         //function add admin , apres taper: php artisan tinker

         /*function make_new_admin(){
            $admin=new App\Models\Admin();
            $admin->name='admin';
            $admin->email='test@gmail.com';
            $admin->username='admin';
            $admin->password=bcrypt("admin");
            $admin->com_code=1;
            $admin->save();
         }*/
}
