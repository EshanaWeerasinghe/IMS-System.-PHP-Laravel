<?php
namespace App\Http\Controllers;
namespace App\Http\Controllers;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Student;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Excel;
use Illuminate\Http\Request;
use App\Sex;

class studentCcontroller extends Controller
{
     public function getStudentCourses(){
        return view('student.insert');       
    }
    
    public function index()
    {
        return view('student.index');       
    }
    
    public function insert()
    {
        return view('student.insert',['sexes'=>Sex::all()]);
    }
    
    public function save(Request $request)
    {
       $data = ['first_name'=>$request->first_name,
                'last_name'=>$request->last_name,
                'sex_id'=>$request->sex_id];
       DB::table('student')->insert($data);
       return back();                   
    }

    public function edit($id)
    {
        return view('student.edit')->with('id',$id);
    }
    
    public function delete()
    {
        
    }
}
