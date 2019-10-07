<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
use App\Combination;
use File;
use Input;
use Storage;
use DB;

class DegreeController extends Controller
{
    public function getDegreeList()
    {
       $programs = Program::all();
       $combination = program::all();
       $shift = shift::all();
       $time = Time::all();
       $batch = Batch::all();
       $group = Group::all();
       $academics = Academic::orderBy('academic_id','DESC')->get();
       $student_id= Student::max('student_id');
       return view('Degree.DegreeList',compact('programs','academics','shift','time','batch','group','student_id','combination'));        
    }
    
    public function createCombination(Request $request)
    {
        if($request->ajax())
        {
            return(Combination::create($request->all()));
        }
    }

 //Report Edit
 public function edit($id)
    {
      $dept = DB::table('department')->where('dept_id',$id)->first();
      $degree = Degree::all();
      return view('Department.editDepartment', compact('dept','degree'));
    }
    
    
    
    
    
    
  //-----------------------------show student info------------------------
  public function studentInfo(Request $request)
  {
      if($request->has('search')){
          $students = Student::where('student_id',$request->search)
                               ->Orwhere('first_name',"LIKE","%".$request->search."%")
                               ->Orwhere('last_name',"LIKE","%".$request->search."%")
                               ->select(DB::raw('student_id,
                                                 first_name,
                                                 last_name,
                                                 CONCAT(first_name," ",last_name) AS full_name,
                                                 (CASE WHEN Sex=0 THEN "M" ELSE "F" END ) AS Sex,
                                                 dob'))
                               ->paginate(10)
                               ->appends('search',$request->search)
                               ;
                                 
      } else {
          $students = Student::select(DB::raw('student_id,
                                                 first_name,
                                                 last_name,
                                                 CONCAT(first_name," ",last_name) AS full_name,
                                                 (CASE WHEN Sex=0 THEN "M" ELSE "F" END) AS Sex,
                                                 dob'))
                  ->paginate(10);                              
      }
     return view('Degree.DegreeList', compact('student_degree'));
  }
  

}