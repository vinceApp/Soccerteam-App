<?php 

namespace App\Http\Controllers;

use App\Http\Requests\ImageRequest;
use App\Gestion\PhotoGestion;

class PhotoController extends Controller {

    public function getForm()
	{
		return view('photo');
	}

	public function postForm(
		ImageRequest $request,
		PhotoGestion $photogestion)
	{

		if($photogestion->save($request->file('image'))) {
			return view('photo_ok');
		} 
		return redirect('photo/form')
			->with('error','Désolé mais votre image ne peut pas être envoyée !');
	
	}

}