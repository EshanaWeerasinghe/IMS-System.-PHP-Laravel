@extends('layouts.master')
@section('content')

<div class="row">
    <div class="col-lg-8">
        <h3 class="page-header"><i class="fa fa-file-text-o"></i>Marks List</h3>
        <ol class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
            <li><i class="icon_document_alt"></i>Marks</li>
            <li><i class="fa fa-file-text-o"></i>Marks List</li>
        </ol>
    </div>
</div>
<div class="panel col-lg-8">

    <div class="panel-body">
           <table  class="table table-bordered table-condensed table-striped" id="dept-info">
           <col width ="50">            
               <thead>
               <th style="text-align:center">No</th>
               <th style="text-align:center">Index Number</th>
               <th style="text-align:center">Marks</th>             
               </thead>               
               <tbody>
                   @foreach($marks as $Key =>$ma)
                        <tr>
                            <td>{{ ++$Key }}</td>                          
                            <td>{{ $ma->index_no }}</td>
                            <td>{{ $ma->marks }}</td>                                                                       
                        </tr>
                   @endforeach
               </tbody>
           </table>       
        </div>
    
        <div class="footer">
        {{ $marks->render() }}
        </div>
   </div>

@endsection

@section('script')
<script type="text/javascript">
    $(document).ready(function(){
        $('#dept-info').DataTable({
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
@endsection