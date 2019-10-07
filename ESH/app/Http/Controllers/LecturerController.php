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

class LecturerController extends Controller
   {
       public function __construct() {
       $this->middleware('web');
   }
   
   public function getLecturer()
    {  
      $department = Department::all(); 
      
       return view('Lecturer.manageLecturer', compact('department'));      
    }
   
    public function getLecturerList(Request $request)
    {
      if($request->has('search')){
          $lecturer = Lecturer::where('lec_name',"LIKE","%".$request->search."%")
                              
                               ->select(DB::raw('lec_id, lec_title,
                                                 lec_name, lec_dept, lec_designation'))
                               ->paginate(10)
                               ->appends('search',$request->search)
                               ;
                                
      } else {
          $lecturer = Lecturer::select(DB::raw('lec_id, lec_title,
                                                 lec_name, lec_dept, lec_designation'
                                                 ))
                  ->paginate(10);                              
      }
     return view('Lecturer.LecturerList', compact('lecturer'));
  }
    
   public function index()
    {
        return view('Lecturer.index');       
    }
    
    public function insert()
    {
       // return view('Degree.insert',['student_degree'=>x::all()]);
    }
    
    public function save(Request $request)
    {
               $data = [
                'lec_title'=>$request->lec_title,
                'lec_name'=>$request->lec_name,
                'lec_dept' =>$request->lec_dept,
                'lec_designation'=>$request->lec_designation,
                ];
       
       DB::table('lecturer')->insert($data);
             
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