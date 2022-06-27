<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;
use RealRashid\SweetAlert\Facades\Alert;

class ContactController extends Controller
{
    public function index(){
        
        return view('front.contact');
    }
    public function  sendmail(Request $request){
        $contact = new Contact([
            'name' =>$request->name,
            'address' =>$request->address,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message,
        ]);
        $contact->save();

        $email_to = 'nguyentanquyen2000@gmail.com';
        
            
        
        Mail::send('front.sendmail-contact',compact('contact'),function($message) use ($email_to){
            $message->from($email_to,'Little and Little Contact');
            $message->to($email_to, $email_to);
            $message->subject('Contact');

        });
        
        Alert::success('Success', 'Gửi liên hệ thành công.
        Vui lòng kiên nhẫn đợi phản hồi từ chúng tôi bạn nhé!');
        return view('front.contact');
        

    }
}
