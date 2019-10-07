<table class="table table-bordered table-hover table-striped table-condensed" id="student-info">
    <caption><?php echo e($classes[0]->program); ?></caption>
    <thead>
        <tr>
            <th>#</th>
            <th>Student ID</th>
            <th>Name</th>
            <th>Sex</th>
            <th>Birth Date</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $classes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e(++$key); ?></td>
            <td><?php echo e(sprintf("%05d",$c->student_id)); ?></td>
            <td><?php echo e($c->name); ?></td>
            <td><?php echo e($c->sex); ?></td>
            <td><?php echo e($c->dob); ?></td>
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
