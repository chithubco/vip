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
        Update Profile <small>{{$user->first_name}} {{$user->last_name}}</small>
    </h1>
    <div class="row">
            <div class="col-md-8">
                <div class="card">
                    {{Form::open(array('route' => 'update_profile', 'method' => 'POST', 'files' => 'true'))}}
                        {{ csrf_field() }}
                        <div class="header text-center">Update Profile</div>
                        <div class="content">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">First Name </label>
                                        <input class="form-control" name="first_name" type="text" placeholder="Enter First name" value="{{$user->first_name}}" required/>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Last Name </label>
                                        <input class="form-control" name="last_name" type="text" placeholder="Enter Last Name" value="{{$user->last_name}}" required/>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Title </label>
                                        <input class="form-control" name="title" type="text" placeholder="Mr/Mrs/Miss/Pastor..." value="{{$user->title}}" required/>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Sex </label>
                                        <select name="sex" class="form-control" required>
                                          <option value="M">Male</option>
                                          <option value="F">Female</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Email Address </label>
                                        <input class="form-control" name="email" type="text" placeholder="Enter Email" value="{{$user->email}}" required/>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Phone Number </label>
                                        <input class="form-control" name="phone_no" type="text" placeholder="Enter Phone Number" value="{{$user->phone_no}}"/>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label"> Pick a picture</label> <br/>
                                        <input class="form-control" type="file" name="profile_picture_path" accept="image/*" value="{{$user->profile_picture_path}}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">Postal Address</label> <br/>
                                        <textarea class="form-control" name="postal_address" required> {{$user->postal_address}}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">City (Postal Address)</label> <br/>
                                        <input class="form-control" name="postal_address_city" placeholder="City for postal address" value="{{$user->postal_address_city}}" required/>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">State (Postal Address)</label> <br/>
                                        <input class="form-control" name="postal_address_state" placeholder="State for postal address" value="{{$user->postal_address_state}}" required/>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Country (Postal Address)</label> <br/>
                                        <input class="form-control" name="postal_address_country" placeholder="Country for postal address" value="{{$user->postal_address_country}}" required/>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label"> Address</label> <br/>
                                        <textarea class="form-control" name="address" required> {{$user->address}}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">City (Address)</label> <br/>
                                        <input class="form-control" name="address_city" placeholder="City for address" value="{{$user->address_city}}" required/>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">State (Address)</label> <br/>
                                        <input class="form-control" name="address_state" placeholder="State for address" value="{{$user->address_state}}" required/>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Country (Address)</label> <br/>
                                        <input class="form-control" name="address_country" placeholder="Country for address" value="{{$user->address_country}}" required/>
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
