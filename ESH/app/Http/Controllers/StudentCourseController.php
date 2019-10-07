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
use App\Department;
use App\Lecturer;
use File;
use Input;
use Storage;
use DB;

class StudentCourseController extends Controller
   {
       public function __construct() {
       $this->middleware('web');
   }
   
   public function getStudentManageCourse()
   {     
       $programs = Program::all();
       $shift = shift::all();
       $time = Time::all();
       $batch = Batch::all();
       $group = Group::all();
       $academics = Academic::orderBy('academic_id','DESC')->get();
       $student_id= Student::max('student_id');
       $department = Department::all();
       $lecturer = Lecturer::all();
       return view('StudentCourse.manageStudentCourse',compact('programs','academics','shift','time','batch','group','student_id','department', 'lecturer'));      
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
               $data = ['course_unit'=>$request->course_unit,
                'title'=>$request->title,
                'year'=>$request->year,
                'level'=>$request->level,
                'semester'=>$request->semester,
                'evaluate'=>$request->evaluate,
                'dept'=>$request->dept,
                'subject'=>$request->subject,
                'lec'=>$request->lec,
                'coord'=>$request->coord,
                'description'=>$request->description,
                'english'=>$request->english,
                'tamil'=>$request->tamil,
                'sinhala'=>$request->sinhala,
                'credit'=>$request->credit,
                'theory'=>$request->theory,  
                'practical'=>$request->practical,
                'academic_course'=>$request->academic_course,
                'markbook'=>$request->markbook,
                'sta'=>$request->sta];
       
       DB::table('student_course')->insert($data);
       
       
       
       return back();                   
    }

    public function edit($id)
    {
        return view('StudentCourse.edit')->with('id',$id);
    }
    
    public function delete()
    {
        
    }
  
}