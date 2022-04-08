@extends('layouts.app')

@section('content')
                <!--========================================================================CONTENT=========================================================================================================-->
                <div class="content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-user">
                                <div class="card-header">
                                    <h5 class="card-title text-center">Register Company</h5>
                                </div>
                                <div class="card-body">
                                    <form action="add" method="post">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6">
                                                <p class="card-category"><b>Company Details</b></p>
                                                <div class="form-group">
                                                    <label for="companyname" class="form-label">Company Name</label>
                                                    <input type="text" id="companyname" class="form-control" placeholder="Company name">
                                                    <span style="color:red">@error('Fill company name'){{ $message }} @enderror</span>
                                                </div>
                                            </div>                    
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="companyaddr" class="form-label">Company Address</label>
                                                    <input id="autocomplete" placeholder="Enter your company address" onFocus="geolocate()" type="text" class="form-control">
                                                    {{-- <input type="number" class="form-control" placeholder="Contact No"> --}}
                                                    <span style="color:red">@error('Fill company address'){{ $message }} @enderror</span>
                                                </div>
                                            </div>
                                            {{-- <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Street address</label>
                                                    <input type="text" class="form-control" id="street_number">
                                                </div>
                                            </div> --}}
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="control-label">Postcode</label>
                                                    <input type="number" class="form-control" id="postcode" placeholder="ZIP Code">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="control-label">City</label>
                                                    <input type="text" class="form-control" id="locality" placeholder="City">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="control-label">State</label>
                                                    <input type="text" class="form-control" id="state" placeholder="State">
                                                </div>
                                            </div>
                                            <div class="col-md-3">                        
                                                <div class="form-group">
                                                    <label class="control-label">Country</label>
                                                    <input type="text" class="form-control" id="country" placeholder="Country">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">                                          
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="contactperson" class="form-label">Contact Person</label>
                                                    <input type="text" id="contactperson" class="form-control" placeholder="Contact person">
                                                    <span style="color:red">@error('Fil contact person'){{ $message }} @enderror</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="phoneno" class="form-label">Mobile Phone</label>
                                                    <input type="tel" id="phoneno" class="form-control" placeholder="Mobile number">
                                                    <span style="color:red">@error('phone no'){{ $message }} @enderror</span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="email" class="form-label">Email</label>
                                                    <input type="email" id="email" class="form-control" placeholder="Email">
                                                    <span style="color:red">@error('email'){{ $message }} @enderror</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">                                          
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="q1" class="form-label">Geography - The location of majority of people who use your company's IT facilities for business operations*</label>
                                                    <select id="q1" class="form-control">
                                                      <option value="Johor">Johor</option>
                                                      <option value="Kedah">Kedah</option>
                                                      <option value="Kelantan">Kelantan</option>
                                                      <option value="Kuala Lumpur">Kuala Lumpur</option>
                                                      <option value="Labuan">Labuan</option>
                                                      <option value="Malacca">Malacca</option>
                                                      <option value="Negeri Sembilan">Negeri Sembilan</option>
                                                      <option value="Pahang">Pahang</option>
                                                      <option value="Perak">Perak</option>
                                                      <option value="Perlis">Perlis</option>
                                                      <option value="Penang">Penang</option>
                                                      <option value="Sabah">Sabah</option>
                                                      <option value="Sarawak">Sarawak</option>
                                                      <option value="Selangor">Selangor</option>
                                                      <option value="Terengganu">Terengganu</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="q3" class="form-label">In which Government Agencies does the company has mainly attached to</label>
                                                    <select id="q3" class="form-control" placeholder="please select">
                                                        <option value="Please select">Please select</option>
                                                        <option value="MITI">MITI</option>
                                                        <option value="MARA">MARA</option>
                                                        <option value="MDEC">MDEC</option>
                                                        <option value="MTDC">MTDC</option>
                                                        <option value="SMECorp">SMECorp</option>
                                                        <option value="TPM">TPM</option>
                                                        <option value="None">None</option>
                                                        <option value="Others">Others</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="q4" class="form-label">In which sectors does your company mainly involved?*</label>
                                                    <select id="q4" class="form-control" placeholder="please select">
                                                        <option value="Please select">Please select</option>
                                                        <option value="agriculture">Agriculture</option>
                                                        <option value="mining">Mining & Quarrying</option>
                                                        <option value="manufacturing">Manufacturing</option>
                                                        <option value="construction">Construction</option>
                                                        <option value="services">Services</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="update ml-auto mr-auto">
                                                <button type="submit" class="btn btn-default btn-round ">Register</button>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

               @endsection