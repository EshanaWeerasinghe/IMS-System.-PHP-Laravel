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
use App\Combination;
use App\Degree;
use DB;
use App\User;
use App\Course;
use App\SemesterCombination;
class ExamController extends Controller
{
    public function checkExam(){
       $Reg_no = Student::all();
       $Level = Student::all();
       $full_name = Student::all();
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
       return view('Exam.StudentExam',compact('programs','academics','shift','time','batch','group','student_id','combination','Degree_Name','degree_type','course','Reg_no'));      
    }

      public function getExamRegList(Request $request){
                $Reg_no = $request->Reg_no;
               
                $students  = Student::where('Reg_no',"=",$Reg_no)                                                        
                                                                                                                      
                                                             ->select(DB::raw('full_name,initials,Level,Degree_Name,p_address'))
                                                             ->paginate(10);
                                     
      return view('Exam.ExamList', compact('semester_combination','combination','Student','students'));
        
    }
        
}