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
use App\Lecturer;
use App\Course;
use App\Assign;
use File;
use Input;
use Storage;

use DB;
//StudentCourseController
class AssignCourseController extends Controller
   {
       public function __construct() {
       $this->middleware('web');
   }
   
   public function getAssignCourse()
   { 
       $student_course = Course::all();
       $lecturer = Lecturer::all();
       $programs = Program::all();
       $shift = shift::all();
       $time = Time::all();
       $batch = Batch::all();
       $group = Group::all();
       $academics = Academic::orderBy('academic_id','DESC')->get();
       $student_id= Student::max('student_id');
       return view('AssignCourse.AssignCourses',compact('programs','academics','shift','time','batch','group','student_id','lecturer','student_course'));      
    }
    
 public function getAssigncourseList(Request $request)
  {
      if($request->has('search')){
          $assign_course = Assign::where('semeste',"LIKE","%".$request->search."%")
                              
                               ->select(DB::raw('assignc_id,
                                                 semester,year,Ccode,Course,Lecturer'))
                               ->paginate(10)
                               ->appends('search',$request->search)
                               ;
                                 
      } else {
          $assign_course = Assign::select(DB::raw('assignc_id,
                                                 semester,year,Ccode,Course,Lecturer'
                                                 ))
                  ->paginate(10);                              
      }
     return view('AssignCourse.AssignCoursetList', compact('assign_course'));
  }
    
   
  
    public function save(Request $request)
    {
      $data = [
                'year'=>$request->year,
                'semester'=>$request->semester,
                'Ccode'=>$request->Ccode,
                'Course'=>$request->Course,
                'Lecturer'=>$request->Lecturer,
                ];
       
       DB::table('assign_course')->insert($data);
             
       return back();          
    }
    
    
    public function editAssignCourseLec($id)
    {
       $academics = Academic::orderBy('academic_id','DESC')->get();
       $student_course = Course::all();
       $lecturer = Lecturer::all();
       $programs = Program::all();
       $shift = shift::all();
       $assign = DB::table('assign_course')->where('assignc_id',$id)->first();       
       return view('AssignCourse.editAssignCourses', compact('academics','student_course','lecturer','programs','shift','assign'));
        
    }
    
    
    public function updateAssignCourseLec(Request $request)
    {
         $data = [
                'year'=>$request->year,
                'semester'=>$request->semester,
                'Ccode'=>$request->Ccode,
                'Course'=>$request->Course,
                'Lecturer'=>$request->Lecturer,
                ];
          
           DB::table('assign_course')->where('assignc_id',$request->assignc_id)->update($data);
     
       return redirect('/manage/AssignCoursetList');
        
    }
    
    
    public function deleteAssignCourseLec($id)
    {
        DB::table('assign_course')->where('assignc_id',$id)->delete();
        return back();
        
    }
 
}



