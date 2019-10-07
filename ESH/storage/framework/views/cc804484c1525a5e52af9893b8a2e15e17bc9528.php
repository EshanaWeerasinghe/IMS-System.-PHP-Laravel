<!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
<!--sidebar menu start-->
        <ul class="sidebar-menu">
          <li class="active">
            <a class="" href="<?php echo e(route('dashboard')); ?>">
                          <i class=""></i>
                          <span>Dashboard</span>
                      </a>
          </li>         
<!--Home-->
          <li class="sub-menu">
            <a href="<?php echo e(route('dashboard')); ?>" class="">
                          <i class="icon_house_alt"></i>
                          <span>Home</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">            
            </ul>
          </li>
          
         <?php if(!Auth::guest() && Auth::user()->hasRole(['admin'])): ?>  
<!-- System-->
           <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_toolbox_alt"></i>
                          <span>System</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="form_component.html">About System</a></li>
              <li><a class="" href="form_validation.html">Description</a></li>
            </ul>
          </li>
        <?php endif; ?>
        
        
<!--Courses-->
          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_book_alt"></i>
                          <span>Courses</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="<?php echo e(route('manageStudentCourse')); ?>">Manage Course</a></li>
              <li><a class="" href="<?php echo e(route('SemesterandCourse')); ?>">Semester and Course</a></li>
              <li><a class="" href="<?php echo e(route('check')); ?>">Check</a></li>
              <li><a class="" href="<?php echo e(route('SemesterCourseList')); ?>">Combination List</a></li>
              <li><a class="" href="<?php echo e(route('manageStudentDegree')); ?>">Degree</a></li>
              <li><a class="" href="<?php echo e(route('DegreeInfo')); ?>">Degree List</a></li>
              <li><a class="" href="<?php echo e(route('CourseInfo')); ?>">Course List</a></li>
              <li><a class="" href="<?php echo e(route('getSubject')); ?>">Subject</a></li>
              <li><a class="" href="<?php echo e(route('subjectList')); ?>">Subject List</a></li>       
            </ul>
          </li> 
                
          
<!--Student-->
         <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_contacts"></i>
                          <span>Student</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="<?php echo e(route('getStudentRegister')); ?>">Create Student</a></li>
              <li><a class="" href="<?php echo e(route('studentInfo')); ?>">Find Student</a></li>
              <li><a class="" href="<?php echo e(route('getStudentist')); ?>">Upload Students List</a></li>
              <li><a class="" href="<?php echo e(route('getStudentCourses')); ?>">Edit Student</a></li>
              <li><a class="" href="<?php echo e(route('Upload2')); ?>">Upload pdf</a></li>            
              <li><a class="" href="<?php echo e(route('Upload')); ?>">Document</a></li>
              <li><a class="" href="form_validation.html">University E-mail</a></li>
              <li><a class="" href="form_validation.html">Change Combination</a></li>   
              <li><a class="" href="form_validation.html">Change Degree Type</a></li>
              <li><a class="" href="form_validation.html">Batch Missed Students</a></li>
              <li><a class="" href="form_validation.html">Welfare Details</a></li>
              <li><a class="" href="form_validation.html">New Student</a></li>
              <li><a class="" href="form_validation.html">Force Register</a></li>
              <li><a class="" href="form_validation.html">Upload Profile Pic</a></li>
              <li><a class="" href="form_validation.html">Take Pictures</a></li>
              <li><a class="" href="form_validation.html">Emergency Content</a></li>
              <li><a class="" href="form_validation.html">Active with declaration</a></li>
              <li><a class="" href="form_validation.html">Register Students</a></li>
              <li><a class="" href="form_validation.html">Display Register</a></li>
              <li><a class="" href="form_validation.html">Reports</a></li>
              <li><a class="" href="form_validation.html">Utilities</a></li>
              <li><a class="" href="buttons.html">Buttons</a></li>
              <li><a class="" href="grids.html">Grids</a></li>
            </ul>
          </li>  
          
          
<!--Semester-->
        <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_calendar"></i>
                          <span>Semesters</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="<?php echo e(route('manageSemester')); ?>">View/Edit</a></li>      
            </ul>
          </li>
          
          
 <?php if(!Auth::guest() && Auth::user()->hasRole(['admin'])): ?>     
<!--Medical-->
  <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_document_alt"></i>
                          <span>Medicals</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="form_component.html">Apply Medicals</a></li>
              <li><a class="" href="form_validation.html">Approve Medical by Doctor</a></li>        
              <li><a class="" href="form_validation.html">Search Medical</a></li> 
              <li><a class="" href="form_component.html">Approve Medicals</a></li>
              <li><a class="" href="form_component.html">Add Medicals to Students</a></li>
              <li><a class="" href="form_component.html">Students Medicals</a></li>
            </ul>
          </li>   
<?php endif; ?>          
          
<!--Departments-->
  <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_building"></i>
                          <span>Departments</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="<?php echo e(route('manageDepartment')); ?>">Add Departments</a></li>
              <li><a class="" href="<?php echo e(route('DepartmentList')); ?>">Department Report</a></li>        
            </ul>
          </li>
          
<?php if(!Auth::guest() && Auth::user()->hasRole(['admin'])): ?>         
<!-- Lecture Halls-->
    <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_building_alt"></i>
                          <span>Lecture Halls</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="<?php echo e(route('getLectureHall')); ?>">New Hall</a></li>   
              <li><a class="" href="<?php echo e(route('hallList')); ?>">Lecture Halls</a></li>                                
            </ul>
          </li>
<?php endif; ?>
          
<!--Lectures-->
  <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_contacts"></i>
                          <span>Lecturers</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub"> 
             <li><a class="" href="<?php echo e(route('LecturerList')); ?>">Lecturers List</a></li>
             <li><a class="" href="<?php echo e(route('getLecturer')); ?>">New Lecturer</a></li>
             <li><a class="" href="<?php echo e(route('AssignCourses')); ?>">Assign Course</a></li>
             <li><a class="" href="<?php echo e(route('AssignCoursetList')); ?>">Assign Course List</a></li>                       
            </ul>
  </li>    
  
  
<!--TimeTable-->
  <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_document_alt"></i>
                          <span>Time Table</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
             <li><a class="" href="<?php echo e(route('getTimetableList')); ?>">Time Table</a></li>
              <li><a class="" href="<?php echo e(route('getAvailability')); ?>">Lecture Hall Availability</a></li>
<?php if(!Auth::guest() && Auth::user()->hasRole(['admin'])): ?>  
              <li><a class="" href="<?php echo e(route('getTimetable')); ?>">Insert Time Table</a></li>
<?php endif; ?>          
            </ul>
  </li> 
  
    
<!--Exams-->
          <?php if(!Auth::guest() && Auth::user()->hasRole(['admin'])): ?>
  <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_pencil"></i>
                          <span>Exams</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
             <li><a class="" href="<?php echo e(route('checkExam')); ?>">Exam Registration</a></li>
             <li><a class="" href="grids.html">Exam Schedule</a></li> 
             <li><a class="" href="grids.html">Student Course Marks </a></li>
             <li><a class="" href="<?php echo e(route('getImport')); ?>">Upload Mark Sheet </a></li>
             <li><a class="" href="<?php echo e(route('getMarkList')); ?>">Get Marks Report</a></li>
             <li><a class="" href="grids.html">Edit Marks List</a></li>
             <li><a class="" href="grids.html">Course Status</a></li>
             <li><a class="" href="grids.html">Confirm Marks</a></li>
             <li><a class="" href="grids.html">Marks Book</a></li>
             <li><a class="" href="grids.html">My Results</a></li>
             <li><a class="" href="grids.html">Privious Results</a></li>
             <li><a class="" href="buttons.html">Exam Repeat </a></li>            
             <li><a class="" href="grids.html">Upload Atendance Sheet</a></li>            
             <li><a class="" href="grids.html">Marks Unlock</a></li>
             <li><a class="" href="<?php echo e(route('getstuinsert')); ?>">Test</a></li>
            </ul>
          </li> 
        <?php endif; ?> 
        
        
<!--Report-->
<li class="sub-menu">
    <a href="javascript:;" class="">
        <i class="icon_datareport"></i>
        <span>Report</span>
        <span class="menu-arrow arrow_carrot-right"></span>
    </a>
    <ul class="sub">        
        <li><a class="" href="<?php echo e(route('getStudentListMultiClass')); ?>">Student List</a></li> 
        <li><a class="" href="<?php echo e(route('getNewStudentRegister')); ?>">New Student Enroll</a></li>   
    </ul>       
</li>


<!--Results-->
<li class="sub-menu">
    <a href="javascript:;" class="">
        <i class="icon_datareport_alt"></i>
            <span>Results</span>
            <span class="menu-arrow arrow_carrot-right"></span>
    </a>
        <ul class="sub">
    <li><a class="" href="general.html">Results</a></li>
        </ul>
</li>

    
 <?php if(!Auth::guest() && Auth::user()->hasRole(['admin'])): ?>          
 <!--Welfare-->
          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_adjust-vert"></i>
                          <span>Welfare</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
             <li><a class="" href="general.html"></a></li>
                 
            </ul>
          </li>  
<?php endif; ?>
  
 <?php if(!Auth::guest() && Auth::user()->hasRole(['admin'])): ?>
  <!--My Profile-->
        <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_profile"></i>
                          <span>My Profile</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
            <li><a class="" href="general.html">Edit Profile</a></li>
              <li><a class="" href="buttons.html">Change Password</a></li>
              <li><a class="" href="grids.html">Activity Log</a></li>                
            </ul>
          </li>      
<?php endif; ?>          
               
 <?php if(!Auth::guest() && Auth::user()->hasRole(['admin'])): ?>          

 
<?php endif; ?>          
        <li>
            <a class="" href="chart-chartjs.html">
                          <i class="icon_piechart"></i>
                          <span>Statistics</span>
                      </a>
        </li>

 <?php if(!Auth::guest() && Auth::user()->hasRole(['admin'])): ?>          
          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_table"></i>
                          <span>Help</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="basic_table.html"></a></li>
            </ul>
          </li>
<?php endif; ?>

          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="logout"></i>
                          <span>Logout</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="profile.html">Profile</a></li>
              <li><a class="" href="login.html"><span>Logout</span></a></li>
              <li><a class="" href="contact.html"><span>Contact Page</span></a></li>
              <li><a class="" href="blank.html">Blank Page</a></li>
              <li><a class="" href="404.html">404 Error</a></li>
            </ul>
          </li>

        </ul>
        <!-- sidebar menu end-->
      </div>
       
    </aside>
     
<div id="bcimg" >
       
</div>