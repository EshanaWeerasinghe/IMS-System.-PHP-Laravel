<script type="text/javascript">
 $(document).on('click','#class-edit',function(e){       
        e.preventDefault();
        //showClassInfo();
        $('#class_id').val($(this).data('id'));
        $('.academic-detail p').text($(this).text());
        $('#choose-academic').modal('hide');
    })
    //============================================
    $('#academic_id').on('change',function(e){
            showClassInfo();
        })
         //===========================================
         $('#level_id').on('change',function(e){
            showClassInfo();
        })
         //===========================================
          $('#shift_id').on('change',function(e){
            showClassInfo();
        })
         //===========================================
        $('#time_id').on('change',function(e){
            showClassInfo();
        })
         //===========================================
           $('#batch_id').on('change',function(e){
            showClassInfo();
        })
         //===========================================
            $('#group_id').on('change',function(e){
            showClassInfo();
        })
        //=============================================
        $("#frm-view-class #program_id").on('change',function(e){
           var program_id = $(this).val();
           var level = $('#level_id')
           $(level).empty();
            $.get("{{route('showLevel')}}",{program_id:program_id},function(data){
                         
                $(level).append($('<option/>',{
                  value : data.level_id,
                   text  : data.level
                }))
               
               })
               showClassInfo($('#academic_id').val());
           })
        //=============================================
//         $("frm-create-class #program_id").on('change',function(e){
//             var program_id = $(this).val();
//             var level = $('#level_id')y
//             $(level).empty();
//             $.get("{{ route('showLevel')}}",{program_id:program_id},function(data){
//                 $.each(data,function(i,l){
//                     $(level).append($("<option/>",{
//                         value : l.level_id,
//                         text  : l.level
//                     }))
//                 })
//                 showClassInfo($('#academic_id').val(),program_id);
//             })            
//         })   
        //=============================================
    $('#show-class-info').on('click',function(e){
        e.preventDefault();
        showClassInfo();
        $('#choose-academic').modal('show');
    })
    //==================================================
      function showClassInfo()       
         {              
             var data = $('#frm-view-class').serialize();                     
             $.get("{{ route('showClassInformation')}}" ,data,function(data){
                 $('#add-class-info').empty().append(data);
                 $('td#hidden').addClass('hidden');
                 $('th#hidden').addClass('hidden');
                 MergeCommonRows($('#table-class-Info'));
             })       
         }  
         
    //====================================================
    function MergeCommonRows(table){
         var firstColumnBrakes = [];
         $.each(table.find('th'),function(i){
             var previous = null, cellToExtend = null, rowspan = 1;
             table.find("td:nth-child(" + i + ")").each(function(index,e){
                 var jthis = $(this), content = jthis.text();
                 if (previous == content && content !== "" && $.inArray(index, firstColumnBrakes) === -1){
                     jthis.addClass('hidden');
                     cellToExtend.attr("rowspan",(rowspan = rowspan+1));
                 }else{
                     if(i === 1) firstColumnBrakes.push(index);
                     rowspan = 1;
                     previous = content;
                     cellToExtend = jthis;
                 }
             });
         });
         $('td.hidden').remove();
    }
    
</script>
    
