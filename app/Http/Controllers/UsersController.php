<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{

    public function getInfos()
    {
		return view('infos');
	}

	public function postInfos(Request $request)
	{
		return 'Le nom est ' . $request->input('nom'); 
	}

}