<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function (){
    return view('Home');
});
Route::get('/log', ['as'=>'log','uses'=>'LoginController@getLogin']); 
Route::post('/login',['as'=>'login','uses'=>'LoginController@postLogin']);

Route::get('/noPermission',function(){
        return view('permission.noPermission');
});

Route::group(['middleware'=>['authen']],function(){
	Route::get('/logout',['as'=>'logout','uses'=>'LoginController@getLogout']);
	Route::get('/dashboard',['as'=>'dashboard','uses'=>'DashboardController@dashboard']);
});
//============================== ADMIN=====================================================
Route::group(['middleware'=>['authen','roles'],'roles'=>['admin','Lecturer']], function(){
   
Route::get('/manage/course',['as'=>'manageSemester','uses'=>'SemesterController@getManageSemester']);
//============================== Course =====================================================
Route::get('/manage/StudentCourse',['as'=>'manageStudentCourse','uses'=>'StudentCourseController@getStudentManageCourse']);
Route::post('/manage/StudentCourseSave',['as'=>'saveCourse','uses'=>'StudentCourseController@save']);

//================================= Degree =====================================================
Route::get('/manage/Degree',['as'=>'manageStudentDegree','uses'=>'StudentDegreeController@getStudentManageDegree']);
Route::post('/manage/StudentDegreeSave',['as'=>'saveDegree','uses'=>'StudentDegreeController@save']);

//=============================== Combination ================================================
Route::get('/manage/StudentCourse',['as'=>'manageStudentCourse','uses'=>'StudentCourseController@getStudentManageCourse']);
Route::post('/manage/StudentCourseSave',['as'=>'saveCourse','uses'=>'StudentCourseController@save']);


//==================================Department=================================================
Route::get('/manage/Department',['as'=>'manageDepartment','uses'=>'DepartmentController@getDepartment']);
Route::post('/manage/Save_Department',['as'=>'saveDepartment','uses'=>'DepartmentController@save']);
Route::get('/manage/DepartmentList',['as'=>'DepartmentList','uses'=>'DepartmentController@getDepartmentList']);
//---------------------------------- Department -Edit/Delete ------------------------------------------


//=================Semester and course controller==============================================================================
Route::get('/manage/SemesterandCourse',['as'=>'SemesterandCourse','uses'=>'SemesterandCourseController@getSemesterandCourse']);
Route::post('/manage/Save_Sem',['as'=>'saveSem','uses'=>'SemesterandCourseController@save']);
Route::get('/manage/SemesterCourseList',['as'=>'SemesterCourseList','uses'=>'SemesterandCourseController@getCombination']);


//=================Assign Course controller=======================================
Route::get('/manage/AssignCourses',['as'=>'AssignCourses','uses'=>'AssignCourseController@getAssignCourse']);
Route::post('/manage/Save_AssignCourse',['as'=>'saveAssignCourse','uses'=>'AssignCourseController@save']);
Route::get('/manage/AssignCoursetList',['as'=>'AssignCoursetList','uses'=>'AssignCourseController@getAssigncourseList']);

Route::post('/manage/course/insert',['as'=>'postInsertAcademic','uses'=>'SemesterController@postInsertAcademic']);       
Route::post('/manage/course/insert-program',['as'=>'postInsertProgram','uses'=>'SemesterController@postInsertProgram']);
Route::post('/manage/course/insert-level',['as'=>'postInsertLevel','uses'=>'SemesterController@postInsertLevel']);
Route::get('/manage/course/showLevel',['as'=>'showLevel','uses'=>'SemesterController@showLevel']);


Route::post('/manage/course/shift',['as'=>'createShift','uses'=>'SemesterController@createShift']);  
Route::post('/manage/course/time',['as'=>'createTime','uses'=>'SemesterController@createTime']);
Route::post('/manage/course/batch',['as'=>'createBatch','uses'=>'SemesterController@createBatch']);
Route::post('/manage/course/group',['as'=>'createGroup','uses'=>'SemesterController@createGroup']);
Route::post('/manage/course/class',['as'=>'createClass','uses'=>'SemesterController@createClass']);
Route::get('/manage/course/classinfo',['as'=>'showClassInformation','uses'=>'SemesterController@showClassInformation']);
Route::post('/manage/course/class/delete',['as'=>'deleteClass','uses'=>'SemesterController@deleteClass']);
Route::get('/manage/course/class/edit',['as'=>'editClass','uses'=>'SemesterController@editClass']);
Route::post('/manage/course/class/update',['as'=>'updateClassInfo','uses'=>'SemesterController@updateClassInfo']);


//==================================Student Register============================================
Route::get('student/getregister',['as'=>'getStudentRegister','uses'=>'StudentController@getStudentRegister']);
Route::post('student/postregister',['as'=>'postStudentRegister','uses'=>'StudentController@postStudentRegister']); 
Route::get('student/info',['as'=>'studentInfo','uses'=>'StudentController@studentInfo']); 
Route::get('student/studentList',['as'=>'getStudentist','uses'=>'StudentUploadController@getStudentist']); 


//======================================= Degree List ===========================================================
Route::get('/manage/Degree_info',['as'=>'DegreeInfo','uses'=>'StudentController@DegreeInfo']);


//====================================Controllers==============================================================
//------------------------------------Student Report-----------------------------------------------------------
Route::get('/report/student-list',['as'=>'getStudentList','uses'=>'ReportController@getStudentList']);
Route::get('/report/student-info',['as'=>'showStudentInfo','uses'=>'ReportController@showStudentInfo']);
Route::get('/report/student-multi-class',['as'=>'getStudentListMultiClass','uses'=>'ReportController@getStudentListMultiClass']);
Route::get('/report/student-info-multi-class',['as'=>'showStudentInfoMultiClass','uses'=>'ReportController@showStudentInfoMultiClass']);
Route::get('/student/new/register',['as'=>'getNewStudentRegister','uses'=>'ReportController@getNewStudentRegister']); 


//======================================= Degree Report ========================================================
Route::get('/report/degree-multi-class',['as'=>'getDegreeListMultiClass','uses'=>'DegreeReportController@getDegreeListMultiClass']);


//======================================= Course List ==========================================================
Route::get('/manage/StudentCourse_info',['as'=>'CourseInfo','uses'=>'StudentController@CourseInfo']);

//===========================================EXAMS ============================================================
Route::get('/Exam/StudentExam',['as'=>'getStudentExamList','uses'=>'ExamController@getStudentExamList']); 

//================================= Excell ====================================================================
Route::get('/getImport',['as'=>'getImport','uses'=>'ExcelController@getImport']);
Route::post('/postImport',['as'=>'postImport','uses'=>'ExcelController@postImport']);
Route::get('/getMarkList',['as'=>'getMarkList','uses'=>'ExcelController@getMarkList']);


Route::post('student/save','studentCcontroller@save');
Route::get('student/getStudentCourses',['as'=>'getStudentCourses','uses'=>'studentCcontroller@getStudentCourses']);


Route::get('/poststuinsert',['as'=>'getstuinsert','uses'=>'InsertController@poststuinsert']);
Route::post('/poststuinsert',['as'=>'poststuinsert','uses'=>'InsertController@poststuinsert']);

//=============================== File Upload ===================================================
Route::get('/manage/Upload2',['as'=>'Upload2','uses'=>'UploadController@getupload']);

//=============================== PDF Upload ====================================================
Route::get('/manage/Upload',['as'=>'Upload','uses'=>'UploadController@getupload']);
Route::post('/insertfile',['as'=>'insertfile','uses'=>'UploadController@insertFile']);

//================================Lecturer======================================================
Route::get('/manage/lecturer',['as'=>'getLecturer','uses'=> 'LecturerController@getLecturer']);
Route::post('/manage/save_lecturer',['as'=>'saveLecturer','uses' => 'LecturerController@save']);
Route::get('/manage/lecturer_list',['as'=>'LecturerList','uses'=>'LecturerController@getLecturerList']);

//===============================Lecturer Hall===================================================
Route::get('manage/lec_hall',['as'=>'getLectureHall','uses'=>'LectureHallController@getLectureHall']); //enter hall
Route::post('manage/save_hall',['as'=>'saveHall','uses'=>'LectureHallController@save']); //save
Route::get('manage/lec_hall_list',['as'=>'hallList','uses'=>'LectureHallController@getLectureHallList']);  //list

//===============================Subject==========================================================
Route::get('manage/subject',['as'=>'getSubject','uses'=>'SubjectController@getSubject']); //enter subject
Route::post('manage/save_subject',['as'=>'saveSubject','uses'=>'SubjectController@save']); //save
Route::get('manage/Subject_List',['as'=>'subjectList','uses'=>'SubjectController@getSubjectList']);  //list

//================================Hall Availability===============================================
Route::get('manage/timetable',['as'=>'getTimetable','uses'=>'TimeTableController@getTimeTable']);
Route::post('manage/save_timetable',['as'=>'saveTimetable','uses'=>'TimeTableController@save']);
Route::get('manage/timetable_list',['as'=>'getTimetableList','uses'=>'TimeTableController@getTimetableList']); //list
Route::get('manage/Hall Availability',['as'=>'getAvailability','uses'=>'TimeTableController@getAvailability']); //Availability
Route::post('manage/Available',['as'=>'checkAvailable','uses'=>'TimeTableController@checkAvailability']);


//=================================== Department ===============================================
//------------------------------------ Edit-----------------------------------------------------
Route::get('manage/edit{dept_id}',['as'=>'editDept','uses'=>'DepartmentController@edit']);
Route::post('manage/update_dept',['as'=>'update','uses'=>'DepartmentController@update']);

//------------------------------------ Delete---------------------------------------------------
Route::get('manage/delete{dept_id}',['as'=>'delete','uses'=>'DepartmentController@delete']);


//=================================Lecture Hall===============================================
//------------------------------------Edit----------------------------------------------------
Route::get('manage/edit{hall_id}',['as'=>'editlec','uses'=>'LectureHallController@edit']);


//=================================== Assign Course ===========================================
//----------------------------------- Edit ----------------------------------------------------
Route::get('manage/edit_course/edit_course{assignc_id}',['as'=>'editCourse','uses'=>'AssignCourseController@editCourse']);
Route::post('manage/update_course',['as'=>'update','uses'=>'AssignCourseController@update']);
//---------------------------------- Delete ---------------------------------------------------
Route::get('manage/delete{assignc_id}',['as'=>'delete','uses'=>'AssignCourseController@delete']);


//================================= Assign Courses to Lecturers =======================================
//-----------------------------------Edit---------------------------------------------------
Route::get('manage/assigncourse/editassign{assignc_id}',['as'=>'editAssign','uses'=>'AssignCourseController@editAssignCourseLec']);
Route::post('manage/assigncourse/updateAssign',['as'=>'updateAssignCourse','uses'=>'AssignCourseController@updateAssignCourseLec']);

//---------------------------------Delete---------------------------------------------------
Route::get('manage/assigncourse/deleteAssign{assignc_id}',['as'=>'deleteAssign','uses'=>'AssignCourseController@deleteAssignCourseLec']);


//--------------------------------- Check --------------------------------------------------
Route::get('manage/check',['as'=>'check','uses'=>'SemesterandCourseController@check']);
Route::post('manage/course_degree',['as'=>'checkCourse','uses'=>'SemesterandCourseController@getCourseList']);


//================================== Exam Registration =================================================
//------------------------------------ Check Exam Registration -------------------------------------------
Route::get('manage/checkExam',['as'=>'checkExam','uses'=>'ExamController@checkExam']);
Route::post('manage/exam_register',['as'=>'checkRegExam','uses'=>'ExamController@getExamRegList']);


//=================================== Student List ==============================================
//---------------------------------- Edit ------------------------------------------------------
Route::get('manage/edit_list/editstudent/editStudent{student_id}',['as'=>'editStudent','uses'=>'ReportController@editStudentList']);
Route::post('manage/updateSt',['as'=>'UpdateStudentList','uses'=>'ReportController@updateStudentList']);
 
//---------------------------------Delete---------------------------------------------------
Route::get('manage/delete_Student/deleteStudent{student_id}',['as'=>'deleteStudent','uses'=>'ReportController@deleteStudentList']);

});


