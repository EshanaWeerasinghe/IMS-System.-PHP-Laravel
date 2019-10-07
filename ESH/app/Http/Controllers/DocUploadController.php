<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use validator;
use Redirect;
use App\Academic;
use App\Program;
use App\Level;
use App\shift;
use App\Time;
use App\Batch;
use App\Group;
use App\MyClass;
use App\Student;
use App\Status;
use App\FileUpload;
use File;
use Input;

use Storage;
use DB;
class DocUploadController extends Controller
   {
       public function __construct() {
       $this->middleware('web');
   }
   
   public function getupload()
   {     
       $programs = Program::all();
       $shift = shift::all();
       $time = Time::all();
       $batch = Batch::all();
       $group = Group::all();
       $academics = Academic::orderBy('academic_id','DESC')->get();
       $student_id= Student::max('student_id');
       return view('Upload.DocUpload',compact('programs','academics','shift','time','batch','group','student_id'));      
    }
    
    public function insertFile(){
        $filetitle = Input::get('file_title');
        $file = Input::file('filenam');
        
        echo $filetitle;
        echo $file;
        
//        $rules = array(
//            'file_title' => 'required',
//            'filenam'    => 'required|max:10000|mimes:doc,docx,pdf,jpeg,png,jpg',
//        );
//        
//        $validator = validator::make(Input::all(),$rules);
//        
//        if ($validator->fails()){
//            $messages=$validator->messages();
//            
//            return Redirect::to('uploadfile')->withErrors(
//                    $validator);
//        } elseif ($validator->passes()) {
//            echo "success validator";
        
    }
        
              
}