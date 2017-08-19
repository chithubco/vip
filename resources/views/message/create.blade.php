@extends('layouts.main')

@section('navbar')
  @include('user.navbar')
@endsection

@section('message')
  active
@endsection

@section('content')
      <div class="container-fluid">
        <h2 class="page-header">
            Send Message To Administrator
        </h2>
        <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        {{Form::open(array('route' => 'save_message', 'method' => 'POST', 'files' => 'true'))}}
                            {{ csrf_field() }}
                            <div class="content">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Title </label>
                                            <input class="form-control" name="title" type="text"  value="{{old('title')}}"/>
                                        </div>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">Message </label>
                                            <textarea class="form-control" name="message" style="resize:none">{{old('message')}}</textarea>
                                        </div>
                                    </div>
                                </div>
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
@endsection
