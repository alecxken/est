@extends('layouts.template')
@section('content')

<div class="box-body">
  


<div class="col-md-12">
  <div class="row">
        <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Issue Log Tracking </h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                </button>
                <div class="btn-group">                 
                </div>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
        <div class="box-body table-responsive" id="table_wrapper">
                
                     <table id="report-table" class="table table-bordered table-striped small">
          <thead class="table-sm">
             <tr class="box-success">  
              
                <th>Issue Log</th>
                <th>Issue</th>
                <th>Action Plan</th>
                <th>Action Taken</th> 
                <th>Attachment</th> 
                <th>status</th> 
                <th>Closure Date</th>          
                <th>Action</th> 
                         
            </tr>
          </thead>
          <tbody>
            @if(!empty($data))
           @foreach ($data ?? '' as $user)
              <tr>
                 <td><a href="{{url('calendar-view/'.$user->log_id)}}" class="label label-success">{{$user->token}}</a></td>
                <td>
                   Reviewer: {{$user->reviewer}} = Supervisor :{{$user->supervisor}}
                </td>
          
                <td>{{$user->action_needed}}</td>
                <td>{{$user->action_done}}</td>
                <td><a href="{{url('calendar-pdf/'.$user->file)}}">{{$user->file}}</a></td>
                     

                <td>
                  @if($user->status == 'Done')
                    <label class="label label-warning">Done</label>
                  @elseif($user->status == 'Complete')
                     <label class="label label-success">Ok</label>
                  @else
                     <label class="label label-info">Pending</label>
                  @endif
                </td>

                <td>{{$user->close_date}}</td>
                <td>
                  @if($user->status == 'Done')
                   <a href="{{url('action-remedy/'.$user->id)}}" class="label label-success">Action</a>
                  @else
                  <a href="{{url('calendar-review/'.$user->log_id)}}" class="label label-warning">Action</a>
                  @endif
                </td>
               
              </tr>
          @endforeach
          @endif
          </tbody>
          </table>
       
          </div>



           </div>
       </div>
   </div>
</div>
    </div>

    <script type="text/javascript">

  
     $(document).ready(function() {
var table = $('#report-table').DataTable(
    {
    paging     : true,
    lengthChange: true,
    searching   : true,
    ordering   : true,
    info       : true,
    autoWidth   : true,
    buttons: [
        'excel'
    ]
    });

    table.buttons().container()
        .appendTo( '#table_wrapper .col-sm-6:eq(0)' );

} );

</script>
 
@endsection
