@extends('backend.layout.master')

@section('title')
dashboard
@endsection

@section('content')
<div id="main-content">
    <div class="container-fluid">
        <!-- Page header section  -->
        <div class="block-header">
            <div class="row clearfix">
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <h1>Hi, Welcomeback!</h1>
                    <span>JustDo Dashboard,</span>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-12">
                <div class="card theme-bg gradient">
                    <div class="body">
                        <div class="row">
                            <div class="col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="body">
                                        <div>Total Doctors</div>
                                        <div class="mt-3 h1">1,035</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="body">
                                        <div>Total Appointments</div>
                                        <div class="mt-3 h1">735</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="body">
                                        <div>Total Blood Donation</div>
                                        <div class="mt-3 h1">2,652</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="body">
                                        <div>Total Patients</div>
                                        <div class="mt-3 h1">1,671</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection

@section('scripts')

@endsection
