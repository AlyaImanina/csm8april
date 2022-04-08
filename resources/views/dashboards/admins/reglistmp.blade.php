@extends('layouts.app')
@section('content')
<!--========================================================================CONTENT=========================================================================================================-->
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="update ml-auto mr-auto float-right">
                        <a class="btn btn-default btn-round btn-tooltip" href="{{ __('regcompanymp') }}">Register</a>
                    </div>
                    <h4 class="card-title"> List of Auth Partner Company</h4>
                </div>
                <div class="card-body">
                    <div class="table">
                        <table class="table">
                            <thead class=" text-primary">
                                <th>No</th>
                                <th>CompanyName</th>
                                <th class="text-right">Action</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Mestro Sdn Bhd</td>
                                    <td class="text-right"><a href="#"><i class="nc-icon nc-simple-remove"></i> </a></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Aiken Hand Company</td>
                                    <td class="text-right"><a href="#"><i class="nc-icon nc-simple-remove"></i> </a></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>7eleven Sdn Bhd</td>
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
@endsection
                
                