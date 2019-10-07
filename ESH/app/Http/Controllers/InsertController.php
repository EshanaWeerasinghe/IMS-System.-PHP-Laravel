<?php
use App\Http\Controllers\InsertController;
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
    public function getstuinsert() {
        return view('student.insert');       
    }
    public function poststuinsert(Request $request) {
        $firstName = $req->input('firstName');
        $lastName = $req->input('lastName');
        $mobile = $req->req->input('mobile');
        
        $data  = array('firstName'=>$firstName,"lastName"=>$lastName,"mobile"=>$mobile);
        DB::table('usersx')->insert($data);       
        echo 'Success';
    }    
}