@extends('layouts.app')

@section('content')
                <!--========================================================================CONTENT=========================================================================================================-->
                <div class="content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-user">
                                <div class="card-header">
                                    <h5 class="card-title">Book Date</h5>
                                </div>
                                <div class="card-body">
                                    <div class="row">                                          
                                        <div class="col-md-6">
                                            <div class="table">
                                                <table class="table">
                                                    <thead class=" text-primary">
                                                        <th>No</th>
                                                        <th>Date</th>
                                                        <th>Time</th>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>05/11/22</td>
                                                            <td>03:30 pm</td>
                                                        </tr>
                                                        <tr>
                                                            <td>2</td>
                                                            <td>10/11/22</td>
                                                            <td>10:00 am</td>
                                                        </tr>
                                                        <tr>
                                                            <td>3</td>
                                                            <td>12/11/22</td>
                                                            <td>10:00 am</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <form action="add" method="post">
                                        @csrf
                                        <div class="row">                                          
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="e1" class="form-label">Select SME</label>
                                                    <select id="e1" class="form-control">
                                                      <option value="isric">&E</option>
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