<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;// this is necessary for your SingIn method
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
use App\Combination;
use File;
use Storage;
class SemesterController extends Controller
{
   public function __construct() {
       $this->middleware('web');
   }
   
   public function getManageSemester()
   {
       $programs = Program::all();
       $shift = shift::all();
       $time = Time::all();
       $batch = Batch::all();
       $group = Group::all();
       $academics = Academic::orderBy('academic_id','DESC')->get();
       return view('semester.manageSemester',compact('programs','academics','shift','time','batch','group'));
   }
   
   public function postInsertAcademic(Request $request)
   {
        if($request->ajax())
        {
            return response(Academic::create($request->all()));
        }          
   }
    
   //=========================================================//
   public function postInsertProgram(Request $request)
   {
        if($request->ajax())
        {
            return response(Program::create($request->all()));
        }         
   }
   
   //======================================================//
   public function postInsertLevel(Request $request)
   {
       if($request->ajax())
       {
           return response(Level::create($request->all()));
       }
   }
   
   public function showLevel(Request $request)
   {
       if($request->ajax())
       {
           //return response(Level::where('program_id',$request->program_id)->get());
           return response(Level::find($request->program_id));
       }
   }
   //=======================================================================
   
   public function createShift(Request $request)
   {
       if ($request->ajax())
       {
           return (shift::create($request->all()));
       }
   }
   //=========================================================================
   
      public function createTime(Request $request)
      {
       if ($request->ajax())
       {
           return (Time::create($request->all()));
       }
   }
   
   //=========================================================================
   
      public function createBatch(Request $request)
      {
       if ($request->ajax())
       {
           return (Batch::create($request->all()));
       }
   }
   //=========================================================================
      public function createGroup(Request $request)
      {
       if ($request->ajax())
       {
           return (Group::create($request->all()));
       }
   }
   //=========================================================================
    public function createClass(Request $request)
      {
       if ($request->ajax())
       {
           return response(MyClass::create($request->all()));
                      
       }
   }
   //==========================================================================
   public function  showClassInformation(Request $request)
   {   
   if($request->academic_id|="" && $request->program_id=="")
   {
       $criterial = array('academics.academic_id'=>$request->academic_id);
                          
   }elseif($request->academic_id|="" &&
           $request->program_id|="" &&
           $request->level_id|="" &&
           $request->shift_id|="" &&
           $request->time_id|="" &&
           $request->batch_id|="" &&
           $request->group_id|="" )              
   {
       $criterial = array('academics.academic_id'=>$request->academic_id,
                           'programs.program_id'=>$request->program_id,
                           'levels.level_id' =>$request->level_id,
                           'shifts.shift_id' =>$request->shift_id,
                           'times.time_id' =>$request->time_id,
                           'batches.batch_id' =>$request->batch_id,
                           'groups.group_id' =>$request->group_id);
   }
       $classes = $this->ClassInformation($criterial)->get();
       return view('class.classInfo',compact('classes'));
   }
   //==========================================================================
   public function ClassInformation($criterial)
   {
       return MyClass::join('academics','academics.academic_id','=','classes.academic_id')
                           ->join('levels','levels.level_id','=','classes.level_id')
                           ->join('programs','programs.program_id','=','levels.program_id')
                           ->join('shifts','shifts.shift_id','=','classes.shift_id')
                           ->join('times','times.time_id','=','classes.time_id')
                           ->join('batches','batches.batch_id','=','classes.batch_id')
                           ->join('groups','groups.group_id','=','classes.group_id')  
                           ->where($criterial)
                           ->orderBy('classes.class_id','DESC');                                                         
        }
        //============================================================
        public function deleteClass(Request $request)
        {
            if($request->ajax())
            {
                MyClass::destroy($request->class_id);
            }            
        }
        //====================================================================
        public function editClass(Request $request)
        {
            if($request->ajax())
            {
                return response(MyClass::find($request->class_id));
            }
            
        }
        //=====================================================================
        public function updateClassInfo(Request $request)
        {
            if($request->ajax())
            {

               return response(MyClass::updateOrCreate(['class_id'=>$request->class_id],$request->all()));
            }
        } 
    }

