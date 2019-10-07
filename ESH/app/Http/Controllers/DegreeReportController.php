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
use App\Status;
use Charts;
use DB;
use App\User;
 
class DegreeReportController extends Controller
{
    public function getDegreeList()
    {
       $programs = Program::all();
       $shift = shift::all();
       $time = Time::all();
       $batch = Batch::all();
       $group = Group::all();
       $academics = Academic::orderBy('academic_id','DESC')->get();
       $student_id= Student::max('student_id');
       return view('report.DegreeList',compact('programs','academics','shift','time','batch','group'));
    }
    
    public function showDegreeInfo(Request $re)
    {
        $classes = $this->info() ->select(DB::raw('students.student_id,
                              CONCAT(students.first_name," ",students.last_name) as name,
                              (CASE WHEN students.sex=0 THEN "Male" ELSE "Female" END) as sex,
                              students.dob,
                               CONCAT(programs.program," / ",levels.level,
                               " / ",shifts.shift," / ",times.time, " Start-(",classes.start_date, "/",
                               classes.end_date,")"
                               ) as program
                            ' ))                           
                ->where('classes.class_id',$re->$class_id)
                ->get();   
      
        return view('report.studentInfo', compact('classes'));
    }
    
    
    public function info()
    {
        return status::join('classes','classes.class_id','=','statuses.class_id')
                     ->join('students','students.student_id','=','statuses.student_id')
                     ->join('levels','levels.level_id','=','classes.level_id')
                     ->join('academics','academics.academic_id','=','classes.academic_id')
                     ->join('shifts','shifts.shift_id','=','classes.shift_id')
                     ->join('times','times.time_id','=','classes.time_id')
                     ->join('batches','batches.batch_id','=','classes.batch_id')
                     ->join('groups','groups.group_id','=','classes.group_id')                     
                     ->join('programs','programs.program_id','=','levels.program_id');                                                  
    }   
    
    //----------------------multi student list class--------------------------
    public function getDegreeListMultiClass()
    {
       $programs = Program::all();
       $shift = shift::all();
       $time = Time::all();
       $batch = Batch::all();
       $group = Group::all();
       $academics = Academic::orderBy('academic_id','DESC')->get();
       
        return view('report.DegreeListMultiClass',compact('programs','academics','shift','time','batch','group'));
    }
    
//    public function showDegreeInfoMultiClass(Request $request)
//    {
//        if ($request->ajax())
//        {
//            if(!empty($request['chk'])){
//                 $classes = $this->info()
//                             ->select(DB::raw('student_degree.degree_id,
//                                    CONCAT(student_degree.Degree_Name," ",student_degree.Degree_Name) as name,
//                                    student_degree.Degree_Name,                                  
//                                    student_degree.Combination
//                                  '))
//                ->whereIn( 'classes.class_id' ,$request['chk'])          
//                ->get();                             
//            return view('report.degreeInfoMultiClass', compact('classes'));
//             
//            }
//        }
//    }
    
//    public function getDegreeRegister()    {
//          	$users = Student::where(DB::raw("(DATE_FORMAT(dateregistered,'%Y'))"),date('Y'))
//                        ->select('dateregistered AS created_at')
//                        ->get();
//                $chart = Charts::database($users, 'area', 'highcharts')
//
//                                      ->title("Registered Students")
//
//                                      ->elementLabel("Total Students")
//
//                                      ->dimensions(1000, 500)
//
//                                      ->responsive(false)
//
//                                      ->groupByMonth(date('Y'), true);
//
//    }
}
