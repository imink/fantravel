<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Contact;
use \Validator;
use \Mail;



class ContactController extends Controller
{
    // const EMAIL = 'dave_liuyao@163.com';
    const EMAIL = 'sunshine1029cn@163.com';

    public function getContact() {
   	    return view('contact');
    }

    public function postContact(Request $request) {
    	$this->validate($request, [
    			'name' => 'required',
    			'phone' => 'required|numeric'
    	]);
    	$input = $request->all();


    	Mail::send('mailTemplate', $input, function($message) use($input){
            $message->from('fraportapp@163.com', 'FanTravel');
    		$message->to(self::EMAIL, $input['name'])->subject('新登记表 '.date('Y-m-d H:i:s'));
    	});

    	$contact = new Contact;
    	$contact->name = $request->name;
    	$contact->gender = $request->gender;
    	$contact->phone = $request->phone;
    	$contact->wechat = $request->wechat;
    	$contact->destination = $request->destination;
    	$contact->duration = $request->duration;
    	$contact->people = $request->people;
    	$contact->others = $request->others;

    	$contact->save();	

    	return redirect('contact')->with('success', '登记单收录成功');
    }
}
