@extends('layouts.main')

@section('navbar')
  @include('user.navbar')
@endsection

@section('express_interest')
  active
@endsection

@section('content')
<div class="container-fluid">
  <h1 class="page-header">
      Expression Of Interest <small>{{$user->first_name}} {{$user->last_name}}</small>
  </h1>
  
</div>
@endsection
