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
use App\Lecture_Hall;
use File;
use Input;
use Storage;
use DB;


class LectureHallController extends Controller
   {
       public function __construct() {
       $this->middleware('web');
   }
   
   public function getLectureHall()
   {  
     
      
       return view('Lecture_Hall.manageLectureHall');      
    }
   
    public function getLectureHallList(Request $request)
  {
      if($request->has('search')){
          $lecture_halls = Lecture_Hall::where('hall_name',"LIKE","%".$request->search."%")
                              
                               ->select(DB::raw('hall_id,
                                                 hall_name, capacity'))
                               ->paginate(10)
                               ->appends('search',$request->search)
                               ;
                                 
      } else {
          $lecture_halls = Lecture_Hall::select(DB::raw('hall_id,
                                                 hall_name, capacity'))
                  ->paginate(10);                              
      }
     return view('Lecture_Hall.LectureHallList', compact('lecture_halls'));
  }
    
   
   
   public function index()
    {
        return view('Lecture_Hall.index');       
    }
    
    public function insert()
    {
       // return view('Degree.insert',['student_degree'=>x::all()]);
    }
    
    public function save(Request $request)
    {
               $data = [
                'hall_name'=>$request->hall_name,
                'capacity'=>$request->capacity,
               
                ];
       
       DB::table('lecture_halls')->insert($data);
             
       return back();                   
    }

    public function edit($id)
           
    {
         $lec = DB::table('lecture_halls')->where('hall_id',$id)->first();
        
        
        return view('Lecuture_Hall.EditLectureHall', compact('lec'));
    }
    public function delete()
    {
        
    }
  
}