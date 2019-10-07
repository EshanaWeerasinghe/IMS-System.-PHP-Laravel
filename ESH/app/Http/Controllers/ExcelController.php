<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Student;
use App\Excel;
use File;
use Input;
use Storage;
use DB;
class ExcelController extends Controller
{  
    public function getImport() {
        $marks = Excel::all();
        $mark_id = Excel::all();
        $index_no = Excel::all();
        return view('Excel.uploadStudent', compact('marks','mark_id','index_no'));       
    }
    
    public function postImport(Request $request){
        $this->validate($request,[
           'file'=> 'required|mimes:csv,txt'
        ]);
        if(($handle = fopen($_FILES['file']['tmp_name'],"r"))!==FALSE){
            fgetcsv($handle);
            
            while(($data= fgetcsv($handle,1000,","))!==FALSE){
                               
                $addtest = DB::table('marks')->insert([                   
                    'Index_No'=>$data[0],
                    'Marks' =>$data[1]
                ]);
                               
            }               
         }
    }
       
public function getMarkList(Request $request)
{
      if($request->has('search')){
          $marks = Excel::where('marks',"LIKE","%".$request->search."%")
                              
                               ->select(DB::raw('mark_id,
                                                 marks,index_no,marks'))
                               ->paginate(10)
                               ->appends('search',$request->search)
                               ;                                 
      } else {
          $marks = Excel::select(DB::raw('mark_id,
                                                 marks,index_no,marks'
                                                 ))
                  ->paginate(10);                              
      }
     return view('Excel.MarksList', compact('marks'));
  }
  
}