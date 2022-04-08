@extends('layouts.app')

@section('content')
                <!--========================================================================CONTENT=========================================================================================================-->
                <div class="content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-user">
                                <div class="card-header">
                                    <h5 class="card-title">Add New Event</h5>
                                </div>
                                <div class="card-body">
                                    <form action="add" method="post">
                                        @csrf
                                        <div class="row">                                          
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="e1" class="form-label">Select Event</label>
                                                    <select id="e1" class="form-control">
                                                      <option value="isric">ISRIC</option>
                                                      <option value="cha">CHA</option>
                                                      <option value="vapt">VAPT</option>
                                                      <option value="awareness">Awareness Session</option>
                                                      <option value="training">Training</option>
                                                      <option value="intervention">Intervention Plan</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="choosedate" class="form-label">Choose Date</label>
                                                    <input type="date" id="choosedate" class="form-control" placeholder="">
                                                    <span style="color:red">@error('Select date'){{ $message }} @enderror</span>
                                                </div>
                                            </div>      
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="choosetime" class="form-label">Choose Time</label>
                                                    <input type="time" id="choosetime" class="form-control" placeholder="">
                                                    <span style="color:red">@error('Select time'){{ $message }} @enderror</span>
                                                </div>
                                            </div>               
                                        </div>
                                        <div class="row">
                                            <div class="update ml-auto mr-auto">
                                                <button type="submit" class="btn btn-default btn-round ">Add Event</button>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

               @endsection