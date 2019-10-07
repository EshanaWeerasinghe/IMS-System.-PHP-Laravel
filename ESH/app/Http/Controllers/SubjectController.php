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
use App\Subject;
use File;
use Input;
use Storage;
use DB;


class SubjectController extends Controller
   {
       public function __construct() {
       $this->middleware('web');
   }
   
   public function getSubject()
   {     
      
       return view('Subject.manageSubject');      
    }
   
    public function getSubjectList(Request $request)
  {
      if($request->has('search')){
          $subject = Subject::where('sub_name',"LIKE","%".$request->search."%")
                              
                               ->select(DB::raw('sub_id,
                                                 sub_code, sub_name'))
                               ->paginate(10)
                               ->appends('search',$request->search)
                               ;
                                 
      } else {
          $subject = Subject::select(DB::raw('sub_id,
                                              sub_code, sub_name'))
                  ->paginate(10);                              
      }
     return view('Subject.SubjectList', compact('subject'));
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
                'sub_code'=>$request->sub_code,
                'sub_name'=>$request->sub_name,
                ];
       
       DB::table('subjects')->insert($data);
             
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