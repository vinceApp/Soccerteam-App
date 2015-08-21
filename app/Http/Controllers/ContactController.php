<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Http\Controllers;

use Mail;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller {

    public function getForm()
	{
		return view('contact');
	}

	public function postForm(ContactRequest $request)
	{
		Mail::send('emails.contact', $request->all(), function($message) 
		{
			$message->to('vincent.rollot@gmail.com')->subject('Contact');
		});

		return view('confirm');
	}
}