<?php

namespace App\Http\Controllers;
use Redirect;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator; 
use Auth;



class LoginController extends Controller 
{
    public function formulaire(){
        return view('Maquette connexion.connexion');
    }

    public function traitement(Request $request){


        $this->validate($request,[
            'email' => 'required'|'email',
            'password' => 'required',
            
        ]);

        $user_data=array(
            'email' => $request->get('MailLog'), 
            'password' => $request->get('password'),
            

        );
        

        if(filter_var($user_data['email'], FILTER_VALIDATE_EMAIL)) {
            //user sent their email 
            
            if(Auth::guard('real')->attempt(['email' => $request->get('MailLog'), 'password' => $request->get('password')])){
            return view("maquette landing_rea.landing_rea");
        
                }
            
            
            if(Auth::guard('porteur')->attempt(['email' => $request->get('MailLog'), 'password' => $request->get('password')])){
                    return view("maquette landing_porteur.landing_por");
                }
            else{
                return redirect()->route('connect')->withErrors(['ErreurLogin' => 'Login ou mot de passe incorrecte']);
            }
            
        } else{
            //they sent their username instead 
            if(Auth::guard('real')->attempt(['Login' => $request->get('MailLog'), 'password'=>$request->get('password')])){
            return view("maquette landing_rea.landing_rea");
            }
            if(Auth::guard('porteur')->attempt(['Login' => $request->get('MailLog'), 'password' => $request->get('password')])){
                return view("maquette landing_porteur.landing_por");
            }
            else{
                return redirect()->route('connect')->withErrors(['ErreurLogin' => 'Login ou mot de passe incorrecte']);
            }
        }

       
        

       
        
    }

}

