@extends('layouts.main')

@section('navbar')
  @include('user.navbar')
@endsection

@section('user_profile')
  active
@endsection

@section('content')
  <div class="container-fluid">
    <h1 class="page-header">
        Change Password
    </h1>
    <div class="row">
            <div class="col-md-8">
                <div class="card">
                    {{Form::open(array('route' => 'save_settings', 'method' => 'POST', 'files' => 'true'))}}
                        {{ csrf_field() }}
                        <div class="content">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Old Password </label>
                                        <input class="form-control" name="old_password" type="password" placeholder="Enter Old Password" value="{{old('old_password')}}"/>
                                    </div>
                                </div>
                          </div>
                          <div class="row">
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <label class="control-label">New Password </label>
                                      <input class="form-control" name="new_password" type="password" placeholder="Enter New Password" value="{{old('new_password')}}"/>
                                  </div>
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <label class="control-label">Confirm New Password </label>
                                      <input class="form-control" name="confirm_password" type="password" placeholder="Confirm New Password" value="{{old('new_password')}}"/>
                                  </div>
                              </div>
                          </div>
                            <br/> <br/>
                        <div class="footer text-center">
                            <button type="submit" class="btn btn-info btn-fill btn-wd">Save</button>
                        </div>
                    </div>
                    </form>
            </div>

        </div>
        @include('layouts.sessions')
        @include('layouts.errors')
    </div>
  </div>
@endsection
