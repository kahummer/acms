<?php 
namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Validator;
use View;
use Carbon\Carbon;
use Illuminate\Support\Facades\Input;
use Illuminate\Database\Eloquent\Model;
use Collective\Html\Eloquent\FormAccessible;
use Illuminate\Support\Facades\Redirect;
use App\Incidents;
use Auth;
use Session;

class UploadController extends Controller {

	public function index() 
	{
		return view('image.index');
	}

	public function upload(Request $request) {
		$this->validate($request, [
	    	'image' => 'mimes:jpeg,bmp,png,jpg', //only allow this type extension file.
		]);

		$file = $request->file('image');
		// image upload in public/upload folder. 
	    $file->move('uploads', $file->getClientOriginalName()); 
		echo 'Image Uploaded Successfully';
	}
}