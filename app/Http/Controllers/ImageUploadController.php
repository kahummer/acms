<?php
// Laravel 5.4 Upload Image with Validation example Controllers
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use Cookie;
use App\Incidents;
use Carbon\Carbon;
use Illuminate\Support\Facades\Input;
use Illuminate\Database\Eloquent\Model;
use Collective\Html\Eloquent\FormAccessible;
use Auth;


use Session;
class ImageUploadController extends Controller
{
    /**
    * Create view file
    *
    * @return void
    */
	// display upload-image page 
    public function getUploadImage()
    {    
      $user = Auth::user();
      $myname = $user->name;
      $incidentid=Cookie::get(trim($myname));
     
     
        return view('upload-image');
    }
    /**
    * Manage Post Request
    *
    * @return void
    */
	// get image from upload-image page 
    public function postUplodeImage(Request $request)
    {  
        $incidentid = Input::get('incidentid');
        $this->validate($request, [
			// check validtion for image or file
            'uplode_image_file' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:1000',
        ]);
		// rename image name or file name 
        $getimageName = time().'.'.$request->uplode_image_file->getClientOriginalExtension();
        $done = $request->uplode_image_file->move(public_path('images'), $getimageName);
        if ($done) 
        {
        	$incident = Incidents::whereincidentid($incidentid)->first(); 
        	$incident->image=$getimageName;
        	$incident->save();
   
        }
        return back()
            ->with('success','images Has been You uploaded successfully.')
            ->with('image',$getimageName);
    }
}