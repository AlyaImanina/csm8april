@extends('layouts.app')
@section('content')
<!--========================================================================CONTENT=========================================================================================================-->
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"> </h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md ">
                            <p>Please select the programme that you want</p>
                            <a class="btn btn-secondary" href="{{ __('isgric') }}">ISGRIC Assessment</a>
                            <a class="btn btn-secondary" href="{{ __('cha') }}">CHA Assessment</a>
                            <a class="btn btn-secondary" href="{{ __('vapt') }}">VAPT Assessment</a>
                            <a class="btn btn-secondary" href="{{ __('awarness') }}">Awarness Assessment</a>
                            <a class="btn btn-secondary" href="{{ __('training') }}">Training Assessment</a>
                            <a class="btn btn-secondary" href="{{ __('intervention') }}">Intervention Session</a>
                            {{-- <a class="btn btn-secondary btn-lg btn-block" href="{{ __('overall') }}">Overall SME Result</a> --}}
                            <a class="btn btn-secondary" href="{{ __('overall') }}">Overall SME Result</a>
                            {{-- <button type="button" class="btn btn-secondary btn-sq-responsive">ISGRIC Assesment</button>
                            <button type="button" class="btn btn-secondary btn-sq-responsive">CHA Assesment</button>
                            <button type="button" class="btn btn-secondary btn-sq-responsive">VAPT Assessment</button>
                            <button type="button" class="btn btn-secondary btn-sq-responsive">Awarness Session</button>
                            <button type="button" class="btn btn-secondary btn-sq-responsive">Training</button>
                            <button type="button" class="btn btn-secondary btn-sq-responsive">Intervention Session</button> --}}
                            {{-- <br><br><br>
                            <p>Result of SME</p> --}}
                            
                        </div>                    
                    </div>
                    <div class="row">
                        <div class="col-md">
                            <br>
                            <hr>
                            <p>Upcoming Event</p>
                            <div class="update ml-auto mr-auto float-right">
                                <a class="btn btn-default btn-round" href="{{ __('regnewevent') }}">New Event</a>
                            </div>
                            <table class="table">
                                <thead class=" text-primary">
                                    <th>No</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>Event</th>
                                    <th class="text-right">Action</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>05/04/22</td>
                                        <td>05:30 pm</td>
                                        <td>ISRIC</td>
                                        <td class="text-right"><a href="#"><i class="nc-icon nc-simple-remove"></i> </a></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>10/11/22</td>
                                        <td>10:00 am</td>
                                        <td>CHA</td>
                                        <td class="text-right"><a href="#"><i class="nc-icon nc-simple-remove"></i> </a></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>12/11/22</td>
                                        <td>10:00 am</td>
                                        <td>CHA</td>
                                        <td class="text-right"><a href="#"><i class="nc-icon nc-simple-remove"></i> </a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
                
                