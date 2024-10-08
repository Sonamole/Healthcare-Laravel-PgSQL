@extends('admin.layouts.app')
@section('title')
@section('content')
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Add Dietician</strong>
                            </div>
                            <div class="card-body">

                                <div id="pay-invoice">
                                    <div class="card-body">
                                        <form action="{{ route('admin.dietician.update',$dieticians->id) }}" method="post" novalidate="novalidate" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Name</label>
                                                <input id="cc-payment" name="name" type="text" class="form-control" aria-required="true" aria-invalid="false" value="{{ $dieticians->name }}">
                                            </div>
                                            <div class="form-group has-success">
                                                <label for="cc-name" class="control-label mb-1">Email</label>
                                                <input id="cc-name" name="email" type="text" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card" autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name" value="{{ $dieticians->email }}">
                                                <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                            </div>
                                            <div class="form-group">
                                                <label for="cc-number" class="control-label mb-1">Address</label>
                                                <input id="cc-number" name="address" type="text" class="form-control cc-number identified visa" value="{{ $dieticians->address }}" data-val="true" data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number">
                                                <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                            </div>
                                            <div class="row">

                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">Location</label>
                                                        <input id="cc-exp" name="location" type="text" class="form-control cc-exp" value="{{ $dieticians->location }}" data-val="true" data-val-required="Please enter the card expiration" data-val-cc-exp="Please enter a valid month and year" placeholder="">
                                                        <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">Qualification</label>
                                                        <input id="cc-exp" name="qualification" type="text" class="form-control cc-exp" value="{{ $dieticians->qualification }}" data-val="true" data-val-required="Please enter the card expiration" data-val-cc-exp="Please enter a valid month and year" placeholder="">
                                                        <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="form-group">
                                                <label for="cc-number" class="control-label mb-1">Choose Certificate</label>
                                                <input id="cc-number" name="certificate" type="file" class="form-control cc-number identified visa" value="{{ asset('admin/dietician_certificate/'.$dieticians) }}" data-val="true" data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number">
                                                <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                            </div>
                                            <div class="form-group">
                                                <label for="cc-number" class="control-label mb-1">Password</label>
                                                <input id="cc-number" name="password" type="text" class="form-control cc-number identified visa" value="{{ $dieticians->password }}" data-val="true" data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number">
                                                <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                            </div>
                                            <div>
                                                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                                   Submit
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>


@endsection