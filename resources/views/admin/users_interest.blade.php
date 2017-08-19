@extends('layouts.main')

@section('manage_users_active')
  active
@stop

@section('navbar')
  @include('admin.navbar')
@endsection

@section('script')
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
                             <th>Number Of Hectares</th>
                             <th>Proposed Subscription Date</th>
                         </tr>
                     </thead>
                     <tbody>
                       @php $x = 0  @endphp
                       @foreach($eois as $eoi)
                         @foreach($users as $user)
                              @if($eoi->user_id === $user->id)
                               <tr>
                                   <td>{{++$x}}</td>
                                   <td>{{$user->first_name}} {{$user->last_name}}</td>
                                   <td>{{$user->email}}</td>
                                   <td>{{$eoi->number_of_hectares}}</td>
                                   <td>{{$eoi->proposed_subscription_date}}</td>
                               </tr>
                               @endif
                          @endforeach
                        @endforeach
                     </tbody>
                 </table>
             </div>
         </div>
       </div>
@endsection
