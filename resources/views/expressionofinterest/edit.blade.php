<div class="row">
    <div class="modal fade m-medium" id="modal_edit_{{$eoi->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-edit-undertaking" data-backdrop="false">
        <div class="modal-dialog" role="document">
            {{Form::open(['route' => ['update_interest', $eoi->id], 'method' => 'POST', 'id' => 'editUser'])}}
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel">Edit?</h4>
                </div>
                <div class="modal-body">
                  <div class="row" >
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">Number of Hectares</label>
                            <input type="text" class="form-control" placeholder="Hectares" name="number_of_hectares" value="{{$eoi->number_of_hectares}}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">Proposed Subscription Date</label>
                            <input type="date" class="form-control" name="proposed_subscription_date" value="{{$eoi->proposed_subscription_date}}">
                        </div>
                    </div>
                  </div>
                   <div class="row" >
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">occupation</label>
                            <input type="text" class="form-control" placeholder="Occupation" name="occupation" value="{{$eoi->occupation}}">
                        </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="name">Postal Address</label>
                            <textarea class="form-control" name="postal_address" rows="5" cols="10" style="resize:none">{{$eoi->postal_address}}</textarea>
                        </div>
                    </div>
                  </div>
                <input type="hidden" name="_token" id="_token" value="{{{ csrf_token() }}}" />

                  </div>

                <div class="modal-footer">
                    {{Form::submit('Save', ['class' => 'btn btn-info btn-fill pull-right', 'id' => 'submitBtn'])}}
                </div>
            </div>
            {{Form::close()}}
        </div>
    </div>
</div>
