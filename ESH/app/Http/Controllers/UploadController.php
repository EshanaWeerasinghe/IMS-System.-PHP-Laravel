<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;
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
use Illuminate\Support\Facades\Input;
use App\FileModel;

use Storage;
use DB;
class UploadController extends Controller
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
        $file=Input::file('filenam');       
      //  echo $filetitle;
       // echo $file;
 
        $rules = array(
            'file_title' => 'required',
            'filenam' => 'required|max:10000|mimes:doc,docx,
            jpeg,png,jpg,pdf'
        );
       
        $validator = Validator::make(Input::all(), $rules)
                ;       
        if ($validator->fails()) {
            $messages=$validator->messages();
            
            return Redirect::to('manage/Upload')->withInput()-> withErrors($validator);
        
        } 
        else if($validator->passes()){
           // echo "success validator";           
            //check file is valid.
            if(Input::file('filenam')->isValid()){
                
                $extension = Input::file('filenam')->
                        getClientOriginalExtension();
                $filename = $filetitle.'.'.$extension;
                
                $destinationPath = 'upload_file';
                $file->move($destinationPath, $filename);
                
                $data=array(
                    'file_title' => $filetitle,
                    'file_name' => $filename
                );


                FileModel::insert($data);
                
                $notification = array(
                    'message' => 'File Uploaded Successfuly!',
                    'alert-type' => 'success'
                );
                
                return Redirect::to('manage/Upload') ->with($notification);
                
            } else {
               $notification = array(
                    'message' => 'File is not valid!',
                    'alert-type' => 'error'
                );
                                    
                return Redirect::to('manage/Upload') ->with($notification);
            }
        }
        
    }
    
   }
   
        