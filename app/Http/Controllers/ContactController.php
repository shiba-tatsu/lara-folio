<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ContactController extends Controller
{
    public function confirm(Request $request){
        $contact = new Contact($request->all());
        return view('contacts.confirm', compact('contact'));
    }
    
    public function complete(Request $request){
        
        Contact::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'body' => $request->input('body'),
        ]);

        return redirect('/contact');
        //->with('flash_message', 'お問い合わせの送信に成功しました。');
    }
}
