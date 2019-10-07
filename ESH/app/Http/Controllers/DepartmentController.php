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
use File;
use Input;
use Storage;
use DB;


class DepartmentController extends Controller
   {
       public function __construct() {
       $this->middleware('web');
   }
   
   public function getDepartment()
   {     
       $degree = Degree::all();
       return view('Department.manageDepartment',compact('degree'));      
    }
   
    public function getDepartmentList(Request $request)
  {
      if($request->has('search')){
          $department = Department::where('dept_name',"LIKE","%".$request->search."%")
                              
                               ->select(DB::raw('dept_id,
                                                 dept_name, hod, degree'))
                               ->paginate(10)
                               ->appends('search',$request->search)
                               ;
                                 
      } else {
          $department = Department::select(DB::raw('dept_id,
                                                 dept_name, hod, degree'
                                                 ))
                  ->paginate(10);                              
      }
     return view('Department.DepartmentList', compact('department'));
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
                'dept_name'=>$request->dept_name,
                'hod'=>$request->hod,
                   'degree'=>$request->degree,
                ];
       
       DB::table('department')->insert($data);
             
       return back();                   
    }
    
    
//Report Edit
    public function edit($id)
    {
        $dept = DB::table('department')->where('dept_id',$id)->first();
        $degree = Degree::all();
        return view('Department.editDepartment', compact('dept','degree'));
    }
    
    
//Report Update    
    public function update(Request $request) {
       
        $data = [
                'dept_name'=>$request->dept_name,
                'hod'=>$request->hod,
                'degree'=>$request->degree,
                ];
         DB::table('department')->where('dept_id',$request->dept_id)->update($data);
     
       return redirect('/manage/DepartmentList');
         
    }
 
    
//Repoert Delete    
    public function delete($id)
    {
        DB::table('department')->where('dept_id',$id)->delete();
        return back();
    }
  
}