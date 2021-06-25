<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function register(){
        return view('user.register');
    }

    function xuliRegister(Request $request){
        $fullName = $request->get('fullname');
        $email = $request->get('email');
        $phone = $request->get('phone');
        $address = $request->get('address');
        $identityCard = $request->get('identityCard');
        return sprintf('Your information is fullname: %s, email: %s,  phone: %s, address: %s, identityCard: %s', $fullName, $email, $phone, $address, $identityCard);
    }

    public function login(Request $request){
        $fullName = $request->get('fullname');
        $email = $request->get('email');
        $phone = $request->get('phone');
        $address = $request->get('address');
        $identityCard = $request->get('identityCard');
        return sprintf('Welcome to admin fullname %s, email %s,  phone %s, address %s, identityCard %s', $fullName, $email, $phone, $address, $identityCard);
    }

    public function getUserDetail($id){
        return 'hello path' . $id;
    }

    public function signup(){
        return view('user.register');
    }

    public function processSignup(Request $request){
        $fullName = $request->get('fullname');
        $email = $request->get('email');
        $phone = $request->get('phone');
        $address = $request->get('address');
        $identityCard = $request->get('identityCard');
        return view('user.register-success') ->with('fullname', $fullName)
         ->with('email', $email)
         ->with('phone', $phone)
        ->with('address', $address)
         ->with('indentityCard', $identityCard);}
}
