<table  width="3157" class="table table-bordered table-hover table-striped table-condensed" id="student-info">
    <caption>{{ $classes[0]->program }}</caption>
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
        @foreach($classes as $key => $c)
        <tr>
            <td>{{ ++$key }}</td>
<!--        <td>{{ sprintf("%05d",$c->student_id) }}</td>-->
            <td>{{ $c->Reg_no}}</td>
            <td>{{ $c->initials}}</td>
            <td>{{ $c->al_index }}</td>
            <td style="display:none;">{{ $c->full_name }}</td> 
            <td style="display:none;">{{ $c->first_name }}</td> 
            <td style="display:none;">{{ $c->last_name }}</td> 
            <td>{{ $c->sex }}</td>
            <td>{{ $c->national_card }}</td>
            <td>{{ $c->Level }}</td>
            <td>{{ $c->ugc_course }}</td>
            <td>{{ $c->combination }}</td>
            <td>{{ $c->degree_type }}</td>
            <td>{{ $c->admission_year }}</td>
            <td>{{ $c->email }}</td>
            <td>{{ $c->phone }}</td>
            <td style="display:none;">{{ $c->land_phone}}</td>
            <td>{{$c->p_address }}</td>
            <td style="display:none;">{{$c->hometown }}</td>  
            <td style="display:none;">{{$c->preferred_address }}</td> 
            <td style="display:none;">{{$c->nationality }}</td>
            <td style="display:none;">{{$c->ctizenship }}</td>
            <td style="display:none;">{{$c->school_town }}</td>
            <td style="display:none;">{{$c->z_score }}</td>
            <td style="display:none;">{{$c->username }}</td>
            <td style="display:none;">{{$c->student_status }}</td>
            <td style="display:none;">{{$c->dateregistered }}</td>
                                                      
        </tr>
        @endforeach
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
