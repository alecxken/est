@extends('layouts.template')

@section('title', '| Add User')

@section('content')

<div class="box-body">
  

    <div class="col-lg-10 col-lg-offset-1" id="test">
          <div class="box box-primary">
                <div class="box-header with-border bg-info">
                      <h3 class="box-title"><i class='fa fa-pencil'></i> Data Capture</h3>
                      <div class="box-tools pull-right">  
                      </div>
                </div>
                <div class="box box-primary"></div>
              <div class="box-body">


                            {{ Form::open(array('url' => '')) }}

                            <div class="form-group col-md-4">
                                {{ Form::label('name', 'Delivery Ref') }}
                                {{ Form::text('ref_token', '', array('class' => 'form-control  input-sm')) }}
                            </div>

                            <div class="form-group col-md-4">
                                {{ Form::label('email', 'Client Name') }}
                                {{ Form::number('client_name', '', array('class' => 'form-control input-sm')) }}
                            </div>

                            <div class="form-group col-md-4">
                                {{ Form::label('email', 'Instruction Date') }}
                                {{ Form::number('inst_date', '', array('class' => 'form-control input-sm')) }}
                            </div>

                            <div class="form-group col-md-4">
                                {{ Form::label('name', 'Description') }}
                                {{ Form::text('desc', '', array('class' => 'form-control input-sm ')) }}
                            </div>

                            <div class="form-group col-md-4">
                                {{ Form::label('email', 'Beneficiary Name') }}
                                {{ Form::number('ben_name', '', array('class' => 'form-control input-sm')) }}
                            </div>

                            <div class="form-group col-md-4">
                                {{ Form::label('email', 'Beneficiary ID') }}
                                {{ Form::number('ben_id', '', array('class' => 'form-control input-sm')) }}
                            </div>

                             <div class="form-group col-md-4">
                                {{ Form::label('email', 'Beneficiary Phone') }}
                                {{ Form::text('ben_phone', '', array('class' => 'form-control input-sm')) }}
                            </div> 

                            <div class="form-group col-md-4">
                                {{ Form::label('name', 'Location of Delivery') }}
                                {{ Form::text('loc_delivery', '', array('class' => 'form-control input-sm')) }}
                            </div>

                            <div class="form-group col-md-4">
                                {{ Form::label('email', 'Currency') }}
                               <select class="form-control input-sm" name="ccy" required="">
                                 <option value="">Choose Currency</option>
                                 <option>SSP</option>
                                 <option>USD</option>
                               </select>
                            </div>

                             <div class="form-group col-md-4">
                                {{ Form::label('email', 'Client Reference') }}
                                {{ Form::text('client_ref', '', array('class' => 'form-control input-sm')) }}
                            </div>

                              <div class="form-group col-md-4">
                                {{ Form::label('email', 'Delivery Date') }}
                                {{ Form::date('delivery_date', '', array('class' => 'form-control input-sm')) }}
                            </div>

                             <div class="form-group col-md-4">
                                {{ Form::label('name', ' USD:SSP Rate') }}
                                {{ Form::text('rate', '', array('class' => 'form-control input-sm')) }}
                            </div>


                            <div class="form-group col-md-4">
                                {{ Form::label('email', 'Attach Client Instruction') }}
                                {{ Form::file('client_inst', null, array('class' => 'form-control input-sm','required')) }}
                            </div>

                             <div class="form-group col-md-4">
                                {{ Form::label('name', 'Attach Payment List') }}
                                {{ Form::file('payment_list', null, array('class' => 'form-control input-sm')) }}
                            </div>

                             <div class="form-group col-md-4">
                                {{ Form::label('name', 'Reviewer') }}
                                {{ Form::text('reviewer', '', array('class' => 'form-control input-sm')) }}
                            </div>

                       


                            

                </div>
                <div class="box-footer">
                    {{ Form::submit('Submit For Approval', array('class' => 'btn btn-success pull-right')) }}


                </div>
                                            {{ Form::close() }}
            </div>
        </div>
        </div>
@endsection
