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
use App\Degree;
use App\Department;
use App\Assign;
use App\SemesterCombination;
use App\Course;
use File;
use Input;
use Storage;
use DB;
//StudentCourseController
class SemesterandCourseController extends Controller
   {
       public function __construct() {
       $this->middleware('web');
   }
   
   public function getSemesterandCourse()
   {   
       $degree_type = Program::all();
       $Degree_Name = Degree::all();
       $combination = combination::all(); 
       $programs = Program::all();
       $shift = shift::all();
       $time = Time::all();
       $batch = Batch::all();
       $group = Group::all();
       $course = Course::all();
       $academics = Academic::orderBy('academic_id','DESC')->get();
       $student_id= Student::max('student_id');
       return view('Combination.SemesterandCourse',compact('programs','academics','shift','time','batch','group','student_id','combination','Degree_Name','degree_type','course'));      
    }
    
    public function check(){
       $degree_type = Program::all();
       $Degree_Name = Degree::all();
       $combination = combination::all(); 
       $programs = Program::all();
       $shift = shift::all();
       $time = Time::all();
       $batch = Batch::all();
       $group = Group::all();
       $course = Course::all();
       $academics = Academic::orderBy('academic_id','DESC')->get();
       $student_id= Student::max('student_id');
       return view('Combination.AssignCourse',compact('programs','academics','shift','time','batch','group','student_id','combination','Degree_Name','degree_type','course'));
        
    }

        public function getCombination(Request $request)
    {
        if($request->has('search')){
          $semester_combination = SemesterCombination::where('semester',"LIKE","%".$request->search."%")
                              
                               ->select(DB::raw('Com_id,
                                                 year,semester,combination,degree,degree_type'))
                               ->paginate(10)
                               ->appends('search',$request->search)
                               ;
                                 
      } else {
          $semester_combination = SemesterCombination::select(DB::raw('Com_id,
                                                 year,semester,combination,degree,degree_type'
                                                 ))
                  ->paginate(10);                              
      }
     return view('Combination.SemesterCourseList', compact('semester_combination'));
    }

    public function index()
    {
        return view('StudentCourse.index');       
    }
    
    public function insert()
    {
        return view('StudentCourse.insert',['student_course'=>course_unit::all()]);
    }
    
     
    public function save(Request $request)
    {
      $data = [
                'year'=>$request->year,
                'semester'=>$request->semester,
                'combination'=>$request->combination,
                'degree'=>$request->degree,
                'degree_type'=>$request->degree_type,
                'course_code'=>$request->course_code,
                'course_name'=>$request->course_name,
                'level'=>$request->level,
                ];
       
       DB::table('semester_combination')->insert($data);
             
       return back();          
    }
    
    public function getCourseList(Request $request){
        
                $year = $request->year;
                $semester=$request->semester;
                $combination=$request->combination;
                $degree= $request->degree;
                $degree_type=$request->degree_type;
                $level= $request->level;             
                $semester_combination = SemesterCombination::where('year',"=",$year)
                                                             ->where('semester',"=",$semester)
                                                             ->where('combination',"=",$combination)
                                                             ->where('degree',"=",$degree)
                                                             ->where('degree_type',"=",$degree_type)
                                                             ->where('level',"=",$level)
                                                             ->orderBy('course_code')
                                                             ->select(DB::raw('course_code, course_name'))
                                                             ->paginate(10);  
        return view('Combination.SemesterCourseList', compact('semester_combination','year','degree'));
        
    }
    
    public function edit($id)
    {
        return view('StudentCourse.edit')->with('id',$id);
    }
    
    public function delete()
    {
        
    }
  
}