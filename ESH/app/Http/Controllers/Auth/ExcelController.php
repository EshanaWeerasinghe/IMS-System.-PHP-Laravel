<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Student;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Excel;


class ExcelController extends Controller
{        
    public function getImport() {
        return view('Excel.uploadStudent');       
    }
    
    public function postImport(Request $request) {       
        $this->validate($request,[
           'file'=> 'required|mimes:csv,txt'
        ]);
        
        if(($handle = fopen($_FILES['file']['tmp_name'],"r"))!==FALSE){
            fgetcsv($handle);
            
            while(($data= fgetcsv($handle,1000,","))!==FALSE){                  
                $addtest = DB::table('test')->insert([                   
                    'Index_No'=>$data[0],
                    'Salary' =>$data[1]
                ]);                                                        
        }               
    }
    
  
    

     
    
    
    
    
        
    }

}