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
use App\Degree;
use App\Lecturer;
use App\Course;
use App\Lecture_Hall;
use App\TimeTable;
use File;
use Input;
use Storage;
use DB;


class TimeTableController extends Controller
   {
       public function __construct() {
       $this->middleware('web');
   }
   
   public function getTimeTable()
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
       $course = Course::all();
       $lecture_hall = Lecture_Hall::all();
      
       return view('TimeTable.manageTimeTable',compact('programs','academics','shift','time','batch','group','student_id','department', 'lecturer','course','lecture_hall'));   
    }
    
    public function getAvailability() {
       $programs = Program::all();
       $shift = shift::all();
       $time = Time::all();
       $batch = Batch::all();
       $group = Group::all();
       $academics = Academic::orderBy('academic_id','DESC')->get();
       $student_id= Student::max('student_id');
       $department = Department::all();
       $lecturer = Lecturer::all();
       $course = Course::all();
       $lecture_hall = Lecture_Hall::all();
       
        return view('Hall_Availability.manageAvailability',compact('programs','academics','shift','time','batch','group','student_id','department', 'lecturer','course','lecture_hall'));        
    }
    
    public function checkAvailability(Request $request) {
        
        $year = $request->year;
        $semester = $request->semester;
        $day = $request->day;
        $course_code = $request->course_code;
       // echo $year;
        
       $timetable = TimeTable::where('year',"=",$year)
                                ->where('semester',"=",$semester)
                                ->where('day',"=",$day)
                                ->where('course_code',"=",'N/A')
                                ->orderBy('lec_hall')
                                ->select(DB::raw('time, lec_hall'))
                                   ->paginate(10);
       
       return view('Hall_Availability.AvailabilityList', compact('timetable'));
    }
   
    public function getTimetableList(Request $request)
    {
        
      if($request->has('search')){
          $timetable = TimeTable::where('day',"LIKE","%".$request->search."%")
                              
                               ->select(DB::raw('year, semester, day, time, course_code,
                           course_name, lec_hall'))
                               ->paginate(10)
                               ->appends('search',$request->search)
                               ;
                                 
      } else {
          $timetable = TimeTable::select(DB::raw('year, semester, day, time, course_code,
                                            course_name, lec_hall'
                                                 ))
                  ->paginate(10);                              
      }
     return view('TimeTable.TimeTableList', compact('timetable'));
  }
    
   public function index()
    {
        return view('Department.index');       
    }
    
    public function insert()
    {
       // return view('Degree.insert',['student_degree'=>x::all()]);
    }
    
    public function save(Request $request)
    {
               $data = [
                'year'=>$request->year,
                'semester'=>$request->semester,
                'day'=>$request->day,
                'time'=>$request->time,
                'course_code'=>$request->course_code,
                'course_name'=>$request->course_name,
                'lec_hall'=>$request->lec_hall,
                ];
       
       DB::table('timetable')->insert($data);
             
       return back();                   
    }

    public function edit($id)
    {
        return view('Degree.edit')->with('id',$id);
    }
    public function delete()
    {
        
    }
  
}