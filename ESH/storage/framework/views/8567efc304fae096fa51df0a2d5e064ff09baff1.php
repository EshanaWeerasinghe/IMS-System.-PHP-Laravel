<table  width="3157" class="table table-bordered table-hover table-striped table-condensed" id="student-info">
    <caption><?php echo e($classes[0]->program); ?></caption>
    <thead>
        <tr bgcolor="#01579b">
            <th width="52"></th>
            <th width="50">Reg.No</th>
            <th width="93">Name with Initials</th>
            <th width="50">AL Index</th>
            <th style="display:none;" width="84">Full Name</th>
            <th style="display:none;" width="91">First Name</th>
            <th style="display:none;" width="96">Last Name</th>
            <th width="94">Gender</th>
            <th width="54">NIC</th>
            <th width="115">Level</th>
            <th width="67">UGC Course</th>
            <th width="103">Combination</th>
            <th width="107">Degree Type</th>
            <th width="109">Adm App Year</th>
            <th width="127">E-mail</th>
            <th width="65">Phone</th>
            <th style="display:none;" width="71">Land Phone</th>
            <th width="116">Permanent Address</th>
            <th style="display:none;" width="111">Home Town</th>
            <th style="display:none;" width="111">Preferred Address</th>
            <th style="display:none;" width="159">Nationality</th>
            <th style="display:none;" width="108">Citizenship</th>
            <th style="display:none;" width="106">School Town</th>
            <th style="display:none;" width="125">Z-Score</th>
            <th style="display:none;" width="95">Username</th>
            <th style="display:none;" width="105">Student Status</th>
            <th style="display:none;"width="50">Date Register</th>           
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $classes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e(++$key); ?></td>
<!--        <td><?php echo e(sprintf("%05d",$c->student_id)); ?></td>-->
            <td><?php echo e($c->Reg_no); ?></td>
            <td><?php echo e($c->initials); ?></td>
            <td><?php echo e($c->al_index); ?></td>
            <td style="display:none;"><?php echo e($c->full_name); ?></td> 
            <td style="display:none;"><?php echo e($c->first_name); ?></td> 
            <td style="display:none;"><?php echo e($c->last_name); ?></td> 
            <td><?php echo e($c->sex); ?></td>
            <td><?php echo e($c->national_card); ?></td>
            <td><?php echo e($c->Level); ?></td>
            <td><?php echo e($c->ugc_course); ?></td>
            <td><?php echo e($c->combination); ?></td>
            <td><?php echo e($c->degree_type); ?></td>
            <td><?php echo e($c->admission_year); ?></td>
            <td><?php echo e($c->email); ?></td>
            <td><?php echo e($c->phone); ?></td>
            <td style="display:none;"><?php echo e($c->land_phone); ?></td>
            <td><?php echo e($c->p_address); ?></td>
            <td style="display:none;"><?php echo e($c->hometown); ?></td>  
            <td style="display:none;"><?php echo e($c->preferred_address); ?></td> 
            <td style="display:none;"><?php echo e($c->nationality); ?></td>
            <td style="display:none;"><?php echo e($c->ctizenship); ?></td>
            <td style="display:none;"><?php echo e($c->school_town); ?></td>
            <td style="display:none;"><?php echo e($c->z_score); ?></td>
            <td style="display:none;"><?php echo e($c->username); ?></td>
            <td style="display:none;"><?php echo e($c->student_status); ?></td>
            <td style="display:none;"><?php echo e($c->dateregistered); ?></td>
                                                      
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<script type="text/javascript">
    $(document).ready(function(){
        $('#student-info').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copyHtml5',
                'excelHtml5',
                'csvHtml5',
                'pdfHtml5'
            ]
            
        })
    })
</script>
