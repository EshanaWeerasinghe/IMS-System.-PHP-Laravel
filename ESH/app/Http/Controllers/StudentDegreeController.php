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

class StudentDegreeController extends Controller
   {
       public function __construct() {
       $this->middleware('web');
   }
   
   public function getStudentManageDegree()
   {   $combination = combination::all();
       $programs = Program::all();
       $shift = shift::all();
       $time = Time::all();
       $batch = Batch::all();
       $group = Group::all();
       $academics = Academic::orderBy('academic_id','DESC')->get();
       $student_id= Student::max('student_id');
       return view('Degree.manageStudentDegree',compact('programs','academics','shift','time','batch','group','student_id','combination'));      
    }
   
   public function index()
    {
        return view('Degree.index');       
    }
    
    public function insert()
    {
       // return view('Degree.insert',['student_degree'=>x::all()]);
    }
    
    public function save(Request $request)
    {
               $data = [
                'Degree_Name'=>$request->Degree_Name,
                'Combination'=>$request->Combination,
                ];
       
       DB::table('student_degree')->insert($data);
             
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