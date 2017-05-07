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
        TERMS AND CONDITIONS <small>Please read these terms and conditions
        carefully, as they border on your legal rights and obligations relation
        to VIP (Vicampro Investment Plan) Project. You are required to agree to
        these terms and conditions before subscribing.
        These terms and conditions are available in the English language only.
        You should print a copy of these terms and conditions for future
        reference. We will not file a copy specifically in relation to you,
        and they may not be accessible on our website in future</small>
    </h1>
    <div class="row">
            <div class="col-md-8">
                <div class="card">
                  <div class="row"> <h3>Definitions and Interpretations</h3>
                      <h3>In the Agreement:</h3>
                      <p>"Agreement" means the agreement between the VIP
                        (Vicampro Investment Plan) and the Subscriber (You)
                        made under these terms and conditions, and any
                        amendments to that agreement from time to time;</p>
                      <p>"Subscription Form" means forms, both soft copy on the
                          website and hard copy printed for the purpose of
                          gathering data of the intended Subscriber in the VIP
                          Project, and also enabling individuals and
                          organizations to apply to become a subscriber of the
                          Project;</p>
                      <p>"Subscription" means the amount payable by the
                        Subscriber to the VIP under or in relation to the
                        Agreement, which amount is selected by the Subscriber
                        using the Subscription Form;</p>
                      <p>"VIP" means Vicampro Investment Plan, a Project of
                        Vicampro Farms Limited, a company incorporated in
                        Nigeria, having its registered office at 285 Jaja
                        Wachukwu, Wuye FCT Abuja, Nigeria;</p>
                      <p>"Force Majeure Event" means an event, or a series of
                        related events, that is outside the reasonable control of
                        the party affected (including failures of or problems
                        with the internet or a part of the VIP website, diseases,
                        acts of God, industrial disputes affecting any third
                        party, changes to the law, disasters, explosions, fires,
                        floods, riots, terrorist attacks and wars);</p>
                      <p>"Subscription Target" means the minimum aggregate
                        contributions required before a Project will be
                        undertaken, as published on the VIP website</p>
                      <p>"Intellectual Property Rights" means all intellectual
                        property rights wherever in the world, whether registered
                        or unregistered, including any application or right of
                        application for such rights (and the "intellectual
                        property rights" referred to above include copyright and
                        related rights, database rights, confidential
                        information, trade secrets, know-how, business names,
                        trade names, trademarks, service marks, passing off
                        rights, unfair competition rights, patents, petty
                        patents, utility models, semi-conductor topography
                        rights and rights in designs);</p>
                      <p>"Project" means the plan and process put together to
                        develop the VIP Investment that is the subject of the
                        Agreement (and may be the subject of other agreements
                        entered into by the VIP with additional third party
                        subscribers);</p>
                      <p>"Project Funding Date" means the cut-off date by which
                        the Funding Target for a Project must be met, as it
                        may be varied in accordance with the earlier sell out of
                        all available slots</p>
                      <p>"ROI" means the Return On Investment</p>
                      <p>"Hectare" means the allocated portion of farmland, which
                        is the Investment slot of the Project;</p>
                      <p>"Allocation" means the description and situation of
                        the hectare farmland as it may be varied in accordance
                        with the number of slots</p>
                      <p>“Slot” means the unit of investment subscribe-able by a
                         Subscriber</p>
                      <p>"Subscriber" means the individual, partnership or
                        corporate entity identified as such on the Subscription
                        Form; and</p>
                      <p>"Target Completion Date" means the target date for
                        delivery of the ROI as put out on the VIP website.</p>
                  </div>
                </div>
            </div>
        @include('layouts.sessions')
        @include('layouts.errors')
    </div>
  </div>
@endsection
