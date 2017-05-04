@extends('layouts.main')

@section('navbar')
  @include('user.navbar')
@endsection

@section('registration')
  active
@endsection

@section('script')
<script>
  var button =document.getElementById("submit");
  button.disabled = true;
  var checkbox = document.getElementById("form_checkbox");
  checkbox.onchange = function() {
    button.disabled = !this.checked;
  }
</script>
@endsection

@section('content')
  @if($registration)
  <div class="col-lg-12">
      <div class="alert alert-info alert-dismissable">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          <i class="fa fa-info-circle"></i>  <strong>You have filled the Registration Form</strong>
      </div>
  </div>
    <div class="container-fluid">
     <div class="col-lg-12">
       <h2>Registration Form</h2>
          <div class="table-responsive">
              <table class="table table-hover table-striped">
                  <thead>
                     <tr><th>Title</th><th>Content</th></tr>
                  </head>
                  <tbody>
                    <tr><td>Proposed Investment Amount</td><td>{{$registration->proposed_investment_amount}}</td></tr>
                    <tr><td>Amount Paid</td><td>{{$registration->amount_paid}}</td></tr>
                    <tr><td>Bank Name</td><td>{{$registration->bank_name}}</td></tr>
                    <tr><td>Account Name</td><td>{{$registration->account_name}}</td></tr>
                    <tr><td>Account Number</td><td>{{$registration->account_number}}</td></tr>
                  </tbody>
              </table>
          </div>
      </div>
    </div>
  @else
      <div class="container-fluid">
        <h2 class="page-header">
            Registration Form
        </h2>
        <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        {{Form::open(array('route' => 'save_registration', 'method' => 'POST', 'files' => 'true'))}}
                            {{ csrf_field() }}
                            <div class="content">
                              <div class="row">
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label class="control-label">Title </label>
                                          <input class="form-control" name="title" type="text"  value="{{$user->title}}" disabled/>
                                      </div>
                                  </div>

                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label class="control-label">Sex </label>
                                          <input class="form-control" name="sex" type="text" value="{{$user->sex}}" disabled=""/>
                                      </div>
                                  </div>
                              </div>
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
                                          <label class="control-label">Postal Address</label> <br/>
                                          <textarea class="form-control" name="postal_address" rows="5" cols="10" disabled style="resize:none"> {{$user->postal_address}}</textarea>
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
                                @foreach($eois as $eoi)
                                  @if($eoi->user_id == $user->id)
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="control-label">Postal Address </label>
                                                <textarea class="form-control" name="postal_address" rows="5" cols="10" style="resize:none" disabled="true">{{$eoi->postal_address}}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                  @endif
                                @endforeach
                                <small>If you need to make changes to the information above, <a href="{{route('user_profile')}}">update</a> your profile.</small>
                                <hr/>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label"> Occupation</label> <br/>
                                            <input class="form-control" name="occupation" type="text" placeholder="occupation" value="{{old('occupation')}}"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label"> Alternate Phone Number</label> <br/>
                                            <input class="form-control" name="phone" type="text" placeholder="Alternate Phone Number" value="{{old('phone')}}"/>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Alternate Email </label>
                                            <input class="form-control" name="alt_email" type="email" placeholder="Alternate Email" value="{{old('alt_email')}}"/>
                                        </div>
                                    </div>
                                </div>
                                <hr/> <h4>Next Of Kin Details</h4>
                                <br/>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label"> First Name</label> <br/>
                                            <input class="form-control" name="next_of_kin_first_name" type="text" placeholder="Next Of Kin First Name" value="{{old('next_of_kin_first_name')}}"/>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">Middle Name </label>
                                            <input class="form-control" name="next_of_kin_middle_name" type="text" placeholder="Next Of Kin Middle Name" value="{{old('next_of_kin_middle_name')}}"/>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">Last Name</label>
                                            <input class="form-control" name="next_of_kin_last_name" type="text" placeholder="Next Of Kin Middle Name" value="{{old('next_of_kin_last_name')}}"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label"> Relationship</label> <br/>
                                            <input class="form-control" name="relationship" type="text" placeholder="Relationship with Next Of Kin" value="{{old('relationship')}}"/>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">Phone Number </label>
                                            <input class="form-control" name="next_of_kin_phone_no" type="text" placeholder="Next Of Kin Phone Number" value="{{old('phone_no')}}"/>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">Alternate Phone Number</label>
                                            <input class="form-control" name="next_of_kin_alt_phone" type="text" placeholder="Alternate" value="{{old('alt_phone_no')}}"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label"> Email</label> <br/>
                                            <input class="form-control" name="next_of_kin_email" type="email" placeholder="Email Address" value="{{old('next_of_kin_email')}}"/>
                                        </div>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">Address </label>
                                            <textarea name="next_of_kin_address" class="form-control"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <hr/>
                                <h4>Bank Details</h4>
                                <div class="row">
                                  <div class="col-md-4">
                                      <div class="form-group">
                                          <label class="control-label"> Bank Name </label>
                                          <input class="form-control" name="bank_name" placeholder="Bank Name" value="{{old('bank_name')}}"/>
                                      </div>
                                  </div>
                                  <div class="col-md-4">
                                      <div class="form-group">
                                          <label class="control-label">Account Name </label>
                                          <input class="form-control" name="account_name" placeholder="Account Name" value="{{old('account_name')}}"/>
                                      </div>
                                  </div>
                                  <div class="col-md-4">
                                      <div class="form-group">
                                          <label class="control-label">Account Number </label>
                                          <input class="form-control" name="account_number" placeholder="Account Number" value="{{old('account_number')}}"/>
                                      </div>
                                  </div>
                                </div>
                                <hr/>
                                <div class="row">
                                  <div class="col-md-4">
                                      <div class="form-group">
                                          <label class="control-label"> Number of Hectares (Ha) </label>
                                          <input id="hectares" oninput="calculate()" class="form-control" name="number_of_hectares" placeholder="Number of Hectares" value="{{old('number_of_hectares')}}"/>
                                      </div>
                                  </div>
                                  <div class="col-md-4">
                                      <div class="form-group">
                                          <label class="control-label"> Proposed Investment Amount </label>
                                          <input id="amount" class="form-control" name="proposed_investment_amount" placeholder="Proposed Investment Amount" value="{{old('proposed_investment_amount')}}"/>
                                      </div>
                                  </div>
                                  <div class="col-md-4">
                                      <div class="form-group">
                                          <label class="control-label">Amount Paid </label>
                                          <input class="form-control" name="amount_paid" placeholder="Amount Paid" value="{{old('amount_paid')}}"/>
                                      </div>
                                  </div>
                                </div>
                                <hr/>
                                <div class="row">
                                  <div class="col-md-6">
                                    <select name="communication_channel" class="form-control">
                                      <option value="sms">SMS</option>
                                      <option value="phone">Phone Call</option>
                                      <option value="email">Email</option>
                                      <option value="skype">Skype</option>
                                      <option value="letter">Physical Letter</option>
                                    </select>
                                  </div>
                                </div> <br/>
                                <div class="row">
                                  <div class="form-group col-md-6">
                                    <label for="form_checkbox">
                                      <input id="form_checkbox" name="terms" type="checkbox" data-toggle="modal" data-target="#myModal">
                                      I Accept Terms </label>
                                  </div>

                                  <!-- terms modal -->
                                  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                          <h4 class="modal-title text-theme-colored text-center" id="myModalLabel">General Terms And Conditions</h4>
                                        </div>
                                        <div class="modal-body">
                                          <div class="col-md-12">
                                            <ul class="list-icon font theme-colored rounded">
                                              <li><i class="fa fa-hand-o-right"></i>Prospective Investor must be above the age of 18 years, although investment can be purchased and held on behalf of a minor.</li>
                                              <li><i class="fa fa-hand-o-right"></i>Prospective Investor can invest in either Equity or Debt or both at the same time.</li>
                                              <li><i class="fa fa-hand-o-right"></i>The minimum investment for the debt is N3m for 1ha and maximum investment is N3b for 1000ha.</li>
                                              <li><i class="fa fa-hand-o-right"></i>Each investor is at liberty to visit the field and inspect the progress of work at the site at anytime.</li>
                                              <li><i class="fa fa-hand-o-right"></i>Repayment of Principal invested and interest is at the end of the 12 Months period from the date on the certificate.</li>
                                            </ul>
                                          </div>
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-default" data-dismiss="modal" id="modal_button">Accept</button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>


                                <br/> <br/>
                            <div class="form-group">
                              <button class="btn btn-primary btn-lg btn-block mt-15" type="submit" id="submit">Register</button>
                            </div>
                            <br/> <br/>
                        </div>
                        </form>
                </div>

            </div>
        </div>
        @include('layouts.sessions')
        @include('layouts.errors')
      </div>
    @endif
    <script>
    function calculate() {
      var hectares = document.getElementById("hectares");
      var amount = 3000000 * hectares.value;
      console.log(amount);
      document.getElementById("amount").value = amount;
      console.log(document.getElementById("amount").innerHTML);
    }
    </script>
@endsection
