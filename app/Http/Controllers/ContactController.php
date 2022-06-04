<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\Contact;

class ContactController extends Controller
{


    public function ContactPage(){

        return view('frontend.contact');
    
      } // end Method
    
    
      public function StoreMessage(Request $request){
    
        Contact::insert([
    
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'phone' => $request->phone,
            'message' => $request->message, 
            'created_at' => Carbon::now(),
    
        ]);
    
         $notification = array(
            'message' => 'Your Message Submitted Successfully', 
            'alert-type' => 'success'
        );
    
        return redirect()->back()->with($notification);
    
    
      } // end Method
    
    

      public function ContactMessage(){

        $contacts = Contact::latest()->get();
        return view('admin.contact.allcontact',compact('contacts'));

      } // end Method


    public function DeleteMessage($id){

     Contact::findOrFail($id)->delete();

     $notification = array(
            'message' => 'Your Message Deleted Successfully', 
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

      } // end Method

}
