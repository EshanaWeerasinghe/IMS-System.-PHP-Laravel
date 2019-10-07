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
use App\Degree;
use App\Course;
use App\Status;
use App\FileUpload;
use App\Combination;
use App\Edit;
use File;
use Input;
use Storage;
use DB;

class StudentController extends Controller
{
    public function getStudentRegister()
    {
       $Degree_Name = Degree::all();
       $programs = Program::all();
       $combination = program::all();
       $shift = shift::all();
       $time = Time::all();
       $batch = Batch::all();
       $group = Group::all();
       $academics = Academic::orderBy('academic_id','DESC')->get();
       $student_id= Student::max('student_id');
       return view('student.studentRegister',compact('programs','academics','shift','time','batch','group','student_id','combination','Degree_Name'));        
    }
    
    public function createCombination(Request $request)
    {
        if($request->ajax())
        {
            return(Combination::create($request->all()));
        }
    }
    
    public function postStudentRegister(Request $request){   
    dump($request->all());
    $st = new Student;
    $st->Reg_no=$request->Reg_no;
    $st->initials=$request->initials;
    $st->al_index=$request->al_index;
    $st->full_name=$request->full_name;   
    $st->first_name=$request->first_name;
    $st->last_name=$request->last_name;
    $st->sex=$request->sex;
    $st->dob=$request->dob;
    $st->Level=$request->Level;
    $st->ugc_course=$request->ugc_course;
    $st->combination=$request->combination;
    $st->degree_type=$request->degree_type;
    $st->Degree_Name =$request->Degree_Name;
    $st->student_category=$request->student_category;
    $st->admission_year=$request->admission_year;
    $st->email=$request->email;
    $st->status=$request->status;
    $st->national_card=$request->national_card;
    $st->nationality=$request->nationality; 
    $st->passport = $request->passport;
    $st->phone = $request->phone;
    $st->land_phone = $request->land_phone;
    $st->p_address = $request->p_address;
    $st->hometown=$request->hometown;
    $st->preferred_address=$request->preferred_address;
    $st->tempory_address=$request->tempory_address;
    $st->foreign_student=$request->foreign_student;
    $st->nationality=$request->nationality;
    $st->ctizenship=$request->ctizenship;
    $st->school_town=$request->school_town; 
    $st->z_score=$request->z_score;
    $st->username=$request->username;
    $st->student_status=$request->student_status;
    $st->dateregistered=$request->dateregistered;
    $st->user_id=$request->user_id;
    $st->photo = Fileupload::photo($request,'photo');
    if($st->save())
    {
        $student_id = $st->student_id;
        Status::insert(['student_id'=>$student_id,'class_id'=>$request->class_id]);
        return back();
    }       
               //dump($request->all());
              //return dump($request->all());
  } 
  
  public function edit($id)
  {
      $students= Student::find($student_id);     
      return view('student.edit', compact('students','student_id'));
  }
  
  public function update(Request $request,$student_id)
  {
      $this->validate($request, [
          'first_name' => 'required',
          'last_name'  => 'required'        
      ]);     
      $students = Student::find($student_id);
      $students->first_name = $request->get('first_name');     
      $students->last_name = $request->get('last_name');
      $students->save();
      return redirect()->route('student.index')->with('success','Data Updated');
  }

  //-----------------------------show student info
  public function studentInfo(Request $request)
  {
      if($request->has('search')){
          $students = Student::where('student_id',$request->search)
                               ->Orwhere('first_name',"LIKE","%".$request->search."%")
                               ->Orwhere('last_name',"LIKE","%".$request->search."%")
                               ->Orwhere('Reg_no',"LIKE","%".$request->search."%")
                               ->select(DB::raw('student_id,
                                                 first_name,
                                                 last_name,
                                                 Reg_no,
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
                                                 Reg_no,
                                                 CONCAT(first_name," ",last_name) AS full_name,
                                                 (CASE WHEN Sex=0 THEN "M" ELSE "F" END) AS Sex,
                                                 dob'))
                  ->paginate(10);                              
      }
     return view('student.studentList', compact('students'));
  }

  //=================================  Show Degree Lists ================================
  //================================== Relevent For DegreeList Blade ===================
  public function DegreeInfo(Request $request)
  {
      if($request->has('search')){
          $student_degree = Degree::where('degree_id',$request->search)
                               ->Orwhere('Degree_Name',"LIKE","%".$request->search."%")
                               ->Orwhere('Combination',"LIKE","%".$request->search."%")
                               ->select(DB::raw('degree_id,
                                                 Degree_Name,                                                                                                
                                                 Combination'))
                               ->paginate(10)
                               ->appends('search',$request->search)
                               ;
                                 
      } else {
          $student_degree = Degree::select(DB::raw('degree_id,
                                                 Degree_Name,
                                                 Combination'
                                                 ))
                  ->paginate(10);                              
      }
     return view('Degree.DegreeList', compact('student_degree'));
  }

  
  //=================================  Show Course Lists ================================
  //================================== Relevent For CourseList Blade ===================
  public function CourseInfo(Request $request)
  {
      if($request->has('search')){
          $student_course = Course::where('course_id',$request->search)
                               ->Orwhere('course_unit',"LIKE","%".$request->search."%")
                               ->Orwhere('title',"LIKE","%".$request->search."%")
                               ->select(DB::raw('course_id,
                                                 course_unit,                                                                                                
                                                 title,
                                                 year,
                                                 level,
                                                 semester,
                                                 evaluate,
                                                 dept,
                                                 subject,
                                                 lec,
                                                 coord,
                                                 description,
                                                 english,
                                                 tamil,
                                                 sinhala,
                                                 credit,
                                                 theory,
                                                 practical,
                                                 academic_course,
                                                 markbook,
                                                 sta'))                                                

                               ->paginate(10)
                               ->appends('search',$request->search)
                               ;
                                 
      } else {
          $student_course = Course::select(DB::raw('course_id,
                                                 course_unit,
                                                 title,
                                                 year,
                                                 level,
                                                 semester,
                                                 evaluate,
                                                 dept,
                                                 subject,
                                                 lec,
                                                 coord,
                                                 description,
                                                 english,
                                                 tamil,
                                                 sinhala,
                                                 credit,
                                                 theory,
                                                 practical,
                                                 academic_course,
                                                 markbook,
                                                 sta'))                                                                                                                                           
                  ->paginate(10);                              
      }
     return view('StudentCourse.CourseList', compact('student_course'));
  }
  
}                            