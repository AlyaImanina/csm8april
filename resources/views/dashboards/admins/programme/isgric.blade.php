@extends('layouts.app')
@section('content')
<!--========================================================================CONTENT=========================================================================================================-->
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="update ml-auto mr-auto float-right">
                        <a class="btn btn-default btn-round btn-tooltip" href="{{ __('regbookdateisgric') }}">Book New Date</a>
                    </div>
                    <h4 class="card-title">ISGRIC Programme</h4>
                </div>
                <div class="card-body">
                    <div class="table">
                        <table class="table">
                            <thead class=" text-primary">
                                <th>No</th>
                                <th>Date</th>
                                <th>Time</th>
                                <th>CompanyName</th>
                                <th class="text-right">Status</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>05/04/22</td>
                                    <td>05:30 pm</td>
                                    <td>ISRIC</td>
                                    <td class="text-right">Deactive</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>10/11/22</td>
                                    <td>10:00 am</td>
                                    <td>CHA</td>
                                    <td class="text-right">Active</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>12/11/22</td>
                                    <td>10:00 am</td>
                                    <td>CHA</td>
                                    <td class="text-right">Active</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
                
                