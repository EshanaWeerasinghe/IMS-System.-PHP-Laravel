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
use Combination;
use App\User;
 
class ReportController extends Controller
{
    public function getStudentList()
    { 
       $programs = Program::all();
       $shift = shift::all();
       $time = Time::all();
       $batch = Batch::all();
       $group = Group::all();
       $academics = Academic::orderBy('academic_id','DESC')->get();
       $student_id= Student::max('student_id');
       return view('report.studentList',compact('programs','academics','shift','time','batch','group'));
    }
    
    public function showStudentInfo(Request $re)
    {
        $classes = $this->info() ->select(DB::raw('students.student_id,
                              CONCAT(students.first_name," ",students.last_name ") as name,
                              (CASE WHEN students.sex=0 THEN "Male" ELSE "Female" END) as sex,
                              students.dob,students.Reg_no,
                               CONCAT(programs.program," / ",levels.level,
                               " / ",shifts.shift," / ",times.time, " Start-(",classes.start_date, "/",
                               classes.end_date,")"
                               ) as program
                            ' ))                           
                ->where('classes.class_id',$re->$class_id)
                ->get();   
      
        return view('report.studentInfo', compact('classes'));
    }
    //-------------------- we use like to recrease code ----------------------
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
    public function getStudentListMultiClass()
    {
       $programs = Program::all();
       $shift = shift::all();
       $time = Time::all();
       $batch = Batch::all();
       $group = Group::all();
       $academics = Academic::orderBy('academic_id','DESC')->get();      
        return view('report.studentListMultiClass',compact('programs','academics','shift','time','batch','group'));
    }
    
    public function showStudentInfoMultiClass(Request $request)
    {
        if ($request->ajax())
        {
            if(!empty($request['chk'])){
                 $classes = $this->info()
                             ->select(DB::raw('students.student_id,
                                    CONCAT(students.first_name," ",students.last_name) as name,
                                    (CASE WHEN students.sex=0 THEN "Male" ELSE "Female" END) as sex,
                                    students.dob,
                                    students.Reg_no,
                                    students.initials,
                                    students.al_index,
                                    students.full_name,
                                    students.first_name,
                                    students.last_name,
                                    students.national_card,
                                    students.dob,
                                    students.Level,
                                    students.ugc_course,
                                    students.combination,
                                    students.degree_type,
                                    students.student_category,
                                    students.admission_year,
                                    students.email,
                                    students.status,
                                    students.passport,
                                    students.phone,
                                    students.land_phone,
                                    students.p_address,
                                    students.hometown,
                                    students.preferred_address,
                                    students.tempory_address,
                                    students.foreign_student,
                                    students.nationality,
                                    students.ctizenship,
                                    students.school_town,
                                    students.z_score,
                                    students.username,
                                    students.student_status,
                                    students.dateregistered,
                                    programs.program,
                                    levels.level,
                                    shifts.shift,
                                    times.time,
                                    batches.batch,
                                    groups.groups
                                  '))
                ->whereIn( 'classes.class_id' ,$request['chk'])          
                ->get();                             
            return view('report.studentInfoMultiClass', compact('classes'));
             
            }
        }
    }
    
    public function getNewStudentRegister()
    {
          	$users = Student::where(DB::raw("(DATE_FORMAT(dateregistered,'%Y'))"),date('Y'))
                        ->select('dateregistered AS created_at')
                        ->get();
                $chart = Charts::database($users, 'area', 'highcharts')

                                      ->title("Registered Students")

                                      ->elementLabel("Total Students")

                                      ->dimensions(1000, 500)

                                      ->responsive(false)

                                      ->groupByMonth(date('Y'), true);
                return view('report.newStudentRegister', compact('chart'));
    }
    
    public function editStudentList($id)
    {  
       $programs = Program::all();
       $shift = shift::all();
       $time = Time::all();
       $batch = Batch::all();
       $group = Group::all();
       $academics = Academic::orderBy('academic_id','DESC')->get();
       $student_id= Student::max('student_id');
       
       $students = DB::table('students')->where('student_id',$id)->first();
       return view('report.editstudentList',compact('programs','academics','shift','time','batch','group','students','combination'));      
    }
        
       public function updateStudentList(Request $request)
        {
            $data = [
                   'Reg_no'=>$request->Reg_no,
                   'initials'=>$request->initials,
                   'al_index'=>$request->al_index,
                   'full_name'=>$request->full_name,
                   'first_name'=>$request->first_name,
                   'last_name'=>$request->last_name,
                   'sex'=>$request->sex,
                   'national_card'=>$request->national_card,
                   'dob'=>$request->dob,
                   'Level'=>$request->Level,
                   'ugc_course'=>$request->ugc_course,
                   'combination'=>$request->combination,
                   'first_name'=>$request->first_name,
                   'degree_type'=>$request->degree_type,
                   'student_category'=>$request->student_category,
                   'admission_year'=>$request->admission_year,
                   'email'=>$request->email,
                   'status'=>$request->status,
                   'passport'=>$request->passport,
                   'phone'=>$request->phone,
                   'land_phone'=>$request->land_phone,
                   'p_address'=>$request->p_address,     
                   'hometown'=>$request->hometown,
                   'preferred_address'=>$request->preferred_address,
                   'tempory_address'=>$request->tempory_address,
                   'foreign_student'=>$request->foreign_student,
                   'nationality'=>$request->nationality,
                   'ctizenship'=>$request->ctizenship,
                   'school_town'=>$request->school_town,
                   'z_score'=>$request->z_score,
                   'username'=>$request->username,
                   'student_status'=>$request->student_status,
                   'dateregistered'=>$request->dateregistered,            
                   ];

              DB::table('students')->where('student_id',$request->student_id)->update($data);
     
            return redirect('/student/info'); 
    }
    
    public function deleteStudentList($id)
    {
        DB::table('students')->where('student_id',$id)->delete();
        return back();
        
    }
    
}
