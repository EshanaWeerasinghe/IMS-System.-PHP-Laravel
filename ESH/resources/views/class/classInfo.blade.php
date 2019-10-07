<style type="text/css">
    .academic-detail{
        white-space: nowrap;
        width: 400px;
    }
    
    #table-class-info{
        width: 100%;
    }

    table tbody > tr > td {
       vertical-align:middle;
    }

</style>

<table class="table-hover table-striped table-condensed table-bordered" id="table-class-info" >
    <thead>
        <tr>
            <th>Ac:Year</th>
            <th>Year</th>
            <th>Semester</th>
            <th>Status</th>
          
            <th>Academic Detail</th>
            <th id="hidden" >Action</th>          
            <th>
                <input type="checkbox" id="checkall">
            </th>
        </tr>
    </thead>
    <tbody>
        @foreach($classes as $key => $c)
        <tr>
            <td>{{$c->academic }}</td>
            <td>{{ $c->program }}</td>
            <td>{{ $c->shift }}</td>
            <td>{{ $c->level }}</td>
                           
            <td class="academic-detail">
                <a href="#" data-id="{{$c->class_id }}" id="class-edit">
         Academic Year:{{ $c->academic}} / Level: {{ $c->program}} / Semester: {{ $c->shift }} / Status: {{ $c->level }} / StartDate:{{date("d-M-y",strtotime($c->start_date))}} / EndDate: {{ date("d-M-Y",strtotime($c->end_date))}}
         </a>
            </td>          
            <td style="vertical-align:middle;width:50px;">
                <button value="{{ $c->class_id }}" class="btn btn-danger btn-sm del-class">Del</button>
            </td>
            <td>
                <input type="checkbox" name="chk[]" value="{{ $c->class_id }}" class="chk">
            </td>
        </tr>     
        @endforeach
    </tbody>
</table>
 
