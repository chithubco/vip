@extends('layouts.main')

@section('navbar')
  @include('user.navbar')
@endsection

@section('express_interest')
  active
@endsection

@section('content')
  @if($eoi)
  <div class="col-lg-12">
      <div class="alert alert-info alert-dismissable">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          <i class="fa fa-info-circle"></i>  <strong>You have filled the "Expression of Interest" Form</strong>
      </div>
  </div>
  <div>
      <a href="#" class="btn btn-warning pull-right" style="margin-left:10px" data-toggle="modal" data-target="#modal_edit_{{$eoi->id}}"> Edit Interest Form </a>
  </div>
  @include('expressionofinterest.edit')
  <div class="container-fluid">
     <div class="col-lg-12">
       <h2>Expression Of Interest Details</h2>
          <div class="table-responsive">
              <table class="table table-hover table-striped">
                  <thead>
                     <tr><th>Field</th><th>Content</th></tr>
                  </head>
                  <tbody>
                    <tr><td>Number Of Hectares</td><td>{{$eoi->number_of_hectares}}</td></tr>
                    <tr><td>Proposed Subsriction Date</td><td>{{$eoi->proposed_subscription_date}}</td></tr>
                    <tr><td>Postal Address</td><td>{{$eoi->postal_address}}</td></tr>
                    <tr><td>Occupation</td><td>{{$eoi->occupation}}</td></tr>
                  </tbody>
              </table>
          </div>
      </div>
    </div>
  @else
      <div class="container-fluid">
        <h1 class="page-header">
            Expression Of Interest <small>{{$user->first_name}} {{$user->last_name}}</small>
        </h1>
        <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        {{Form::open(array('route' => 'save_express_interest', 'method' => 'POST', 'files' => 'true'))}}
                            {{ csrf_field() }}
                            <div class="content">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Full Name </label>
                                            <input class="form-control" name="full_name" type="text"  value="{{$user->first_name}} {{$user->last_name}}" disabled/>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Email Address </label>
                                            <input class="form-control" name="email" type="text" value="{{$user->email}}" disabled=""/>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Phone Number </label>
                                            <input class="form-control" name="phone_no" type="text" placeholder="Enter Phone Number" value="{{$user->phone_no}}" disabled/>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-12">
                                      <div class="form-group">
                                          <label class="control-label"> Address</label> <br/>
                                          <textarea class="form-control" name="address" rows="5" cols="10" disabled style="resize:none"> {{$user->address}}</textarea>
                                      </div>
                                  </div>
                                </div>
                                <small>If you need to make changes to the information above, <a href="{{route('user_profile')}}">update</a> your profile.</small>
                                <hr/>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label"> Occupation</label> <br/>
                                            <input class="form-control" name="occupation" type="text" placeholder="occupation" value="{{old('occupation')}}"/>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">Number of Hectares </label>
                                            <input class="form-control" name="number_of_hectares" type="text" placeholder="Number Of Hectares" value="{{old('number_of_hectares')}}"/>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label"> Proosed Subscription Date </label>
                                            <input class="form-control" name="proposed_subscription_date" type="date" value="{{old('proposed_subscription_date')}}"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">Postal Address </label>
                                            <textarea class="form-control" name="postal_address" rows="5" cols="10" style="resize:none"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <br/> <br/>


                            <div class="footer text-center">
                                <button type="submit" class="btn btn-info btn-fill btn-wd">Submit</button>
                            </div>
                        </div>
                        </form>
                </div>

            </div>
            @include('layouts.sessions')
            @include('layouts.errors')
        </div>
      </div>
    @endif
@endsection
