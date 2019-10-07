<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Academic;
use App\Program;
use App\Level;
use App\shift;
use App\Time;
use App\Batch;
use App\Group;
use App\MyClass;
use App\Student;
use DB;
use App\User;
use Excel;
class StudentUploadController extends Controller
{
     public function getStudentist()
    {
       $programs = Program::all();
       $shift = shift::all();
       $time = Time::all();
       $batch = Batch::all();
       $group = Group::all();
       $academics = Academic::orderBy('academic_id','DESC')->get();
       $student_id= Student::max('student_id');
       return view('student.StudentsUpload',compact('programs','academics','shift','time','batch','group'));
    }
       
    
//    
//     public function edit($id)
//    {
//        $passport = \App\Passport::find($id);
//        return view('edit',compact('passport','id'));
//    }
    
    
    
    
    
    
    public function  postStudentUpload(Request $request){
        if($request->hasFile('studentsupload')){
            $path = $request->file('studentsupload')->getRealPath();
            $data = Excel::load($path)->get();
            if($data->count()){
                foreach ($data as $key => $value) {
                    $upload_list[] = ['first_name' => $value->first_name, 'last_name' => $value->last_name, 'sex'=>$value->sex];
                        
                }
                if(!emapty($upload_list)){
                    Product::insert($upload_list);
                    \Session::flash('sucess','File imported successfully');                   
                }
            }
        }else {
            \Session::flash('warnning','There is no file to import');
        }
        return Redirect::back();
    }

   }
    
