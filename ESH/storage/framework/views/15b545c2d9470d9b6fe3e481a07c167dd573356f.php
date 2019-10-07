<div class="modal fade" id="choose-academic" role="dialog">
    <div class="modal-dialog modal-xs">
        <section class="panel panel-default">
            <header class="panel-heading">
                Choose Academic
            </header>
            <form action="#" class="form-horizontal" id="frm-view-class" method="POST">              
                <div class="panel-body" style="border-bottom: 1px solid #ccc">
                    <div class="form-group">
                        
                        <div class="col-sm-6">
                            <label for="academic-year">Academic year</label>
                            <div class="input-group">
                                <select class="form-control" name="academic_id" id="academic_id">
                                   
                                    <?php $__currentLoopData = $academics; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $y): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($y->academic_id); ?>"><?php echo e($y->academic); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>   
                                <div class="input-group-addon">
                                    <span class="fa fa-plus" id="add-more-academic"></span>
                                </div>
                            </div>
                        </div>
                        
                        
                                
                        <div class="col-sm-6">
                            <label for="program">Year/Level</label>
                            <div class="input-group">
                                <select class="form-control" name="program_id" id="program_id">
                                  <option value="">----------</option>
                                    <?php $__currentLoopData = $programs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($p->program_id); ?>"><?php echo e($p->program); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
                                </select>
                                <div class="input-group-addon">
                                    <span class="fa fa-plus" id="add-more-program"></span>
                                </div>
                            </div>
                        </div>        
                        
                          
                                                  
                          <div class="col-sm-6">
                            <label for="level">Indicate</label>
                            <div class="input-group">
                                <select class="form-control" name="level_id" id="level_id">
                                    
                                </select>
                                <div class="input-group-addon">
                                    <span class="fa fa-plus" id="add-more-level"></span>
                                </div>
                            </div>
                        </div>        
                        
                                                   
                          <div class="col-sm-6">
                            <label for="Shift">Semester</label>
                            <div class="input-group">
                                <select class="form-control" name="shift_id" id="add-more-shift_id">
                                    <?php $__currentLoopData = $shift; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $shf): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($shf->shift_id); ?>"><?php echo e($shf->shift); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                                <div class="input-group-addon">
                                    <span class="fa fa-plus" id="add-more-shift"></span>
                                </div>
                            </div>
                        </div>        
                        
                                                 
                          <div class="col-sm-6" style="display: none">
                            <label for="time">Time</label>
                            <div class="input-group">
                                <select class="form-control" name="time_id" id="time_id">
                                    <?php $__currentLoopData = $time; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($t->time_id); ?>"><?php echo e($t->time); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                                <div class="input-group-addon">
                                    <span class="fa fa-plus" id="add-more-time"></span>
                                </div>
                            </div>
                        </div>        
                        
                                           
                          <div class="col-sm-3" style="display: none">
                            <label for="batch">Batch</label>
                            <div class="input-group">
                                <select class="form-control" name="batch_id" id="batch_id">
                                    <?php $__currentLoopData = $batch; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($b->batch_id); ?>"><?php echo e($b->batch); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                                <div class="input-group-addon">
                                    <span class="fa fa-plus" id="add-more-batch"></span>
                                </div>
                            </div>
                        </div>        
                        
                          
                          
                          <div class="col-sm-3" style="display: none">
                            <label for="group">Group</label>
                            <div class="input-group">
                                <select class="form-control" name="group_id" id="group_id">
                                    <?php $__currentLoopData = $group; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                     <option value="<?php echo e($b->group_id); ?>"><?php echo e($b->groups); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                                <div class="input-group-addon">
                                    <span class="fa fa-plus" id="add-more-group"></span>
                                </div>
                            </div>
                        </div>                                                       
              </div>              
              </div>
            </form>
            
            
            <form action="#" method="get" id="frm-multi-class">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Class Information 
                    <button type="button" id="btn-go" class="btn btn-info btn-xs pull-right" style="margin-top:5px">Go</button>
                </div>
                <div class="panel-body" id="add-class-info">
                
                </div>
            </div>
            </form>
            
        </section>
    </div>
</div>


