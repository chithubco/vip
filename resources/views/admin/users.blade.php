@extends('layouts.main')

@section('manage_users_active')
  active
@stop

@section('navbar')
  @include('admin.navbar')
@endsection

@section('script')
<script>
  $(document).ready(function() {
    $('#editUser').formValidation({
        framework: 'bootstrap',
        excluded: ':disabled',
        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            first_name: {
                validators: {
                    notEmpty: {
                        message: 'The first name is required'
                    }
                }
            },
            last_name: {
                validators: {
                    notEmpty: {
                        message: 'The last name is required'
                    }
                }
            },
            email: {
                validators: {
                    notEmpty: {
                        message: 'The email is required'
                    }
                }
            },
            phone_number: {
                validators: {
                    notEmpty: {
                        message: 'The phone number is required'
                    }
                }
            }
        }
    });
});
</script>
@stop

@section('content')
     <div class="container-fluid">
       @if (session('success'))
           <div class="col-md-12">
             <div class="alert alert-success alert-dismissable">
                 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                 <i class="fa fa-info-circle"></i> <span>{{session('success')}}</span>
             </div>
           </div>
       @endif
       @if (session('error'))
       <div class="col-md-12">
         <div class="alert alert-danger alert-dismissable">
             <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
             <i class="fa fa-remove"></i> <span>{{session('error')}}</span>
         </div>
       </div>
       @endif
        <div class="col-lg-12">
          <h2>All Users</h2>
             <div class="table-responsive">
                 <table class="table table-hover table-striped">
                     <thead>
                         <tr>
                             <th>S/N</th>
                             <th>Full Name</th>
                             <th>Email Address</th>
                             <th>Phone Number</th>
                             <th> Actions </th>
                         </tr>
                     </thead>
                     <tbody>
                       @foreach($users as $user)
                         <tr>
                             <td>{{$loop->index + 1}}</td>
                             <td>{{$user->first_name}} {{$user->last_name}}</td>
                             <td>{{$user->email}}</td>
                             <td>{{$user->phone_no}}</td>
                             <td>
                                <a data-toggle="modal" data-target="#modal_edit_{{$user->id}}" id="edit-bu-btn" style="cursor:pointer;">
                                    <i class="fa fa-pencil text-warning"></i> Edit
                                </a>
                                <a data-toggle="modal" data-target="#modal_delete_{{$user->id}}" id="delete-bu-btn" style="cursor:pointer;margin-left:20px;">
                                    <i class="fa fa-trash-o text-danger"></i> Delete User
                                </a>
                                @if($user->status)
                                <a href="{{route('activate_user', $user->id)}}" style="cursor:pointer;margin-left:30px;">
                                  <i class="fa fa-plus-circle text-success"></i> Activate User
                                </a>
                                @else
                                <a href="{{route('deactivate_user', $user->id)}}" style="cursor:pointer;margin-left:30px;">
                                  <i class="fa fa-minus-circle text-danger"></i> Deactivate User
                                </a>
                                @endif
                            </td>
                         </tr>
                         @include('admin.edit')
                         @include('admin.delete')
                        @endforeach
                     </tbody>
                 </table>
             </div>
         </div>
       </div>
@endsection
